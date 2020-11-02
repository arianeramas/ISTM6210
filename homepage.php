<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel='stylesheet'>
  <link href="css/style.css" rel='stylesheet' type='text/css'>
  <style>
  div#searchBox {
      float: none;
      text-align: centre;
      color: #777;
      margin-top: 4em;
      position: relative;
      top: 10px;
  }
  #searchform {
    position: fixed;
    right:180px;
  }
  </style>
</head>
<body>
<main>
  <header>
      <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
        <div class="container navbar-container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="company_logo" src="images/websiteLogo.png" alt="Campus Cart"/></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <div id="searchBox" class="mobile-form">
              <form action="/search" class="search-form" id="searchform" method="get">
                     <span id="noEasy"><input class="sb-search-submit" type="submit" value="">
                      <span class="sb-icon-search"></span></span>
                      <input id="sbox" name="q" onblur="if (this.placeholder == '') {this.placeholder = 'To search type + hit enter';}" onfocus="if (this.placeholder == 'To search type + hit enter') {this.placeholder = '';}" placeholder="To search type + hit enter" type="text" x-webkit-speech="">
                 </form>
             </div>
            </ul>
          </div>
          <div class="top-social">
            <ul id="top-social-menu">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#">About</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section id="homepageContent">
      <h1 id="mainheading">Buy.Sell.Discover.</h1>
      <p id="mainPageSubtext">An user-friendly and safe way to buy and sell</br> items within the GW community!</p>
      <button class="signUpButton" role="button">Sign Up</button>
      <img class="homePageImage" src="images/homePage.png" alt="Campus Cart">
    </section>
 </main>
 <script src="js/header.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
