<?php
// Start session
session_start();

// If already logged in, redirect to dashboard
if (isset($_SESSION['username']) && $_SESSION['role'] == 'admin') {
    header("Location: budget_utilization_form.php
.php");
    exit();
}

include('home.php'); // Assuming sidebar.php contains the sidebar layout
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* Body - Centering the content */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Login container styling */
        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Header */
        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Form styling */
        .login-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Label and input field styling */
        .login-container label {
            width: 100%;
            text-align: left;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 14px;
            box-sizing: border-box;
        }

        /* Submit button */
        .login-container input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        /* Hover effect for submit button */
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Logo image styling */
        .login-container img {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
        }

        /* Mobile responsiveness */
        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
                width: 90%;
            }

            .login-container input[type="submit"],
            .login-container input[type="text"],
            .login-container input[type="password"] {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <img src="logo_placeholder.png" alt="Logo"> <!-- Replace with actual logo -->
        <h1>Admin Login</h1>
        <form method="post" action="budget_utilization_form.php">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            
            <input type="submit" value="Login">
        </form>
    </div>

</body>
</html>
