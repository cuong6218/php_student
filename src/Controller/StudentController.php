<?php

namespace Study\Controller;

use Study\Model\GradeManager;
use Study\Model\Student;
use Study\Model\StudentManager;

class StudentController
{
    private $studentManager;
    private $gradeManager;
    function __construct()
    {
        $this->studentManager = new StudentManager();
        $this->gradeManager = new GradeManager();
    }
    function viewStudent()
    {
        $students = $this->studentManager->getAll();
        include_once('src/View/tbl_students/list-student.php');
    }
    function addStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $grades = $this->gradeManager->getAll();
            include_once('src/View/tbl_students/add-student.php');
        } else {
            $file = $_FILES['image-file']['tmp_name'];
            $path = "uploads/" . $_FILES['image-file']['name'];
            if (move_uploaded_file($file, $path))
                echo 'Success upload file';
            else echo 'Fail to upload file';

            $studentName = $_REQUEST['studentName'];
            $age = $_REQUEST['age'];
            $gender = $_REQUEST['gender'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $gradeId = $_REQUEST['gradeId'];
            $student = new Student($studentName, $age, $gender, $address, $email, $path, $gradeId);
            $this->studentManager->add($student);
            header('location:index.php?page=list-student');
        }
    }
}
