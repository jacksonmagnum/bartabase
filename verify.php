<?php
// verify.php

require __DIR__ . '/vendor/autoload.php';
header('Content-Type: text/html; charset=UTF-8');

// Database config
$dsn = 'mysql:host=localhost;dbname=bartabase;charset=utf8mb4';
$db_user = 'root';
$db_pass = '';

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Database connection failed.");
}

$token = $_GET['token'] ?? '';

if (!$token || strlen($token) !== 64) {
    die("Invalid or missing verification token.");
}

$stmt = $pdo->prepare("SELECT * FROM email_verifications WHERE token = ? AND expires_at > NOW()");
$stmt->execute([$token]);
$verification = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$verification) {
    die("This verification link is invalid or has expired.");
}

$user_id = $verification['user_id'];

// Mark user as verified
$pdo->prepare("UPDATE users SET is_verified = 1 WHERE id = ?")->execute([$user_id]);

// Remove token from table
$pdo->prepare("DELETE FROM email_verifications WHERE token = ?")->execute([$token]);

// Redirect to thank you page or show message
header("Location: thank-you.php");
exit;
