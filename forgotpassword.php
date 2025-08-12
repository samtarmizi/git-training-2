<?php
// forgotpassword.php

// Handle form submission
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Here you would normally check if the email exists in your database
        // and send a password reset link to the user.
        // For demonstration, we'll just show a success message.
        $message = "If an account with that email exists, a password reset link has been sent.";
    } else {
        $message = "Please enter a valid email address.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Forgot Password</h2>
    <?php if ($message): ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>
    <form method="post" action="forgotpassword.php">
        <label for="email">Email Address:</label><br>
        <input type="email" name="email" id="email" required><br><br>
        <button type="submit">Send Reset Link</button>
    </form>
</body>
</html>