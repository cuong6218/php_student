<?php

namespace Study\Model;

class GradeManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    function getAll()
    {
        $sql = "SELECT * FROM `tbl_grades`";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $grades = [];
        foreach ($data as $item) {
            $grade = new Grade($item['grade_name'], $item['status']);
            $grade->setId($item['id']);
            array_push($grades, $grade);
        }
        return $grades;
    }
    function add($grade)
    {
        $sql = "INSERT INTO `tbl_grades` (`grade_name`, `status`) VALUES(:grade_name, :status)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':grade_name', $grade->getGradeName());
        $stmt->bindParam(':status', $grade->getStatus());
        $stmt->execute();
    }
    function update($grade)
    {
        $sql = "UPDATE `tbl_grades` SET `grade_name`=:grade_name,`status`=:status WHERE `id` = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $grade->getId());
        $stmt->bindParam(':grade_name', $grade->getGradeName());
        $stmt->bindParam(':status', $grade->getStatus());
        $stmt->execute();
    }
    function getGradeById($id)
    {
        $sql = "SELECT * FROM `tbl_grades` WHERE `id` = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    function delete($id)
    {
        $sql = "DELETE FROM `tbl_grades` WHERE `id` = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
