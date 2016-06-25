<!DOCTYPE html>
<html lang="en">
<head>
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
      
      <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> Media</a></li> --
      
      <li><a href="#"><span class="glyphicon glyphicon-glass"></span> Sports</a></li>-->
<li><a href="/k17blog/insert.html"><span class="glyphicon glyphicon-paperclip"></span> New Post</a></li>
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

  $sql = "SELECT id,title FROM content";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div style='text-align:center'><h3> * Blog Id - ". $row["id"]."   &nbsp; Title -  " . $row["title"]. "</h3></div><br>";
    }
} else {
    echo "<div style='text-align:center'><h3> No Post Found </h3></div><br>";
}
    ?>
    </body>
    </html>