<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="/login" method="post">
                <input type="text" placeholder="Username or Email" required>
                <input type="password" placeholder="Password" required>
                <div class="btn"><button type="submit" name="log_btn">Log In</button></div>
            </form>
            <p>Don't have an account? <span></span> <a href="/register">Register here</a></p>
        </div>
    </div>
</body>
</html>
