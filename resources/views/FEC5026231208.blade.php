<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/FEC5026231208/styles.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <img src="{{ asset('images/FEC5026231208/logo.png') }}" alt="Cek Dong!" class="logo">
            <h2>Login as User</h2>
        </div>
        <form class="login-form">
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <a href="#" class="forgot-password">Forgot Password</a>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
