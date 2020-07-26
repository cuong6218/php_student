<?php

namespace Study\Controller;

use Study\Model\Subject;
use Study\Model\SubjectManager;

class SubjectController
{
    private $subjectManager;
    function __construct()
    {
        $this->subjectManager = new SubjectManager();
    }
    function viewSubject()
    {
        $subjects = $this->subjectManager->getAll();
        include_once('src/View/tbl_subjects/list-subject.php');
    }
    function addSubject()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            include_once('src/View/tbl_subjects/add-subject.php');
        else {
            $subjectName = $_REQUEST['subjectName'];
            $description = $_REQUEST['description'];
            $subject = new Subject($subjectName, $description);
            $this->subjectManager->add($subject);
            header('location:index.php?page=list-subject');
        }
    }
    function updateSubject()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $subject = $this->subjectManager->getSubjectById($id);
            include_once('src/View/tbl_subjects/update-subject.php');
        } else {
            $id = $_REQUEST['id'];
            $subject_name = $_REQUEST['subject_name'];
            $description = $_REQUEST['description'];
            $subject = new Subject($subject_name, $description);
            $subject->setId($id);
            $this->subjectManager->update($subject);
            header('location:index.php?page=list-subject');
        }
    }
    function deleteSubject()
    {
        $id = $_REQUEST['id'];
        $this->subjectManager->delete($id);
        header('location:index.php?page=list-subject');
    }
}
