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
<br><br>
<h1 align="center">Happy Birthday Ilayathalapathy Vijay</h1>
<h2 align="center">#HBDDarlingOfMassVijay</h2>
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

  $sql = "SELECT `category`, `author`,  `date`, `time` FROM `content` WHERE id=1";
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
With Ilayathalapathy Vijay Celebrating his 42nd Birthday today, top celebrities took twitter to wish him. Director Venkat Prabhu, Actor Arya, Nazriya, Raghav Lawrence, 
GV Prakash, Dhanush, Vijay Sethupathi, Radhika Sarathkumar, Gayathri Raghuram, Singer Krish, Actor Vivek, Jai, Vishnu, Keerthy Suresh, Hansika and so many celebrities wished Ilayathalapathy Vijay on his birthday.</h4><br><br>
<div style="text-align: center"><img src="/k17blog/img/theri.jpg"></div>
<p>
<h4 align="center">
Ilayathalapathy Vijay is being flooded with birthday wishes on Twitter. The actor is celebrating his 42nd birthday on Wednesday, June 22.

The actor is spending time with his family on his special day. Reports say that Vijay is on a holiday in the United States. But it has not stopped his legion of fans from celebrating the day by cutting cakes and doing charity work in India. 


In many places in Tamil Nadu, including Chennai and Madurai, his fans have put up birthday posters to wish him on the special day. 

They have also created multiple hashtags to wish him online, the prominent among them being #HBDVijay. Apart from wishing Ilayathalapathy, they are sharing memorable scenes, photos and dialogues from the actor's films.

Many celebrities have also taken to Twitter to shower wishes on the actor. Here are a few tweets posted by some of the popular names of Kollywood:
<br><br>

<p>RAAI LAXMI: Happy birthday 2the most simple ,down to earth,amazing person I have known #thalapathy #Vijay hv a wonderful 1❤️☺️</p>

<p>Vikram Prabhu: Happy Birthday to @actorvijay Sir! Wishing you another #Theri year ahead!#HBDDarlingOfMassVIJAY</p>

<p>Vishnu Vishal: Happy b'day to d ever young n dashing @actorvijay na..god bless :)</p>

<p>Dharan Kumar: #HBDVijay sir. May you keep motivating us on & off screen with ur impeccable screen presence & humility @actorvijay</p>

<p>Udhay: Happy birthday Ilayathalabathy Vijay na!</p>

<p>Sathish: Happy birthday @actorvijay sir. Have a great year sir. We Miss u here in shooting spot sir. Indha varudamum #Therikka vaazhththukkal sir</p>

<p>Sibi Sathyaraj: Happy bday to the Box Office King!Vijay anna! #HBDDarlingOfMassVIJAY</p>

<p>Chandran: Many more happy returns of the day to the most phenomenal dancer.. #HBDVijay sir..</p>

<p>Nikki Galrani: Wishing the idol of many,our #Ilayathalapathy @actorvijay sir a super happy Bdayyy #HBDVijay</p>

<p>Rajesh M: Happy bday vijay sir #HBDVijay</p>

<p>Madonna Sebastian: A very HBD to the most beloved Ilayathalapathy vijay sir .. Live long sir !! #HBDVijay</p>

<p>J Anbazhagan: A very happy birthday to our #RevolutionaryYouth Actor illayathapathy Vijay. Kollywood is gifted to have Vijay. #HBDVijay</p>

<p>Arya: Happy birthday to warmest coolest and most friendly @actorvijay Na .. Have a rocking year</p>

<p>Anirudh Ravichander: Happy Birthday Vijay sir.. My happy birthday dedication to you - <a href="http://youtu.be/8uLTNdCQ3fg">Surprise</a> ☺️</p>

<p>Hansika: Happy birthday to one of the most generous and genuine person I have ever worked ⭐️ @actorvijay , stay blessed</p>

<p>Raghava Lawrence: Happy Birthday Ilayathalapathy Vijay Nanba</p>

<p>Dhanush: Happy birthday to my friend and a super mass hero Vijay sir :) have the greatest of years ahead sir :)</p>

<p>Vishnu: Happy birthday theri baby thalapathy vijay sir @actorvijay</p>

<p>Jai: Happy Birthday @actorvijay Anna! Love you alwys Thanks for introducing me n showing me d awesome version of my life</p>

<p>Shanthnu Buddy: No more wrds to describe my respect fr him "Brothr frm another Mother"HBD @actorvijay anna</p>

<p>Nivin Pauly: Birthday wishes to dear @actorvijay sir :) :) :)</p>

<p>Kabir Duhan Singh: Happy Birthday vijay sir ...</p>
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
<hr  width="60%">
<h3 align="center">Comments</h3>
<form action="/k17blog/insertsss.php" method="post" align="center">

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

$sql = "SELECT * FROM vijcom";
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