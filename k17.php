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
<h1 align="center">Kurukshetra </h1>
<h2 align="center">Battle of Minds</h2>
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

$sql = "SELECT `category`, `author`,  `date`, `time` FROM `content` WHERE id=3";
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
“To raise new questions, new possibilities, to regard old problems from a new angle, requires creative imagination and marks real advance in science,” said Albert Einstein. The tenth edition of Kurukshetra, the annual inter-college techno-management fest of the College of Engineering, Guindy (CEG), under the patronage of UNESCO, hopes to accomplish all this and more.
<br>
Last year’s edition of Kurukshetra saw more than 24,000 participants from over 800 colleges, with 33 events in six categories, workshops and guest lectures. This year’s edition, from February 17 to 20, aims at taking the fest to even greater heights.
<br>
<div style="text-align: center"><img src="/k17blog/img/3.png"></div>
<br><br>
The fest will kick off with the pre–k! talk — a guest lecture from Angelo Vermeulen, Belgian visual artist, space researcher and the crew commander of the HI-SEAS MARS Simulation programme funded by NASA. Joining him in the panel of guest lectures this year is Abhas Mitra, the former head of theoretical astrophysics at Bhabha Atomic Research Centre.
<br>
Workshops by ESRI on Connective Convergence, Samsung on Virtual Reality, IBM on Cognitive Computing, Alstom on Distance Relays and Substation Automation and those introducing novel concepts such as Growth Hacking and building 3D printers are just some of the projects to look forward to.

</h4>
</p>
<div style="text-align: center"><img src="/k17blog/img/god.png"></div>
<p>
<h4 align="center">

Also joining the lineup this year is Krithi, the exclusive k! workshop for school students, with the theme of Home Automation. StartUp Weekend, powered by Google, will be held again this year.
Other events include Robowars, Godspeed, Bank Robbery, Alcatraz, Enigma, Ninja Coding, Gambling Math, Model G20, online events such as Sherlock, Riddles of the Sphinx, Tame the Code and the Onsite Programming Contest.
E-for-Educate Initiative has been created and undertaken to motivate, to provide opportunity, to identify, analyse and provide tools to the current generation to solve problems.
The initiative has joined hands with BHUMI to recycle e-wastes collected from schools and colleges and to utilise the funds raised for the education of underprivileged children.
‘Asherah’, which removes the waste matter from water bodies with image processing techniques; Smart Auto’ which ensures that a complaint is filed against the drivers who do not use meters; an ingenious Android game, based on Dexter, the much loved mascot of Kurukshetra and a ‘2D writing machine’, that converts pdf format into human written form are some of the projects that will be on display.
</h4>
</p>
<div style="text-align: center"><img src="/k17blog/img/2.jpg"></div>
<p>
<h4 align="center">
Startup Weekend is a global grassroots movement of active and empowered entrepreneurs who are learning the basics of founding startups and launching successful ventures. You can view this video to see how it works.

Our goal is to create an environment where passionate people can come together to learn, network, bridge the gap between trades, expose their potential and obtain the results they deserve. Startup Weekend had been held across 135+ countries and we are looking forward to making it big in Chennai.
 
This time Kurukshetra team is extremely happy to host Startup Weekend Chennai edition as a part of the Kurukshetra, an International Techno Management Festival of CEG conducted under the coveted patronage of UNESCO.

In addition to Kurukshetra, this year, Startup Weekend is also collaborating with CEG’s Centre for Entrepreneurship Development (CED) and Capitalize.
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
<form action="/k17blog/insertsssss.php" method="post" align="center">

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

$sql = "SELECT * FROM kcom";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {

      //echo "<h1 align="center">";
      echo  "<div style='text-align:center'><h3> <br>Name - ". $row["name"] ."    Comments - ".  $row["comment"] . "<br></h3></div><hr>";
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


