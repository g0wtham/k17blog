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
        <li><a href="/k17blog/index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        
      
      
      <li><a href="/k17blog/insert.html"><span class="glyphicon glyphicon-paperclip"></span> New Post</a></li>
      <li><a href="/k17blog/genid.html"><span class="glyphicon glyphicon-refresh"></span> Blog Id</a></li>
<li><a href="/k17blog/searchid.html"><span class="glyphicon glyphicon-search"></span> Search</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/k17blog/feedback.html"><span class="glyphicon glyphicon-send"></span>  Feed Back</a></li>
      
      <li class="active"><a href="/k17blog/contact.php"><span class="glyphicon glyphicon-map-marker"></span>  Contact Us</a></li>
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {

      //echo "<h1 align="center">";
      echo  "<div style='text-align:center'><h2> <br> ". $row["name"]. " <br>" . $row["address"] . "<br>". $row["thens"] ."<br>". $row["city"] ."<br>". $row["email"] ."<br>". $row["phone"] ."<br></h2></div>";
      //echo" </h1>";
        /* echo "<br> ". $row["name"].;
         echo" <br> " . $row["address"].;
         echo "<br> " . $row["thens"] .;
         echo "<br>". $row["city"] .;
         echo" <br> " . $row["email"].;
         echo "<br> " . $row["phone"] .;*/
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

<div style="text-align: center"><img src="/k17blog/img/map.png"></div>

<ul class="pager">
    <li><a href="/k17blog/index.php">Previous</a></li>
    
  </ul>
</body>
</html>