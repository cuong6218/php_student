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
    function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $fullname = $_REQUEST['fullname'];
            $this->userManager->add($fullname, $username, $password);
            header('location:login.php');
        }
    }
}
