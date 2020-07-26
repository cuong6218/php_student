<?php

namespace Study\Model;

use PDOException;

class SubjectManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    function getAll()
    {
        $sql = "SELECT * FROM tbl_subjects";
        $statement = $this->database->query($sql);
        $data = $statement->fetchAll();
        $subjects = [];
        foreach ($data as $item) {
            $subject = new Subject($item['subject_name'], $item['description']);
            $subject->setId($item['id']);
            array_push($subjects, $subject);
        }
        return $subjects;
    }
    function add($subject)
    {
        $sql = "INSERT INTO `tbl_subjects` (`subject_name`, `description`) VALUES (:subject_name, :description)";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':subject_name', $subject->getSubjectName());
        $statement->bindParam(':description', $subject->getDescription());
        $statement->execute();
    }
    function update($subject)
    {
        $sql = "UPDATE `tbl_subjects` SET `subject_name` = :subject_name, `description` = :description WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $subject->getId());
        $statement->bindParam(':subject_name', $subject->getSubjectName());
        $statement->bindParam(':description', $subject->getDescription());
        $statement->execute();
    }
    function getSubjectById($id)
    {
        $sql = "SELECT * FROM `tbl_subjects` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch();
    }
    function delete($id)
    {
        $sql = "DELETE FROM `tbl_subjects` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
}
