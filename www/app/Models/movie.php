<?php


class Movie
{
    protected $id;
    protected $name;
    protected $poster;
    protected $rating;
    protected $releaseYear;
    protected $trailer;
    protected $overview;
    protected $cast;
    protected $reviews;

    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setPoster($poster){
        $this->poster = $poster;
    }

    public function getPoster(){
        return $this->poster;
    }

    public function setRating($rating){
        $this->rating = $rating;
    }

    public function getRating(){
        return $this->rating;
    }

    public function setReleaseYear($releaseYear){
        $this->releaseYear = $releaseYear;
    }

    public function getReleaseYear(){
        return $this->releaseYear;
    }

    public function setTrailer($trailer){
        $this->trailer = $trailer;
    }

    public function getTrailer(){
        return $this->trailer;
    }

    public function setOverview($overview){
        $this->overview = $overview;
    }

    public function getOverview(){
        return $this->overview;
    }

    public function setCast($cast){
        $this->cast = $cast;
    }

    public function getCast(){
        return $this->cast;
    }

    public function setReviews($reviews){
        $this->reviews = $reviews;
    }

    public function getReviews(){
        return $this->reviews;
    }


}



?>