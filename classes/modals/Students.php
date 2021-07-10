<!-- This file will work for Students section -->
<?php
class Students
{
    private $db;

    public function __construct()
    {
        $this->db = new DBcontroller();
    }
    public function showStudentList()
    {
        $data = $this->db->rawQuery("SELECT * FROM `students`");

        if ($data == NULL) {
            echo "No Data Found";
        } else {
            if ($data['result']) {
                $data = $data['data'];
                require './web/students.php';
            } else {
                echo $data['msg'];
            }
        }
    }

    public function studentDelete($id)
    {
        $id = $_GET['id'];
        $del = $this->db->rawQuery("DELETE FROM `students` WHERE `students`.`stu_id` = $id");
        require_once './web/student-delete.php';
    }

    public function studentAdd()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_POST['sName'];
            $rollNo = $_POST['rollNo'];
            $stuClass = $_POST['stuClass'];
            $dob = $_POST['dob'];
            // echo $name . "<br />" . $rollNo . "<br />" . $stuClass . "<br />" . $dob ;
            // $sql = "SELECT rool"
            $sql = "INSERT INTO `students` (`stu_id`, `stu_name`, `stu_roll_no`, `stu_dob`, `stu_class`) VALUES (NULL, '$name', '$rollNo', '$dob', '$stuClass'); ";
            $add = $this->db->rawQuery($sql, "delete");

            // check if  roll no laredy in ginven class
            // $sql = "SELECT `stu_roll_no`, `stu_class` FROM `students` WHERE `stu_roll_no`=". $rollNo ." AND `stu_class`=". $stuClass ."; ";
            // // echo $sql;
            // $res = $this->db->rawQuery($sql);
            // var_dump($res);
        }
        require_once './web/student-add.php';
    }
};

?>