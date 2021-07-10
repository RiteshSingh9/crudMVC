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

        if($data['result']) {
            $data=$data['data'];
            require './web/students.php';
        } else {
            echo $data['msg'];
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
        require_once './web/student-add.php';
    }
};

?>