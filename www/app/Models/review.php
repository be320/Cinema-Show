<?php

class Review
{
    protected $id;
    protected $name;
    protected $body;
    protected $rating;
    protected $date;


    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setBody($body){
        $this->body = $body;
    }

    public function getBody(){
        return $this->body;
    }

    public function setRating($rating){
        $this->rating = $rating;
    }

    public function getRating(){
        return $this->rating;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getDate(){
        return $this->date;
    }
}