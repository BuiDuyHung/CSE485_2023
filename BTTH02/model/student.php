<?php
    class student extends DB{
        public function __construct(){parent::__construct();}

        public function getStudentByAttendanceId($attID){
            $sql = "select attendancerecords.student_id, fullName, email, status
                    from attendancerecords 
                    inner join students ON students.ID = attendancerecords.student_id
                    where attendance_id = :att_id ";
            $stmt = parent::pdo($sql,[':att_id'=>$attID]);
            return $stmt->fetchAll();
        }

    }