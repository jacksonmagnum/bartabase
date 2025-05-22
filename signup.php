<?php
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Content-Type: application/json');

// DB config
$dsn = 'mysql:host=localhost;dbname=bartabase;charset=utf8mb4';
$db_user = 'root';
$db_pass = '';

$base_url = 'http://localhost/bartabase/verify.php';

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database connection failed']);
    exit;
}

// Sanitize and validate input
$data = json_decode(file_get_contents('php://input'), true);
$name = htmlspecialchars(trim($data['name'] ?? ''));
$username = htmlspecialchars(trim($data['username'] ?? ''));
$email = filter_var($data['email'] ?? '', FILTER_VALIDATE_EMAIL);
$password = $data['password'] ?? '';
$agree_terms = $data['agree_terms'] ?? false;

if (!$name || !$username || !$email || !$password || !$agree_terms) {
    http_response_code(400);
    echo json_encode(['error' => 'All fields are required and must be valid']);
    exit;
}

if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d).{7,}$/', $password)) {
    http_response_code(422);
    echo json_encode(['error' => 'Password must be at least 7 characters with letters and numbers']);
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
$token = bin2hex(random_bytes(32));
$token_expiry = date('Y-m-d H:i:s', strtotime('+1 day'));

try {
    // Save user
    $stmt = $pdo->prepare("INSERT INTO users (name, email, username, password, is_verified, created_at) VALUES (?, ?, ?, ?, 0, NOW())");
    $stmt->execute([$name, $email, $username, $hashedPassword]);

    $user_id = $pdo->lastInsertId();

    // Save token
    $stmt = $pdo->prepare("INSERT INTO email_verifications (user_id, token, expires_at) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $token, $token_expiry]);
} catch (PDOException $e) {
    http_response_code(409);
    echo json_encode(['error' => 'User already exists or DB error']);
    exit;
}

// Send email
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['GMAIL_USERNAME'];
    $mail->Password = $_ENV['GMAIL_APP_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
    $mail->addAddress($email, $name);
    $mail->isHTML(true);

    $verifyLink = "$base_url?token=$token";
    $mail->Subject = 'Verify Your Email';
    $mail->Body = "Hi $name,<br><br>Please verify your email by clicking the link below:<br><a href='$verifyLink'>$verifyLink</a><br><br>Thank you for joining Bartabase.";

    $mail->send();

    echo json_encode([
        'success' => true,
        'message' => 'Signup successful! Check your email to verify your account.',
        'redirect' => 'confirm-email.php'
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to send verification email: ' . $mail->ErrorInfo]);
}

