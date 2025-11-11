<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Bloggy</title>
</head>
<body>
    <div class="login-container">
        <header>
            <h2 class="title">Welcome back!</h2>
            <p class="description">Enter your credentials to access your account</p>
        </header>

        <form class="login-form" action="DO/do_login_check.php" method="POST">
            <?php if (isset($_SESSION['error'])): ?>
                <p class="error-message">
                    <?= htmlspecialchars($_SESSION['error']) ?>
                </p>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>

            <label class="subtitle" for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <br>
            <label class="subtitle" for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <br>
            <button type="submit">Login</button>

            <p class="reghere">Don't have an account? <a href="register.php"><span>Register Here</span></a></p>
        </form>
    </div>
</body>
</html>
