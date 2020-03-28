<?php




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
        $data = file_get_contents('https://api.themoviedb.org/3/movie/  '.$this->TMDBID.'/credits?api_key=5cb9111fd21bd9d8a642f4be717b3123');
        $this->cast = json_decode($data);
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

    public function getReleaseYear(){
        return $this->MRELEASEYEAR;
    }


    public function getTrailer(){
        return $this->MTRAILER;
    }


    public function getOverview(){
        return $this->json->overview;
    }


    public function getCast(){
        return $this->cast->cast; //second cast is the name in the api
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