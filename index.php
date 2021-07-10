<?php

require_once './classes/controllers/DBcontroller.php';
require_once './classes/modals/Attendance.php';
require_once './classes/modals/Students.php';

require_once './web/header.php';

$action = '';
if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case 'students':
        $students = new Students();
        $students->showStudentList();
        break;

    case 'student-delete':
        $student = new Students();
        $student->studentDelete($_GET['id']);
        break;

    case 'students-add':
        // echo $_SERVER['REQUEST_METHOD'];
        $students = new Students();
        $students->studentAdd();
        break;

    default:
        require './web/home.php';
        break;
}



?>

<?php

require_once './web/footer.php';
?>
