<?php
function connect()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_attendance";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    return $conn;
}
