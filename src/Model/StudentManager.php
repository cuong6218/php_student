<?php

namespace Study\Model;

class StudentManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    function getAll()
    {
        $sql = "SELECT * FROM `tbl_students`";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $person) {
            $student = new Student($person['student_name'], $person['age'], $person['gender'], $person['address'], $person['email'], $person['image'], $person['grade_id']);
            $student->setId($person['id']);
            array_push($students, $student);
        }
        return $students;
    }
    function add($student)
    {
        $sql = "INSERT INTO `tbl_students`(`student_name`, `age`, `gender`, `address`, `email`, `image`, `grade_id`) VALUES (:studentName,:age,:gender,:address,:email,:image,:gradeId)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':studentName', $student->getStudentName());
        $stmt->bindParam(':age', $student->getAge());
        $stmt->bindParam(':gender', $student->getGender());
        $stmt->bindParam(':address', $student->getAddress());
        $stmt->bindParam(':email', $student->getEmail());
        $stmt->bindParam(':image', $student->getImage());
        $stmt->bindParam(':gradeId', $student->getGradeId());
        $stmt->execute();
    }
}
