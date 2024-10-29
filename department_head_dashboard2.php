<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #1e3c72; /* Dark blue */
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 22px;
            color: #f5b041; /* Light yellow */
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-bottom: 1px solid #f0f0f0;
        }

        .sidebar a:hover {
            background-color: #f5b041;
            color: #333;
        }

        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            height: 100vh;
            background-image: url('background_image.jpg'); /* Add your background image */
            background-size: cover;
            background-position: center;
        }

        /* Top bar navigation */
        .top-nav {
            background-color: #004080;
            padding: 10px;
            text-align: center;
            color: white;
            position: relative;
            font-size: 18px;
        }

        .top-nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 16px;
        }

        .top-nav a:hover {
            background-color: #f5b041;
            color: black;
        }

        .announcement-section {
            margin-top: 30px;
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .announcement-section h2 {
            font-size: 20px;
            color: #333;
        }

        .announcement-section textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #f5b041;
            border: none;
            padding: 10px 20px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #d48b2f;
        }

        /* Bottom buttons */
        .button-container {
            display: flex;
            justify-content: space-between;
            max-width: 200px;
            margin-left: auto;
            margin-right: auto;
        }

        .button-container button {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #1e3c72;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .button-container button:hover {
            background-color: #f5b041;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 200px;
            }

            .announcement-section {
                width: 90%;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Department Head</h2>
        <a href="#">Dashboard</a>
        <a href="appointment.php">Appointment</a>
        <a href="#">Queries</a>
        <a href="#">Check Data</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <div class="top-nav">
            <a href="appointment.php">Appointment</a>
            <a href="#">Queries</a>
            <a href="#">Check Data</a>
            <a href="#">Manage User</a>
            <a href="logout.php">Logout</a>
        </div>

    </div>

</body>

</html>
