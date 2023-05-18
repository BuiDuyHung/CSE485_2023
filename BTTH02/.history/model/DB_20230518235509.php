<?php

class DB
{
    private $conn;

    // Kết nối cơ sở dữ liệu
    public function __construct()
    {
        $host = "localhost";
        $username = "username";
        $password = "password";
        $database = "database";

        $this->conn = new mysqli($host, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Kết nối không thành công: " . $this->conn->connect_error);
        }
    }

    // Hàm tạo một bản ghi mới
    public function createRecord($name, $email)
    {
        $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $name, $email);

        if ($stmt->execute()) {
            $recordId = $stmt->insert_id;
            echo "Tạo bản ghi thành công. ID: " . $recordId;
        } else {
            echo "Lỗi: " . $this->conn->error;
        }

        $stmt->close();
    }

    // Hàm đọc một bản ghi
    public function getRecord($recordId)
    {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $recordId);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $record = $result->fetch_assoc();
            echo "ID: " . $record['id'] . ", Tên: " . $record['name'] . ", Email: " . $record['email'];
        } else {
            echo "Không tìm thấy bản ghi.";
        }

        $stmt->close();
    }

    // Hàm cập nhật một bản ghi
    public function updateRecord($recordId, $name, $email)
    {
        $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $email, $recordId);

        if ($stmt->execute()) {
            echo "Cập nhật bản ghi thành công.";
        } else {
            echo "Lỗi: " . $this->conn->error;
        }

        $stmt->close();
    }

    // Hàm xóa một bản ghi
    public function deleteRecord($recordId)
    {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $recordId);

        if ($stmt->execute()) {
            echo "Xóa bản ghi thành công.";
        } else {
            echo "Lỗi: " . $this->conn->error;
        }

        $stmt->close();
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
