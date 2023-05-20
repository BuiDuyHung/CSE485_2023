<?php
    class attendance extends DB{
        public function __construct(){parent::__construct();}

        public function getAll(){
            $sql = "select * from attendance";
            $stmt = parent::pdo($sql);
            return $stmt->fetchAll();
        }

        public function insertAttendance($lecturer_id, $date, $class_id, $timeStart, $timeEnd){
            $sql = "insert into attendance (`days`, `lecturer_id`, `id_courseClass`, `time_begin`, `time_end`) values (:day,:lecturer_id,:class_id,:timeStart,:timeEnd)";
            $array = ['day'=>$date, 'lecturer_id'=>$lecturer_id, 'class_id'=>$class_id, 'timeStart'=>$timeStart, 'timeEnd'=>$timeEnd];
            $stmt = parent::pdo($sql,$array);
        }

        public function insertAttendanceRecord($arrayStudent){
            $id = parent::getLastInsertId();
            $sql = "insert into attendancerecords (`attendance_id`, `student_id`, `status`) values (:att_id,:stu_id,:sts)";
            $stmt = parent::getStatement($sql);
            foreach($arrayStudent as $student){
                $stmt->bindParam(':att_id',$id);
                $stmt->bindParam(':stu_id',$student['student_id']);
                $stmt->bindValue(':sts',null,PDO::PARAM_NULL);
                $stmt->execute();
            }
            if($stmt->rowCount() > 0){
                header("location:./adminCreate.php?msg=sss");
            }else{
                header("location:./adminCreate.php?msg=err");
            }
        }
        
    }
?>