<?php
session_start();
header('Content-Type: application/json');

// DB configuration
$dsn = 'mysql:host=localhost;dbname=bartabase;charset=utf8mb4';
$db_user = 'root';
$db_pass = '';

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Database connection failed.',
        'error_code' => 'db_connection_failed'
    ]);
    exit;
}

// Get request data
$data = json_decode(file_get_contents('php://input'), true);
$identifier = trim($data['identifier'] ?? '');
$password = $data['password'] ?? '';

if (!$identifier || !$password) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => 'Both email/username and password are required.',
        'error_code' => 'missing_fields'
    ]);
    exit;
}

// Search for user by email or username
$stmt = $pdo->prepare("SELECT id, username, password, is_verified FROM users WHERE email = ? OR username = ?");
$stmt->execute([$identifier, $identifier]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// User not found
if (!$user) {
    http_response_code(404);
    echo json_encode([
        'success' => false,
        'error' => 'Login Error: User Does Not Exist! Create an account here.',
        'error_code' => 'user_not_found'
    ]);
    exit;
}

// Wrong password
if (!password_verify($password, $user['password'])) {
    http_response_code(401);
    echo json_encode([
        'success' => false,
        'error' => 'Username or Password is incorrect!',
        'error_code' => 'invalid_credentials'
    ]);
    exit;
}

// Not verified
if (!$user['is_verified']) {
    http_response_code(403);
    echo json_encode([
        'success' => false,
        'error' => 'Please verify your email before logging in.',
        'error_code' => 'not_verified'
    ]);
    exit;
}

// Set session on successful login
$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];

echo json_encode(['success' => true]);
