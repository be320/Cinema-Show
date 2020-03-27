<?php
require_once(__DIR__.'/../www/app/Repository/MovieRepository.php');
require_once(__DIR__.'/../www/app/Controllers/getMovies.php');
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
    <div class="header">
      <img src="./images/logo.PNG" alt="logo" width="150px" height="150px" class="logo" />
      <a href="#" class="cat">
        Movies
      </a>
      <div class="cat">
        TV Shows
      </div>

      <div class="cat">
        Celebrities
      </div>
      <div id="cat-auth">
        Login / Register
      </div>
    </div>
    <div class="body">
      <div class="body-overlay"></div>
      <div id="form-container">
        <div class="form">
          <img src="./images/auth-logo.PNG" alt="logo" width="200px" height="200px" class="logo" />
          <div class="form-body">
            <div class="text-fields">
              <i class="fa fa-envelope" style="color:white;font-size: 25px;margin-right: 10px;"></i>
              <input type="email" placeholder="Email" class="auth-txt" />
            </div>
            <div class="text-fields">
              <i class="fa fa-key" style="color:white;font-size: 25px;margin-right: 10px;"></i>
              <input type="password" placeholder="Password" class="auth-txt" />
            </div>
            <div class="forgot-pass">
              Forgot Password ?
            </div>
            <div class="login-button-div">
              <input type="submit" value="Login" class="login-button" />
            </div>
            <div class="or">
              OR
            </div>
            <div class="social">
              <div class="facebook">
                <i class="fa fa-facebook" style="color:white;background-color: #3b5998;font-size: 20px;"></i>
              </div>
              <div class="google">
                <i class="fa fa-google" style="color:#d52121;background-color: white;font-size: 20px;"></i>
              </div>
            </div>
            <div class="register-div">
              <p>Don't have Account ?</p>
              <h3 class="register-button">Sign Up</h3>
            </div>
          </div>
        </div>
      </div>

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

       foreach($movies as $movie){
         $movie->init();
        echo ('<a href="movie.php?id='.$movie->getMovieid().'" class="movie">
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
<script src="actions.js"></script>

</html>