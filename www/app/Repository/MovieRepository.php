<?php
require_once(__DIR__."/../Models/movie.php");
require_once(__DIR__."/../Lib/DBConnectin.php");

class MovieRepository
{
    protected $table = 'movie';

    public function getById($MOVIEID): Movie
    {
        $result = null;
        try{
            $db = DBConnection::connect();
            $stmt = $db ->prepare("SELECT * FROM movie WHERE MOVIEID=:MOVIEID");
            $stmt->bindValue(':MOVIEID',$MOVIEID);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS,Movie::class);
            $result = $stmt->fetch();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            exit();
        }
        return $result;
    }

    public function getAll(): array
    {
        $result=[];
        try{
            $db = DBConnection::connect();
            $stmt = $db->prepare("SELECT * from movie");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS,
            Movie::class);
            $result = $stmt->fetchAll();
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
        return $result;
    }

    // public function getByGenre($genreId){
    //     $result = [];

    //     try{
    //         $db = DBConnection::connect();
    //         $stmt = $db->prepare("SELECT ");
    //     }
    // }


}