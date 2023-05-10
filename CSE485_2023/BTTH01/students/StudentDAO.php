<?php error_reporting(0); ?> 
<?php include_once 'Student.php' ;
    $header = "id,name,age";
    $filename = "assets/text/student.txt";
    $file = fopen($filename, "r");
    $content = fread($file, filesize($filename));
    $remove = "\n";
    $arraySt = explode($remove, $content);
    fclose($file);
?>
<?php
class StudentDAO
{
    private $studentArray = [];

        public function readStudent():void{
            global $arraySt;
            for ($i=1; $i<count($arraySt); $i++){
                $infor = explode(",",$arraySt[$i]);
                $student = new Student($infor[0],$infor[1],$infor[2]);
                array_push($this->studentArray, $student);
            }
        }

        public function createStudent($id, $name, $age):bool{
            $isExist = false;
            foreach($this->studentArray as $student){
                if($id == $student->getId())
                    $isExist = true;
            }
            if(!$isExist){
                $newST = new Student($id, $name, $age);
                array_push($this->studentArray, $newST);
            }
            return $isExist;
        }

        public function updateStudent($student):void{
            foreach($this->studentArray as $stu){
                if($stu->getId() == $student->getId()){
                    $stu->setName($student->getName());
                    $stu->setAge($student->getAge());
                }
            }
        }

        public function deleteStudent($id):void{
            foreach($this->studentArray as $index => $student){
                if($student->getId() == $id){
                    array_splice($this->studentArray, $index, $index);
                }
            }
        }

        public function getAll():array{
            return $this->studentArray;
        }


        public function save(){
            $temp = '';
            global $header;
            global $filename;
            $myfile = fopen($filename, "w");
            foreach($this->studentArray as $student){
                $temp .= "\n".$student->toString();
            }
            fwrite($myfile, $header.$temp);
            fclose($myfile);
        }
}
?>