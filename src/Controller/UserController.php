<?php

namespace Study\Controller;

use Study\Model\User;
use Study\Model\UserManager;

class UserController
{
    private $userManager;
    function __construct()
    {
        $this->userManager = new UserManager();
    }
    function viewUser()
    {
        $users = $this->userManager->getAll();
        include_once('src/View/tbl_users/list-user.php');
    }
    function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            include_once('src/View/tbl_users/register.php');
        else {
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $fullname = $_REQUEST['fullname'];
            $user = new User($username, $password, $fullname);
            $this->userManager->add($user);
            header('location:index.php');
        }
    }
}
