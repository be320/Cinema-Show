<?php

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

class Movie
{
    protected $MOVIEID;
    protected $TMDBID;
    protected $name;
    protected $poster;
    protected $rating;
    protected $MRELEASEYEAR;
    protected $MTRAILER;
    protected $overview;
    protected $cast;
    protected $reviews;
    protected $genre;
    protected $json;


    public function init(){
        $data = file_get_contents('https://api.themoviedb.org/3/movie/'.$this->TMDBID.'?api_key=5cb9111fd21bd9d8a642f4be717b3123&language=en-US');
        $this->json = json_decode($data);
    }
    

    public function getMovieid(){
        return $this->MOVIEID;
    }

    public function getTmdbid(){
        return $this->TMDBID;
    }

    public function getName(){
        return $this->json->original_title;
    }


    public function getPoster(){
        return 'https://image.tmdb.org/t/p/w500'.$this->json->poster_path;
    }


    public function getRating(){
        return $this->json->vote_average;
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

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function getGenre(){
        return $this->genre;
    }


}



?>