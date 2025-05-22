<?php
require __DIR__ . '/vendor/autoload.php';
$pdo = new PDO("mysql:host=localhost;dbname=your_database_name;charset=utf8mb4", "your_user", "your_pass");

if (!isset($_GET['token'])) {
    die("Invalid token.");
}

$token = $_GET['token'];
$stmt = $pdo->prepare("SELECT user_id FROM email_verifications WHERE token = :token LIMIT 1");
$stmt->execute(['token' => $token]);
$result = $stmt->fetch();

if (!$result) {
    die("Invalid or expired token.");
}

$userId = $result['user_id'];

// Mark user as verified
$pdo->prepare("UPDATE users SET is_verified = 1 WHERE id = :id")->execute(['id' => $userId]);
// Optionally: delete the token
$pdo->prepare("DELETE FROM email_verifications WHERE user_id = :id")->execute(['id' => $userId]);

echo "<h2>🎉 Thank you! Your email has been verified.</h2>
<p>You can now continue to <a href='https://yourdomain.com/shop'>make purchases</a>.</p>";
