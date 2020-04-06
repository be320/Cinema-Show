<?php
require_once(__DIR__.'/../Repository/UserRepository.php');
require_once(__DIR__.'/../includes/sessionStart.php');

if(!isset($_POST['email']) || empty($_POST['email']))
{
    exit();
}

if(!isset($_POST['password']) || empty($_POST['password']))
{
    exit();
}

$data = $_POST;

$userRepo = new UserRepository();

$user = $userRepo->login($data['email'],$data['password']);

if($user)
{
    $_SESSION['user'] = $user;
    header('Location: /Cinema-Show/www/board.php');
    exit();
}

else{
    exit();
}