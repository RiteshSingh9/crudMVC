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
        $data = $this->db->rawQuery("SELECT * FROM `students`", "select");

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
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_POST['sName'];
            $rollNo = $_POST['rollNo'];
            $stuClass = $_POST['stuClass'];
            $dob = $_POST['dob'];
            $sql = "INSERT INTO `students` (`stu_id`, `stu_name`, `stu_roll_no`, `stu_dob`, `stu_class`) VALUES (NULL, '$name', '$rollNo', '$dob', '$stuClass'); ";
            $add = $this->db->rawQuery($sql, "delete");

            // check if  roll no laredy in ginven class
            // $sql = "SELECT `stu_roll_no`, `stu_class` FROM `students` WHERE `stu_roll_no`=". $rollNo ." AND `stu_class`=". $stuClass ."; ";
        }
        require_once './web/student-add.php';
    }

    public function studentEdit($id)
    {
        $msg = "";
        // get data to show in html
        $sql = "SELECT * FROM `students` WHERE `stu_id`=$id";
        $res = $this->db->rawQuery($sql, "select");
        $data = $res;
        $data = $data['data']['0'];
        // var_dump($data);

        // check if requets is post i.e. user updated the value
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_POST['sName'];
            $rollNo = $_POST['rollNo'];
            $stuClass = $_POST['stuClass'];
            $dob = $_POST['dob'];

            //check if which data have been changed and update that data;
            $sql = "UPDATE `students` SET ";
            if ($name != $data['stu_name']) {
                $sql .= "`stu_name`='$name'";
            }

            if ($rollNo != $data['stu_roll_no']) {
                $sql .= ",`stu_roll_no`='$rollNo'";
            }

            if ($stuClass != $data['stu_class']) {
                $sql .= ",`stu_class`='$stuClass'";
            }

            if ($dob != $data['stu_dob']) {
                $sql .= ",`stu_dob`='$dob'";
            }

            $sql .= " WHERE `stu_id`='$id'";
            $res = $this->db->rawQuery($sql, 'update');

            if ($res) {
                $msg = '<p class="text-green">Successfully Updated</p>';
            } else {
                $msg = '<p class="text-red">Some Error Occured</p>';
            }
        }

        $sql = "SELECT * FROM `students` WHERE `stu_id`=$id";
        $res = $this->db->rawQuery($sql, "select");
        $data = $res;
        $data = $data['data']['0'];


        require_once './web/student-edit.php';
    }
};

?>