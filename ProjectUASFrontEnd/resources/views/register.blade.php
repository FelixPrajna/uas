<!DOCTYPE html>
<html ng-app="registrationApp">
<head>
    <link rel="stylesheet" href="css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="/js/register.js"></script>
    <title>BiteOfBliss - Register</title>
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

<body ng-controller="RegistrationController">
    <div class="register-container">
        <h1>Register</h1>
        <form ng-submit="register()">
            <label for="username">Username:</label>
            <input type="text" id="username" ng-model="user.username" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" ng-model="user.email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" ng-model="user.password" required>
            <br>
            <button type="submit">Register</button>
        </form>

        <div class="register-link-container">
            <p>Already have an account? <span class="register-link" ng-click="redirectToLogin()">Login here</span></p>
        </div>
    </div>
</body>
</html>
