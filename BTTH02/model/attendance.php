<?php
    include('../model/DB.php');
    class attendance{
        public function __construct(){}

        public function getAll(){
            $sql = "select * from attendance";
            $stmt = pdo($sql);
            return $stmt->fetchAll();
        }

        public function insert(){

        }

        
    }
?>