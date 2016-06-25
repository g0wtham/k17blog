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
<li class="active"><a href="/k17blog/searchid.html"><span class="glyphicon glyphicon-search"></span> Search</a></li>
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
<br><br>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "blog");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$last_name = mysqli_real_escape_string($link, $_POST['lnames']);
$email_address = mysqli_real_escape_string($link, $_POST['emails']);


// attempt insert query execution
$sql =  "INSERT INTO `kcom`(`name`, `comment`) VALUES ('$last_name', '$email_address')";
if(mysqli_query($link, $sql)){
    echo "<h1><div style='text-align:center'>Comment has been Successfully Posted</h1></div>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>  
<ul class="pager">
    <li><a href="/k17blog/index.php">Previous</a></li>
    
  </ul>
</body>
</html>
