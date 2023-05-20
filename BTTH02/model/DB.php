<?php
    $host = 'localhost';
    $username = "root";
    $password = "";
    $database = "ql_diemdanh";
    $conn = null;

    $dsn = "mysql:host=" . $host . ";dbname=" . $database . ";charset=utf8";
    try{
        $conn = new PDO($dsn, $username, $password);
    }catch(PDOException $ex){
        die("Lỗi kết nối!");
    }

    function pdo(string $sql, array $arguments = null)
    {
        Global $conn;
        if (!$arguments) {                   
            return $conn->query($sql);      
        }
        $statement = $conn->prepare($sql);    
        $statement->execute($arguments);     
        return $statement;                   
    }
?>

