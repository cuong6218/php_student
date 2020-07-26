<?php

use Study\Controller\GradeController;
use Study\Controller\StudentController;
use Study\Controller\SubjectController;
use Study\Controller\UserController;

require __DIR__ . "/vendor/autoload.php";
// if (!isset($_SESSION['isLogin']) || !$_SESSION['isLogin']) {
//     header('location:src/View/tbl_users/login.php');
// }
$subjectController = new SubjectController();
$userController = new UserController();
$studentController = new StudentController();
$gradeController = new GradeController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
include_once('src/View/menu/menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    switch ($page) {
        case 'list-subject':
            $subjectController->viewSubject();
            break;
        case 'add-subject':
            $subjectController->addSubject();
            break;
        case 'update-subject':
            $subjectController->updateSubject();
            break;
        case 'delete-subject':
            $subjectController->deleteSubject();
            break;
        case 'list-student':
            $studentController->viewStudent();
            break;
        case 'add-student':
            $studentController->addStudent();
            break;
        case 'list-grade':
            $gradeController->viewGrade();
            break;
        case 'add-grade':
            $gradeController->addGrade();
            break;
        case 'update-grade':
            $gradeController->updateGrade();
            break;
        case 'delete-grade':
            $gradeController->deleteGrade();
            break;
            // case 'logOut':
            //     include_once('src/View/tbl_users/login.php');
            //     break;
            // case 'register':
            //     include_once('src/View/tbl_users/register.php');
            //     break;
        default:
            $subjectController->viewSubject();
    }
    ?>
</body>

</html>