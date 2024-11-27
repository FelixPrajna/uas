<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .register-container {
            max-width: 400px;
            width: 100%;
            background: #fff;
            padding: 20px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .register-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .register-container label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .register-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .register-container button {
            width: 100%;
            padding: 10px;
            background: #6a5acd;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .register-container button:hover {
            background: #574bdb;
        }
        .register-container a {
            color: #6a5acd;
            text-decoration: none;
            font-size: 14px;
            text-align: center;
            display: block;
        }
        .register-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register.process') }}">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <button type="submit">Register</button>
        </form>
        <a href="{{ route('login') }}">Already have an account? Login here</a>
    </div>
</body>
</html>
