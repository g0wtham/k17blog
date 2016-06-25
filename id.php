<!DOCTYPE html>
<html lang="en">
<head>
  <title>K17 Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="/k17blog/share-buttons.css">
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
            <!-- <li><a href="#"><span class="glyphicon glyphicon-book"></span> Literature</a></li> 
      
      <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> Media</a></li> 
      
      <li><a href="#"><span class="glyphicon glyphicon-glass"></span> Sports</a></li>-->
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
//ßecho "success";


$value=$_POST['id'];



$sql="SELECT `title`, `category`, `author`, `content`, `date`, `time` FROM `content` WHERE id='$value' ";
/*$sql1="select c_name from ticket_price where c_id='$value'";
$sql2="select c_id into b from ticket_price  where c_id=id";
$sql3="select max(seat_id ) into c from ticket_price where c_id=id";
$sql4="select tot_price into d from ticket_price where c_id=id";*/
/*$sql4="select min(seat_id) from r_status01 where train_name='$value3' and reserved='n'";
$sql5="select pricept from t_details01 where train_name='$value3'";*/
/*
$conn->query($sql1);
$conn->query($sql2);
$conn->query($sql3);
$conn->query($sql4);/

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


*/

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<div style='text-align:center'><h1>  Title  : " . $row["title"]. "</h1></div><br>";
      echo "<hr width=60%>";
       echo  "<div style='text-align:center'><h3> <br> Author: ". $row["author"]. "&nbsp; &nbsp;Category: " . $row["category"] . "&nbsp;&nbsp;Date: ". $row["date"] ."&nbsp;&nbsp;Time: ". $row["time"] ."<br></h3></div>";
       echo "<hr width=80%>";
    	echo "<div style='text-align:justify'><h4> Content -  </h4></div>" . $row["content"]. "<br>";
    }
} else {
    echo "<div style='text-align:center'><h3> No Post Found </h3></div><br>";
}
    
    /*


if($result=mysqli_query($conn, $sql)){
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_array($result);
		echo"<table";
		echo"<tr>";
		echo"<th>Title : </th>";echo"<td>".$row['title']."</td><br>";
		echo"<th>Category: </th>";echo"<td>".$row['category']."</td><br>";
		echo"<th>Author : </th>";echo"<td>".$row['author']."</td><br>";
		echo"<th>Content  : </th>";echo"<td>".$row['content']."</td><br>";
		echo"<th>Date : </th>";echo"<td>".$row['date']."</td><br>";
		echo"<th>Time  : </th>";echo"<td>".$row['time']."</td><br>";
		/*echo"<th>Day  : </th>";echo"<td>".$row['day']."</td><br>";
		echo"<th>Rate: </th>";echo"<td>".$row['rate']."</td><br>";
		echo"<th>Time  : </th>";echo"<td>".$row['tym']."</td><br>";
		echo"<th>Via  : </th>";echo"<td>".$row['via']."</td><br>";*/
		/*echo"</tr>";
		$row=mysqli_fetch_array($result);
		echo"</table>";
	}else
	echo"vadai";

}



}
*/
?>
<br>
<h3  align="middle">Share Via</h3>
<div id="share-buttons" align="middle">
<!-- Email -->
    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
    </a>
 
    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
    
    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
    <!-- Twitter -->
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
    <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />
    </a>
    </div>
<br><br>
<hr  width="60%">
<ul class="pager">
    <li><a href="/k17blog/index.php">Previous</a></li>
    
  </ul>
</body>
</html>
