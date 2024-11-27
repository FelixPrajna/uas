<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .login-container {
            display: flex;
            max-width: 900px;
            width: 100%;
            background: #fff;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .login-form {
            flex: 1;
            padding: 40px;
        }
        .login-form h1 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .login-form label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background: #6a5acd;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-form button:hover {
            background: #574bdb;
        }
        .login-form a {
            color: #6a5acd;
            text-decoration: none;
            font-size: 14px;
        }
        .login-form a:hover {
            text-decoration: underline;
        }
        .login-image {
            flex: 1;
            background: url('https://via.placeholder.com/450') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h1>Welcome back!</h1>
            <form method="POST" action="{{ route('login.process') }}">
                @csrf
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                <div style="margin-bottom: 20px;">
                    <input type="checkbox" id="remember" name="remember" style="margin-right: 10px;">
                    <label for="remember" style="display: inline;">Remember me</label>
                    <a href="#" style="float: right;">Forgot your password?</a>
                </div>
                <button type="submit">Log In</button>
            </form>
            <p style="text-align: center; margin-top: 20px;">Or Login with</p>
            <button style="background: #f1f1f1; color: #333; margin-bottom: 10px;">Sign up with Google</button>
            <p style="text-align: center;">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
        </div>
        <div class="login-image"></div>
    </div>
</body>
</html>
