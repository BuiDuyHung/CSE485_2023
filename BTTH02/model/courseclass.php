<?php
    class courseclass extends DB{
        public function __construct(){parent::__construct();}

        public function getAll(){
            $sql = "select id, name from courseclass";
            $stmt = parent::pdo($sql);
            return $stmt->fetchAll();
        }
        
        public function getStudentInClass($idClass){
            $sql = "select student_id from classdetail where class_id = :id";
            $stmt = parent::pdo($sql,['id'=>$idClass]);
            return $stmt->fetchAll();
        }
    }
?>