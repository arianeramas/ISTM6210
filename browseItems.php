<?php

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel='stylesheet'>
  <link href="css/style.css" rel='stylesheet' type='text/css'>
</head>
<body>
<main>
  <?php include 'header.php'; ?>
  <section>
     <h1 id="searchBoxHeading">What are you looking for?</h1>
      <div id="searchBox" class="mobile-form">
         <form action="/search" class="search-form" id="searchform" method="get">
             <span id="noEasy"><input class="sb-search-submit" type="submit" value="">
              <span class="sb-icon-search"></span></span>
              <input id="sbox" name="q" onblur="if (this.placeholder == '') {this.placeholder = 'To search type + hit enter';}" onfocus="if (this.placeholder == 'To search type + hit enter') {this.placeholder = '';}" placeholder="To search type + hit enter" type="text" x-webkit-speech="">
             <button class="searchButton" role="button">Search</button>
         </form>
     </div>
   </section>
   <section class="featuredProducts">
     <h1 id="featuredProductsHeading">Featured Categories</h1>
     <div class="row">
     <div class="column">
     <img src="images/featuredClothing.jpg" alt="Clothing">
     <div class="content"><h3>Clothing</h3></div>
    </div>
     <div class="column"><img src="images/featuredTextbooks.jpg" alt="Textbooks">
       <div class="content"><h3>Textbooks</h3></div>
      </div>
     <div class="column"><img src="images/featuredFurniture.jpg" alt="Furniture">
       <div class="content"><h3>Furniture</h3></div>
      </div>
 </div>
   </section>
  </main>
  <script src="js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
