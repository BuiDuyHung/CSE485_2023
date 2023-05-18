<?php
$servername = "localhost"; // Tên máy chủ CSDL
$username = "root"; // Tên người dùng CSDL
$password = ""; // Mật khẩu CSDL
$database = "db_attendance"; // Tên CSDL

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối CSDL thất bại: " . $conn->connect_error);
}
