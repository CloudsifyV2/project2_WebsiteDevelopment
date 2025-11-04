<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/login.css">
    <title>Bloggy</title>
</head>
<body>
    <div class="login-container">
        <header>
            <h2 class="title">Welcome!</h2>
            <p class="description">Enter the required information to create your account</p>
        </header>

        <form class="login-form" action="/login" method="POST">
            <label class="subtitle" for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <br>
            <label class="subtitle" for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <br>
            <label class="subtitle" for="password">Confirm Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <br>
            <button type="submit">Register</button>

            <p class="reghere">Already have an account? <a href="/login.php"><span>Login Here</span></a></p>
        </form>
    </div>
</body>
</html>