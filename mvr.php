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
      <li class="active"><a href="/k17blog/index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <!-- <li><a href="#"><span class="glyphicon glyphicon-book"></span> Literature</a></li> 
      
      <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> Media</a></li> 
      
      <li><a href="#"><span class="glyphicon glyphicon-glass"></span> Sports</a></li>-->
<li><a href="/k17blog/insert.html"><span class="glyphicon glyphicon-paperclip"></span> New Post</a></li>
<li><a href="/k17blog/genid.html"><span class="glyphicon glyphicon-refresh"></span> Blog Id</a></li>
<li><a href="/k17blog/searchid.html"><span class="glyphicon glyphicon-search"></span> Search</a></li></ul>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="/k17blog/feedback.html"><span class="glyphicon glyphicon-send"></span>  Feed Back</a></li>
      
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
<h1 align="center">All-Age Favourite Rivals</h1>
<h2 align="center">Messi vs Ronaldo</h2>
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

  $sql = "SELECT `category`, `author`,  `date`, `time` FROM `content` WHERE id=2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div style='text-align:center'><h3> Author- ". $row["author"]."   &nbsp; Category - " . $row["category"]. "   &nbsp; Date - " . $row["date"]."   &nbsp; Time- " . $row["time"]."</h3></div><br>";
    }
} else {
    echo "<div style='text-align:center'><h3>Anonymous Post</h3></div><br>";
}
    ?>
<p>
<h4 align="center">
The most universal topic of debate in the contemporary football world is about who the better footballer is between Lionel Messi and Cristiano Ronaldo. Sport thrives on rivalries, and it is this one between the spearheads of Barcelona and Real Madrid that has defined the last decade in footballing circles.
Also read : Why Lionel Messi's salary is thoroughly well-earned and completely justified
When the inevitable question was once posed to Ronaldo himself, he had said, “You cannot compare a Ferrari with a Porsche because it's a different engine. You cannot compare them. He does the best things for Barcelona, I do the best things for Madrid.”
</h4>
</p>
<div style="text-align: center"><img src="/k17blog/img/mvr.png"></div>
<p>
<h4 align="center">
Whatever the man may say, we will make a comparison anyway. Messi exerts more influence on a match, playing more around the centre of the pitch than Ronaldo and bringing in more of his team-mates into attacks. Ronaldo is more comfortable taking solo runs on the wide sides, and he is much better as a finisher than the Argentine. Also, the Portuguese has at times been accused of being a ‘flat track bully’, effective in the lesser matches but disappearing when it really matters.
Ronaldo is more athletic of the two and is visibly more professional about taking care of himself. Messi’s balance is second to none, but because of his small size he can be knocked off the ball by more imposing opponents. He, however, seldom executes touches that are cute but ineffectual, something Ronaldo is guilty of sometimes.
But the above are all subjective comparisons. What do the numbers say?
We have attempted a detailed comparison of the statistics that the two players have gathered over their careers. Statistics of course never tell the whole story, but this is as objective a judgement as any that can be passed upon the million-dollar question.
</h4>
</p>
<div style="text-align: center"><img src="/k17blog/img/mvr1.png"></div>
<p>
<h4 align="center">
Mumbai might get heavy snow, Russians could stop drinking vodka, Americans may stop funding its military and Volkswagen might even go bankrupt. Everything mentioned above is possible, but one thing in this world is never possible. Fans will never stop comparing Lionel Messi and Cristiano Ronaldo. Perhaps this is because the current generation of football fans are experiencing perhaps two of the greatest gifts ever given to “the beautiful game”.
The Brazilian legend, Pele, has also stated that Lionel Messi is the “best in the world” over the past decade, which has encouraged further debate among fans.
In my opinion, Lionel Messi’s game shows precisely how much talent he has. It’s pure, perfect football. Ronaldo, on the other hand, is a fine example of how hard work can work wonders. He is perhaps one of the most hardworking players to ever grace the game.
</h4>
</p>
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
<br><br>
<hr  width="60%">
<h3 align="center">Comments</h3>
<form action="/k17blog/insertssss.php" method="post" align="center">

<input type="text" placeholder="Name" name="lnames" id="e" required><br><br>
<textarea type="text" placeholder="Comment" name="emails" id="i" cols="50" rows="5" min="1" max="2048" required></textarea><br><br>


  <button type="submit" class="btn btn-success">Submit</button>       
</form> 
<br>
<hr width="60%">
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

$sql = "SELECT * FROM mvrcom";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {

      //echo "<h1 align="center">";
      echo  "<div style='text-align:center'><h3> <br>Name - ". $row["name"] ."    Comments - ".  $row["comments"] . "<br></h3></div><hr>";
      //echo" </h1>";
        /* echo "<br> ". $row["name"].;
         echo" <br> " . $row["address"].;
         echo "<br> " . $row["thens"] .;
         echo "<br>". $row["city"] .;
         echo" <br> " . $row["email"].;
         echo "<br> " . $row["phone"] .;*/
     }
} else {

     echo "<div style='text-align:center'><h3> No Comments Found </h3></div><br>";
}

$conn->close();
?>  
<ul class="pager">
    <li><a href="/k17blog/index.php">Previous</a></li>
    
  </ul>
</body>
</html>


