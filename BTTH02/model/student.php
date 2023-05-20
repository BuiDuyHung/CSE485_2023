<?php
    class student extends DB{
        public function __construct(){parent::__construct();}

        public function getAll(){
            $sql = "select id, fullName from students";
            $stmt = parent::pdo($sql);
            return $stmt->fetchAll();
        }

    }