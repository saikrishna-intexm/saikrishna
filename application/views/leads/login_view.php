<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #e74c3c;
            text-align: center;
            margin-bottom: 15px;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 15px;
                max-width: 100%;
            }

            .login-container input[type="submit"] {
                font-size: 14px;
            }
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
                max-width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php if ($this->session->flashdata('error_message')): ?>
            <p class="error-message"><?php echo $this->session->flashdata('error_message'); ?></p>
        <?php endif; ?>
        <form action="<?php echo site_url('login/authenticate'); ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
