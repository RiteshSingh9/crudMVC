<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <!-- material icons -->
    <link rel="stylesheet" href="./web/assets/icons/icon.css">
    <!-- material css -->
    <link rel="stylesheet" href="./web/assets/css/materialize.min.css">
</head>

<body>
    <header>
        <!-- navbar -->
        <nav>
            <div class="nav-wrapper purple">
                <a href="#" class="brand-logo right"><img src="./web/assets/image/AttendanceManagementSystem.jpg" width="200px" alt="AMS"></a>
                <!-- trigger for mobile navbar -->
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="">Welcome guest</a></li>
                    <li><a href="index.php?action=students">Students</a></li>
                    <li><a href="index.php?action=attendance">Attendance</a></li>
                </ul>
            </div>
        </nav>

        <!-- navbar for mobile -->
        <ul id="slide-out" class="sidenav">
            <li>
                <img src="./web/assets/image/AttendanceManagementSystem.jpg" width="100%" alt="no-img">
            </li>
            <li><a href="">Welcome guest</a></li>
            <li><a href="">Students</a></li>
            <li><a href="">Attendance</a></li>
        </ul>

    </header>

