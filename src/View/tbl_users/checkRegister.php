<?php

use Study\Controller\UserController;

require '../../../vendor/autoload.php';
$userController = new UserController();
$userController->register();
