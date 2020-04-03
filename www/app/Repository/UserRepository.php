<?php

require_once(__DIR__.'/../Lib/DBConnectin.php');
require_once(__DIR__.'/../Models/user.php');

class UserRepository
{
    protected $table =  'user';

    public function __construct()
    {
    }

    public function create(array $data) : bool
    {
        $success = false;

        try{
            $db = DBConnection::connect();
            $stmt = $db->prepare("INSERT INTO $this->table (UNAME,UEMAIL,UPASSWORD) VALUES (:name , :email , :password)");
            $stmt->bindValue(':name',$data['name']);
            $stmt->bindValue(':email',$data['email']);
            $stmt->bindValue(':password',md5($data['password']));
            $success = $stmt->execute();
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
            exit();
        }
        return $success;
    }
}