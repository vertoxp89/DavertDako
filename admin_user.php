<?php
$host = "localhost";
$dbname = "toink";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define admin credentials
$admin_username = "admin";
$admin_password = password_hash("admin123", PASSWORD_DEFAULT); // Securely hash the password
$admin_role = "admin";

// Insert the admin user into the database
$stmt = $conn->prepare("INSERT INTO user (username, password, role) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $admin_username, $admin_password, $admin_role);

if ($stmt->execute()) {
    echo "Admin user created successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
