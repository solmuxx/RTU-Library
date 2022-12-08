<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RTU E-Resources</title>
  <link rel="icon" type="image/png" href="RTULogo.png">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <header class="header">

    <div class="header-1">

      <a href="#" class="logo"><i class="fas fa-book"></i>RTU E-Library</a>

      <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
      </form>

      <div class="icons">
        <div id="search-btn" class="fas fa-search"></div>
        <div id="login-btn" class="fas fa-user"></div>
      </div>

    </div>
    <div class="header-2">
      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#featured">featured</a>
        <a href="#arrivals">arrivals</a>
        <a href="#reviews">reviews</a>
        <a href="#blogs">blogs</a>
      </nav>
    </div>


  </header>

  <!-- header section ends -->

  <!-- bottom navbar  -->

  <nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
  </nav>

  <!-- login form  -->

  <div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <!-- ACCOUNT -->
    <form action="">
      <div class="container d-flex justify-content-center
    align-items-center">
        <?php if ($_SESSION['role'] == 'admin') { ?>

        <!---For Admin--->
        <div class="card" style="width: 1000px;">

          <img src="img/admin-default.png" class="card-img-top" alt="admin image">

          <div class="card-body text-center">
            <h5 class="card-title">
              <?= $_SESSION['name'] ?>
            </h5>

            <a href="logout.php" class="btn btn-dark">Logout</a>


          </div>
        </div>

        <div class="p-3">
          <?php include 'php/members.php';
    if (mysqli_num_rows($res) > 0) { ?>
          <h1 class="diplay-4 fs-1">Accounts</h1>
          <table class="table">
            <thead>

              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">role</th>
              </tr>

            </thead>
            <a href="user.php">Edit Accounts</a><br>
            <a href="view.php">View Accounts</a>
            <tbody>
              <?php
      $i = 1;

      while ($rows = mysqli_fetch_assoc($res)) { ?>

              <tr>
                <th scope="row">
                  <?= $i ?>
                </th>
                <td>
                  <?= $rows['name'] ?>
                </td>
                <td>
                  <?= $rows['username'] ?>
                </td>
                <td>
                  <?= $rows['role'] ?>
                </td>
              </tr>

              <?php

        $i++;

      } ?>
            </tbody>
          </table>
          <?php } ?>
        </div>
        <?php } else { ?>

        <!-- For User-->
        <div class="card" style="width: 18rem;">

          <img src="img/user-default.png" class="card-img-top" alt="admin image">

          <div class="card-body text-center">
            <h5 class="card-title">
              <?= $_SESSION['name'] ?>

            </h5>

            <a href="logout.php" class="btn btn-dark">Logout</a>

          </div>
        </div>

        <a href=""></a>
        <?php } ?>
      </div>

    </form>

  </div>

  <!-- home section starts  -->

  <section class="home" id="home">

    <div class="row">

      <div class="content">
        <h3>FIND THE LATEST HERE!</h3>
        <p> You can check out the latest e-books available on our institutions.</p>
        <a href="#" class="btn">READ NOW</a>
      </div>

      <div class="swiper books-slider">
        <div class="swiper-wrapper">
          <a href="book-1.html" class="swiper-slide"><img src="image/book1.png" alt=""></a>
          <a href="book-2.html" class="swiper-slide"><img src="image/book2.png" alt=""></a>
          <a href="book-3.html" class="swiper-slide"><img src="image/book3.jpg" alt=""></a>
          <a href="book-4.html" class="swiper-slide"><img src="image/book4.jpg" alt=""></a>
          <a href="book-5.html" class="swiper-slide"><img src="image/book5.jpg" alt=""></a>
          <a href="book-6.html" class="swiper-slide"><img src="image/book6.png" alt=""></a>
        </div>
        <img src="image/stand.png" class="stand" alt="">
      </div>

    </div>

  </section>

  <!-- home section ense  -->

  <!-- featured section starts  -->

  <section class="featured" id="featured">

    <h1 class="heading"> <span>featured books</span> </h1>

    <div class="swiper featured-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide box">
          <div class="icons">
            <a href="#" class="fas fa-search"></a>
            <a href="books/How-to-Become-a-Writer.pdf" class="fas fa-download"></a>
            <a href="book-1.html" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/book1.png" alt="">
          </div>
          <div class="content">
            <h3>How to Become a Writer?</h3>
            <a href="book-1.html" class="btn">Read Now!</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="icons">
            <a href="#" class="fas fa-search"></a>
            <a href="books/The-Lottery.pdf" class="fas fa-download"></a>
            <a href="book-2.html" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/book2.png" alt="">
          </div>
          <div class="content">
            <h3>The Lottery</h3>
            <a href="book-2.html" class="btn">Read Now!</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="icons">
            <a href="#" class="fas fa-search"></a>
            <a href="books/Lamb-to-the-Slaughter.pdf" class="fas fa-download"></a>
            <a href="book-3.html" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/book3.jpg" alt="">
          </div>
          <div class="content">
            <h3>Lamb to the Slaughter</h3>
            <a href="book-3.html" class="btn">Read Now!</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="icons">
            <a href="#" class="fas fa-search"></a>
            <a href="books/A-Good-Man-Is-Hard-to-Find.pdf" class="fas fa-download"></a>
            <a href="book-4.html" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/book4.jpg" alt="">
          </div>
          <div class="content">
            <h3>A Good Man Is Hard to Find</h3>
            <a href="book-4.html" class="btn">Read Now!</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="icons">
            <a href="#" class="fas fa-search"></a>
            <a href="books/A-Hunters-Wife.pdf" class="fas fa-download"></a>
            <a href="book-5.html" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/book5.jpg" alt="">
          </div>
          <div class="content">
            <h3>A Hunter's Wife</h3>
            <a href="book-5.html" class="btn">Read Now!</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="icons">
            <a href="#" class="fas fa-search"></a>
            <a href="books/" class="fas fa-download"></a>
            <a href="book-6.html" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/book6.png" alt="">
          </div>
          <div class="content">
            <h3>Ghosts and Empties</h3>
            <a href="book-6.html" class="btn">Read Now!</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>

  <!-- featured section ends -->

  <!-- newsletter section starts -->

  <section class="newsletter">

    <form class="">
      <div class="feature-img">

        <img src="RTULogo.png">
        <h3>Mission</h3>
        <h3>To develop globally competitive and socially responsible professionals through technology-driven
          instructions, innovative researches,
          sustainable extension programs that will enhance the lives of people in the communities.</h3>
        <h3>Vision</h3>
        <h3>To develop globally competitive and socially responsible professionals through technology-driven
          instructions, innovative researches,
          sustainable extension programs that will enhance the lives of people in the communities.</h3>
      </div>
    </form>
  </section>

  <!-- newsletter section ends -->

  <!-- arrivals section starts  -->

  <section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>new arrivals</span> </h1>

    <div class="swiper arrivals-slider">

      <div class="swiper-wrapper">

        <a href="book-1.html" class="swiper-slide box">
          <div class="image">
            <img src="image/book1.png" alt="">
          </div>
          <div class="content">
            <h3>How to Become a Writer?</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </a>

        <a href="book-2.html" class="swiper-slide box">
          <div class="image">
            <img src="image/book2.png" alt="">
          </div>
          <div class="content">
            <h3>The Lottery</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </a>

        <a href="book-3.html" class="swiper-slide box">
          <div class="image">
            <img src="image/book3.jpg" alt="">
          </div>
          <div class="content">
            <h3>Lamb to the Slaughter</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </a>

      </div>

    </div>

    <div class="swiper arrivals-slider">

      <div class="swiper-wrapper">

        <a href="book-4.html" class="swiper-slide box">
          <div class="image">
            <img src="image/book4.jpg" alt="">
          </div>
          <div class="content">
            <h3>A Good Man Is Hard to Find</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </a>

        <a href="book-5.html" class="swiper-slide box">
          <div class="image">
            <img src="image/book5.jpg" alt="">
          </div>
          <div class="content">
            <h3>A Hunter's Wife</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </a>

        <a href="book-6.html" class="swiper-slide box">
          <div class="image">
            <img src="image/book6.png" alt="">
          </div>
          <div class="content">
            <h3>Ghosts and Empties</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </a>

      </div>

    </div>

  </section>

  <!-- arrivals section ends -->

  <!-- reviews section starts  -->

  <section class="reviews" id="reviews">

    <h1 class="heading"> <span>client's reviews</span> </h1>

    <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide box">
          <img src="image/Saitama.png" alt="">
          <h3>Baldy</h3>
          <p>あなたは昔も今もバカですか？ 平手打ちしたらばかだ！</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="image/John.png" alt="">
          <h3>johnny sins</h3>
          <p>The features of the website are good and I really enjoy using it.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="image/Hitler.png" alt="">
          <h3>Hitler</h3>
          <p>He who would live must fight. He who doesn't wish to fight in this world, where permanent struggle is the
            law of life, has not the right to exist.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        <div class="swiper-slide box">
          <img src="image/Gerard.png" alt="">
          <h3>Gerard Way</h3>
          <p>Very helpful, thorough, and responsive staff from the initial email until resolution of the issue. Over and
            above expectations </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="image/Dumbledore.png" alt="">
          <h3>Dumbledore</h3>
          <p>You always live up to your outstanding institutional reputation. Thank you.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="image/Harry.png" alt="">
          <h3>Harry Potter</h3>
          <p>Excellent library and archive - a national facility of international importance.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

      </div>

    </div>

  </section>

  <!-- reviews section ends -->

  <!-- blogs section starts  -->

  <section class="blogs" id="blogs">

    <h1 class="heading"> <span>our blogs</span> </h1>

    <div class="swiper blogs-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide box">
          <div class="image">
            <img src="image/blog-1.jpg" alt="">
          </div>
          <div class="content">
            <h3>blog title goes here</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
            <a href="#" class="btn">read more</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="image">
            <img src="image/blog-2.jpg" alt="">
          </div>
          <div class="content">
            <h3>blog title goes here</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
            <a href="#" class="btn">read more</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="image">
            <img src="image/blog-3.jpg" alt="">
          </div>
          <div class="content">
            <h3>blog title goes here</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
            <a href="#" class="btn">read more</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="image">
            <img src="image/blog-4.jpg" alt="">
          </div>
          <div class="content">
            <h3>blog title goes here</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
            <a href="#" class="btn">read more</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="image">
            <img src="image/blog-5.jpg" alt="">
          </div>
          <div class="content">
            <h3>blog title goes here</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
            <a href="#" class="btn">read more</a>
          </div>
        </div>

      </div>

    </div>

  </section>

  <!-- blogs section ends -->

  <!-- footer section starts  -->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>our locations</h3>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Philippines </a>
      </div>

      <div class="box">
        <h3>quick links</h3>
        <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
        <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
        <a href="#"> <i class="fas fa-envelope"></i> Rtuebooks@rtu.edu.ph </a>
        <img src="image/worldmap.png" class="map" alt="">
      </div>

    </div>

    <div class="share">
      <a href="https://www.facebook.com/moriya.nelson" class="fab fa-facebook-f"></a>
      <a href="https://www.youtube.com/@jaymerpunzalan7441" class="fab fa-youtube"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span>rizal technological university</span> | all rights reserved! </div>

  </section>

  <!-- footer section ends -->

  <!-- loader  -->

  <div class="loader-container">
    <img src="image/coffee.gif" alt="">
  </div>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>


</body>

</html>

<?php } else {
  header("Location: index.php");


} ?>