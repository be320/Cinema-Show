<?php
require_once(__DIR__."/../Models/movie.php");
require_once(__DIR__."/../Lib/DBConnectin.php");

class MovieRepository
{
    protected $table = 'movie';

    public function getById($id): Movie
    {
        $result = null;
        try{
            $db = DBConnection::connect();
            $stmt = $db ->prepare("SELECT * FROM movie WHERE id=:id");
            $stmt->bindValue(':id',$id);
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
}