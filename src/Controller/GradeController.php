<?php

namespace Study\Controller;

use PDOException;
use Study\Model\Grade;
use Study\Model\GradeManager;

class GradeController
{
    private $gradeManager;
    function __construct()
    {
        $this->gradeManager = new GradeManager();
    }
    function viewGrade()
    {
        $grades = $this->gradeManager->getAll();
        include_once('src/View/tbl_grades/list-grade.php');
    }
    function addGrade()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            include_once('src/View/tbl_grades/add-grade.php');
        else {
            $gradeName = $_REQUEST['grade_name'];
            $status = $_REQUEST['status'];
            $grade = new Grade($gradeName, $status);
            $this->gradeManager->add($grade);
            header('location:index.php?page=list-grade');
        }
    }
    function updateGrade()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $grade = $this->gradeManager->getGradeById($id);
            include_once('src/View/tbl_grades/update-grade.php');
        } else {
            $id = $_REQUEST['id'];
            $gradeName = $_REQUEST['grade_name'];
            $status = $_REQUEST['status'];
            $grade = new Grade($gradeName, $status);
            $grade->setId($id);
            $this->gradeManager->update($grade);
            header('location:index.php?page=list-grade');
        }
    }
    function deleteGrade()
    {
        // if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_REQUEST['id'];
        $this->gradeManager->delete($id);
        header('location:index.php?page=list-grade');
        // }
    }
}
