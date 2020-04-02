<?php
require_once(__DIR__ . '/../www/app/Repository/MovieRepository.php');
require_once(__DIR__ . '/../www/app/Controllers/getMovies.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Cinema Show</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="container">
    <?php
    require_once(__DIR__ . './header.php')
    ?>
    <div class="body">
      <div class="body-overlay"></div>

      <?php
      require_once(__DIR__ . './auth.php');
      ?>
      <script src="actions.js"></script>

      <div class="search">
        <input type="text" placeholder="Search..." class="search-txt" />
        <div class="search-image-div">
          <i class="fa fa-search" style="color:white"></i>
        </div>
      </div>

      <div class="board">


        <?php
        $poster = "./images/you.jpg";
        $title = "You";
        $rating = "9.4";

        foreach ($movies as $movie) {
          $movie->init();
          echo ('<a href="movie.php?id=' . $movie->getMovieid() . '" class="movie">
        <div class="poster">
          <img
            src= ' . $movie->getPoster() . '
            width="170px"
            height="260px"
            class="poster-img"
          />
          <div class="overlay"></div>
        </div>
        <div class="title">
          <h6>' . $movie->getName() . '</h6>
        </div>
        <div class="rating">
          <i
            class="fa fa-star"
            style="color:orange;font-size: 25px;margin-right: 10px;"
          ></i>
          <p class="rating-value">
            <span class="bold-rating">' . $movie->getRating() . '</span>/10
          </p>
        </div>
      </a>');
        }


        ?>
      </div>
      <ul class="pagination">
        <a href="#">
          <li id="page">1</li>
        </a>
        <a href="#">
          <li id="page">2</li>
        </a>
        <a href="#">
          <li id="page">3</li>
        </a>
        <a href="#">
          <li id="page">4</li>
        </a>
        <a href="#">
          <li id="page">5</li>
        </a>
      </ul>
    </div>
  </div>
</body>


</html>