<?php
session_start();
require_once __DIR__ . '/../config/MySQL.php'; // adjust if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input safely
    $input = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Basic validation
    if (empty($input) || empty($password)) {
        echo "Please enter your username/email and password.";
        exit;
    }

    // Determine whether input is email or username
    if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE email = ?");
    } else {
        $stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE username = ?");
    }

    $stmt->bind_param("s", $input);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 0) {
        echo "No account found with that username or email.";
        $stmt->close();
        $conn->close();
        exit;
    }

    // Get user info
    $user = $result->fetch_assoc();

    // Verify password
    if (!password_verify($password, $user['password'])) {
        echo "Incorrect password.";
        $stmt->close();
        $conn->close();
        exit;
    }

    // Login successful — store user info in session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];

    header("Location: ../hub.php");

    $stmt->close();
    $conn->close();
}
?>
