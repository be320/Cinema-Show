<?php
require_once(__DIR__.'/../Repository/UserRepository.php');


$data = $_POST;
$hasErrors = false;

//validation

if(filter_var($data['email'],FILTER_VALIDATE_EMAIL) === false)
{
    $hasErrors = true;
}

if(!isset($data['name']) || empty($data['name']))
{
    $hasErrors = true;
}

if(!isset($data['email']) || empty($data['email']))
{
    $hasErrors = true;
}

if(!isset($data['password']) || empty($data['password']))
{
    $hasErrors = true;
}


//inserting data into DB

$success = false;

if($hasErrors === false)
{
    $userRepo = new UserRepository();
    $success = $userRepo->create($data);
}


if($success)
{
    header('Location: /Cinema-Show/www/board.php');
    exit();
}