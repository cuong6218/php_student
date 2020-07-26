<?php

namespace Study\Model;

class UserManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    function getAll()
    {
        $sql = "SELECT * FROM tbl_users";
        $statement = $this->database->query($sql);
        $data = $statement->fetchAll();
        $users = [];
        foreach ($data as $person) {
            $user = new User($person['username'], $person['password'], $person['fullname']);
            array_push($users, $user);
        }
        return $users;
    }
    function add($user)
    {
        $sql = "INSERT INTO `tbl_users` (`username`, `password`, `fullname`) VALUES(:username, :password, :fullname)";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':username', $user->getUsername());
        $statement->bindParam(':password', $user->getPassword());
        $statement->bindParam(':fullname', $user->getFullname());
        $statement->execute();
    }
}
