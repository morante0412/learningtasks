<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

<?php include 'navbar.php';?>

      <a>   </a>

</header>



<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hello world! mark morante here!</h3>
      <span data-aos="fade-up">BSIT-C</span>
      <p data-aos="fade-up">I am a first year college IT student of USLS, and here is my</p>
      <a data-aos="fade-up" href="#about" class="btn"> portfolio </a>
   </div>

</section>

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">my full name is mark joshua p. morante. I am 20 years of age, adult. my birthday is april 12th. And it's my first year studying information technology at university of st. la salle. my hobbies include:</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> PC gaming     </h3>
         <h3 data-aos="zoom-in"> Digital Design</h3>
         <h3 data-aos="zoom-in"> Photoshop     </h3>
         <h3 data-aos="zoom-in"> Music         </h3>

      </div>
      <a href="#" class="btn" data-aos="fade-up">return</a>


   </div>
   




</section>

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
          <a href="LT2/index.html"><img src="images/img-1.jpg" alt=""></a>
         <h3>cookbook</h3>
         <span>( LT2 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
          <a href="LT3/index.html"><img src="images/img-2.jpg" alt=""></a>
         <h3>songs i'd listen to</h3>
         <span>( LT3 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
          <a href="LT4/index.html"><img src="images/img-3.jpg" alt=""></a>
         <h3>an inspirational quotation</h3>
         <span>( LT4 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
          <a href="CLE1MT/index.html"><img src="images/img-4.jpg" alt=""></a>
         <h3>corruption and society</h3>
         <span>( CLE1MT )</span>
      </div>

      <div class="box" data-aos="zoom-in">
          <a href="LT5/index.html"><img src="images/img-5.jpg" alt=""></a>
         <h3>JS introduction</h3>
         <span>( LT5 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      </div>

   </div>

</section>

<script src="js/script.js"></script>




   
</body>
</html>