<?php
    class student extends DB{
        public function __construct(){parent::__construct();}

        public function getStudentById($stuId){
            $sql = "select fullName, email from students where id=:id";
            $stmt = parent::pdo($sql,[':id'=>$stuId]);
            return $stmt->fetch();
        }

        public function getStudentByUserId($userId){
            $sql = "select students.id, fullName, students.email 
                    from students, users
                    where students.user_id = users.id and user_id = :id";
            $stmt = parent::pdo($sql, [':id'=>$userId]);
            return $stmt->fetch();
        }

        public function getStudentByAttendanceId($attID){
            $sql = "select attendancerecords.student_id, fullName, email, status
                    from attendancerecords 
                    inner join students ON students.ID = attendancerecords.student_id
                    where attendance_id = :att_id ";
            $stmt = parent::pdo($sql,[':att_id'=>$attID]);
            return $stmt->fetchAll();
        }

    }