<?php
require_once(__DIR__.'/../www/app/Repository/MovieRepository.php');
$movieRepo = new MovieRepository();
$id = $_GET['id'];
$movie = $movieRepo->getById($id);
$movie->init();

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cinema Show</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <img
          src="./images/logo.PNG"
          alt="logo"
          width="150px"
          height="150px"
          class="logo"
        />
        <a href="board.php" class="cat">
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
                <img
                  src="./images/auth-logo.PNG"
                  alt="logo"
                  width="200px"
                  height="200px"
                  class="logo"
                />
                <div class="form-body">
                <div class="text-fields">
                  <i
                    class="fa fa-envelope"
                    style="color:white;font-size: 25px;margin-right: 10px;"
                  ></i>
                  <input type="email" placeholder="Email" class="auth-txt" />
                </div>
                <div class="text-fields">
                  <i
                    class="fa fa-key"
                    style="color:white;font-size: 25px;margin-right: 10px;"
                  ></i>
                  <input type="password" placeholder="Password" class="auth-txt"  />
                </div>
                <div class="forgot-pass" >
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
                      <i class="fa fa-facebook" style="color:white;background-color: #3b5998;font-size: 20px;" ></i>
                  </div>
                  <div class="google">
                          <i class="fa fa-google" style="color:#d52121;background-color: white;font-size: 20px;" ></i>
                      </div>
              </div>
              <div class="register-div">
                  <p>Don't have Account ?</p>
                  <h3 class="register-button">Sign Up</h3>
              </div>
              </div>
              </div>
          </div>
        <div id="my-review-div">
          <div class="my-review-content">
            <div class="your-review-title">
                <h2>Share Your Review:</h2>
            </div>
            <textarea name="message" rows="5" cols="100" placeholder="Your Review ..."></textarea>
            <div class="your-review-title">
                <h2>Share Your Rating:</h2>
            </div>
             <div id="stars">
                <i class="fa fa-star" id="star_0" style="font-size: 20px;margin-right: 10px;" ></i>
                <i class="fa fa-star" id="star_1" style="font-size: 20px;margin-right: 10px;" ></i>
                <i class="fa fa-star" id="star_2" style="font-size: 20px;margin-right: 10px;" ></i>
                <i class="fa fa-star" id="star_3" style="font-size: 20px;margin-right: 10px;" ></i>
                <i class="fa fa-star" id="star_4" style="font-size: 20px;margin-right: 10px;" ></i>
                <i class="fa fa-star" id="star_5" style="font-size: 20px;margin-right: 10px;" ></i>
                <i class="fa fa-star" id="star_6" style="font-size: 20px;margin-right: 10px;" ></i>
                <i class="fa fa-star" id="star_7" style="font-size: 20px;margin-right: 10px;" ></i>
                <i class="fa fa-star" id="star_8" style="font-size: 20px;margin-right: 10px;" ></i>
                <i class="fa fa-star" id="star_9" style="font-size: 20px;margin-right: 10px;" ></i>
             </div>
             <div class="review-options">
                <div id="submit-review">
                    <p>Share</p>
                 </div>
                 <div id="cancel-review">
                    <p>Cancel </p>
                 </div>
             </div>
          </div>
        </div>
        <div class="movie-structure">
            <div class="portofolio">
                <div class="movie-poster">
                   <img src= "<?php echo $movie->getPoster(); ?>" width="330px" height="500px" class="poster-img"  />
                </div>
                <div class="rating">
                        <i class="fa fa-star" style="color:orange;font-size: 25px;margin-right: 10px;" ></i> <p class="rating-value"><span class="bold-rating"><?php echo $movie->getRating(); ?></span>/10</p>
                    </div>          
            </div>
            <div class="details">
               <div class="movie-title">
                <h1 class="title-head"><?php echo $movie->getName(); ?></h1>
                <p class="title-year"><?php echo $movie->getReleaseYear(); ?></p>
               </div>
                    <iframe width="700" height="345" src= <?php echo ('https://www.youtube.com/embed/'.$movie->getTrailer().''); ?>
                     class="trailer" >
                    </iframe>  
              <div class="overview">
                <h2 class="overview-head">Overview:</h2>
                <h6 class="overview-body"><?php echo $movie->getOverview(); ?></h6>
              </div> 
              <div class="cast">
                <div class="cast-head">
                  <h2>Cast:</h2>
                </div>
                <div class="cast-list">


                  <div class="actor">
                    <div class="actor-img-div">
              <img src="./images/joe.jpg" width="60px" height="90px" class="actor-img"  />
                    </div>
                    <div class="actor-name">
                      <h6 class="overview-body">Penn Badgley</h6>
                    </div>
                    <div class="actor-role">
                      <p class="title-year">( Joe Goldberg )</p>
                    </div>
                  </div>



                  <div class="actor">
                    <div class="actor-img-div">
              <img src="./images/beck.jpg" width="60px" height="90px" class="actor-img"  />
                    </div>
                    <div class="actor-name">
                      <h6 class="overview-body">Elizabeth Lail</h6>
                    </div>
                    <div class="actor-role">
                      <p class="title-year">( Guinevere Beck )</p>
                    </div>
                  </div>



                  <div class="actor">
                    <div class="actor-img-div">
              <img src="./images/candice.jpg" width="60px" height="90px" class="actor-img"  />
                    </div>
                    <div class="actor-name">
                      <h6 class="overview-body">Ambyr Childers</h6>
                    </div>
                    <div class="actor-role">
                      <p class="title-year">( Candace Stone )</p>
                    </div>
                  </div>


                </div>
              </div>   
              
              <div class="reviews">
                <div class="review-head">
                    <h2>Reviews:</h2>
                    <div id="review-button">
                        <i class="fa fa-plus" style="color:white;font-size: 25px;margin-right: 10px;" ></i>
                       <p>Review </p>
                      </div>
                </div>

                <div class="reviews-list">


                  <div class="review-card">
                    <div class="reviewer-name">
                      <p>Ahmed Bahaa</p>
                    </div>
                    <div class="stars">
                        <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                        <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                        <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                        <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                        <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                        <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                        <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                        <i class="fa fa-star" style="color:gray;font-size: 15px;margin-right: 10px;" ></i>
                        <i class="fa fa-star" style="color:gray;font-size: 15px;margin-right: 10px;" ></i>
                        <i class="fa fa-star" style="color:gray;font-size: 15px;margin-right: 10px;" ></i>
                    </div>
                    <div class="rating-body">
                      <p>It is really a very cool series , I am in deep crush with BECK !!!</p>
                    </div>
                    <div class="date">
                      <p>17 September 2019</p>
                    </div>
                  </div>



                  <div class="review-card">
                      <div class="reviewer-name">
                        <p>Amr Hossam</p>
                      </div>
                      <div class="stars">
                          <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                          <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                          <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                          <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                          <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                          <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                          <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                          <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                          <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                          <i class="fa fa-star" style="color:gray;font-size: 15px;margin-right: 10px;" ></i>
                      </div>
                      <div class="rating-body">
                        <p>kan nefsy besara7a ab2a makan el wad joe dah dana kont zamany kasart el molal</p>
                      </div>
                      <div class="date">
                        <p>15 February 2020</p>
                      </div>
                    </div>





                    <div class="review-card">
                        <div class="reviewer-name">
                          <p>Omar Makin</p>
                        </div>
                        <div class="stars">
                            <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                            <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                            <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                            <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                            <i class="fa fa-star" style="color:orange;font-size: 15px;margin-right: 10px;" ></i>
                            <i class="fa fa-star" style="color:gray;font-size: 15px;margin-right: 10px;" ></i>
                            <i class="fa fa-star" style="color:gray;font-size: 15px;margin-right: 10px;" ></i>
                            <i class="fa fa-star" style="color:gray;font-size: 15px;margin-right: 10px;" ></i>
                            <i class="fa fa-star" style="color:gray;font-size: 15px;margin-right: 10px;" ></i>
                            <i class="fa fa-star" style="color:gray;font-size: 15px;margin-right: 10px;" ></i>
                        </div>
                        <div class="rating-body">
                          <p>El mosalsal fih bos w a7dan w ellet adab 3al a5er , hatroo7o men rabena fen ya welad el ....</p>
                        </div>
                        <div class="date">
                          <p>13 March 2018</p>
                        </div>
                      </div>





                </div>

              </div>
              
            </div>
        </div>
      </div>
    </div>
  </body>
  <script src="actions.js"></script>
</html>
