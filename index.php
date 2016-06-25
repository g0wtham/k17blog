<!DOCTYPE html>
<html lang="en">
<head>
<style>
.carousel-inner > .item > img {
    margin: 0 auto;
}
.navbar-inverse{
    background-color: #F8F8F8;
    border-color: #E7E7E7;
}
.navbar-inverse .navbar-nav > li > a {
    color: #777777;
}
.navbar-inverse .navbar-nav > .active > a, .navbar-inverse.navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
    background-color: #E7E7E7;
    color: #555555;
}
div.c-wrapper{
    width: 80%; /* for example */
    margin: auto;
}

.carousel-inner > .item > img, 
.carousel-inner > .item > a > img{
/* width: 100%; /* use this, or not */
margin: auto;
}
</style>
  <title>K17 Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<link rel="icon" href="/k17blog/img/k.jpg" sizes="16x16" type="image/png">
<body>


<div class="container-fluid">
 <nav role="navigation" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="/k17blog/index.php">
        <img alt="CEG LOGO" src="/k17blog/img/cegsymbol.png" height="35" width="40" align="left">
      </a>
      <a class="navbar-brand" href="/k17blog/index.php">k17! Blog</a>
    </div>

    <ul class="nav navbar-nav">
      <li class="active"><a href="/k17blog/index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <!-- <li><a href="#"><span class="glyphicon glyphicon-book"></span> Literature</a></li> 
      
      <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> Media</a></li> 
      
      <li><a href="#"><span class="glyphicon glyphicon-glass"></span> Sports</a></li>-->
<li><a href="/k17blog/insert.html"><span class="glyphicon glyphicon-paperclip"></span> New Post</a></li>
<li><a href="/k17blog/genid.html"><span class="glyphicon glyphicon-refresh"></span> Blog Id</a></li>
<li><a href="/k17blog/searchid.html"><span class="glyphicon glyphicon-search"></span> Search</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/k17blog/feedback.html"><span class="glyphicon glyphicon-send"></span>  Feed Back</a></li>
      
      <li><a href="/k17blog/contact.php"><span class="glyphicon glyphicon-map-marker"></span>  Contact Us</a></li>
    </ul>
  </div>
</nav>
</div>
<br>
<table width="100%">
<tr>
<td><img src="/k17blog/img/cegfinal.png" alt="CEG Logo" height="100" width="200"></td>
<td><p align="center"><img src="/k17blog/img/k17.png" alt="k Logo" height="100" width="275"></td>
<td align="right"><img src="/k17blog/img/unesco.jpg" alt="Unesco  Logo" height="100" width="275"></td>
</tr>
</table>
<hr>
<h1 style="text-align:center;">Top 3 Posts of the Week</h1>
<br><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <section id="carousel">
<div class="hero-unit span6 columns">
        <div id="myCarousel" class="carousel  slide" >
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="item  active" >
          <a href="/k17blog/vijay.php">
           <img alt="vijay bday"  src="/k17blog/img/vijay.png" height="1080" width="1024">
            <div class="carousel-caption">
                <h3 style="color:black">Vijay Birthday Special</h3>
            </div>
            </a>
        </div>
        <div class="item">
         <a href="/k17blog/mvr.php">
            <img alt="messi vs ronaldo"  src="/k17blog/img/mvr.jpg" height="1080" width="1024" >
            <div class="carousel-caption">
                <h3 >All-Age Favourite Rivals</h3>
            </div>
            </a>
        </div>
        <div class="item">
         <a href="/k17blog/k17.php">
            <img alt="show topper"  src="/k17blog/img/robot.jpg" height="1080" width="1024" >
            <div class="carousel-caption">
                <h3 style="color:black">A Visual Treat</h3>
            </div>
            </a>
        </div>
        
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
<br>
<br>
<br><br><br>
</section>
</div>
</p>
</td>
</tr>
</table>
<br>
<h1 align="center">Posted Recently</h1>
<hr width="40%">
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "blog";
// Create connection<div style='text-align:right'><h1>Welcome ". $_SESSION['SESS_FIRST_NAME']."!</h1></div>
$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  $sql = "SELECT title,category FROM content";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div style='text-align:center'><h3> * Category - ". $row["category"]."   &nbsp; Title -  " . $row["title"]. "</h3></div><br>";
    }
} else {
    echo "<div style='text-align:center'><h3> No Post Found </h3></div><br>";
}
    ?>

</body>
</html>
