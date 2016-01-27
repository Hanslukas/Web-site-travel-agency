<!DOCTYPE html>

<html>

<head> 
<meta charset="utf-8">

  <title> Paris </title>
  <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/all_destination.css">
  <link rel="shortcut icon" href="../images/travel-agency-logo.png">
</head>

<body>

<!--Menu header-->
<header id="header" class="header">
<nav id="navig" class="navig"> 
  <a id="logo" href="index.php"></a>
<ul>
   <li><a href='index.php'><span><img src="../images/home.png" id="image"></span></a></li>
   <li><a href='all_destination.php'><span>All destination</span></a></li>
    <li><a href='top_destination.php'><span>Top destination</span></a></li>
    <li><a href='booking.php'><span>Book your trip</span></a></li>
   <li><a href='about_us.php'><span>About us</span></a></li>
          <?php 
   session_start();
   if(isset($_SESSION['username']))
   {
       echo '<li id="area"><a href="logout.php"><span>Logout</span></a></li>';
       echo '<li><a href="manage_reservations.php"><span>Manage</span></a></li>';
       echo '<li><a href="status.php"><span>Status</span></a></li>';
   }
   else
   {
      echo '<li id="area"><a href="login.html"><span>Reserved area</span></a></li>';
   }
   ?>
</ul>
</nav>
</header>
<!--Fine Menu header-->

<ul id="menu">
 <li id="navigation">
   <ul>
      <li><a href="africa.php"><img src="../images/africa.png" id="imageLateral"></a></li>
     <li><a href="america.php"><img src="../images/america.png" id="imageLateral"></a></li>
     <li><a href="asia.php"><img src="../images/asia.png" id="imageLateral"></a></li>
     <li><a href="europe.php"><img src="../images/europa.png" id="imageLateral"></a></li>
     <li><a href="oceania.php"><img src="../images/oceania.png" id="imageLateral"></a></li>
   </ul>
 </li>
</ul>



<div id="container">
  <hgroup class="intro">
  <p><h1>Paris</h1></p>
  <p><h4>Here are the tour for Paris</h4><p>
  <hr id="main">
                <div class="desc"> 
              <div class="scritta"><h2> Las Vegas </h2> </div>
              <div class="frase"><h4> Winner, Winner, Chicken Dinner! </h4> </div>
              </div> 
                <div class="circular">
                <a href="#"><img src="../images/las_vegas.jpg"></a>
                  <hr id="list">
                </div>

                <div class="desc"> 
              <div class="scritta"><h2> London </h2> </div>
              <div class="frase"><h4>  The elegance of the class and prestige  </h4> </div>
              </div> 
                <div class="circular">
                <a href="#"><img src="../images/london.jpg"></a>
                  <hr id="list">
                </div>

                <div class="desc"> 
              <div class="scritta"><h2> Paris </h2> </div>
              <div class="frase"><h4>  Harmony and grandeur   </h4> </div>
              </div> 
                <div class="circular">
                <a href="#"><img src="../images/paris.jpg"></a>
                  <hr id="list">
                </div>

                       <div class="desc"> 
              <div class="scritta"><h2> Rome </h2> </div>
              <div class="frase"><h4>  The elegance of humanity and history   </h4> </div>
              </div> 
                <div class="circular">
                <a href="#"><img src="../images/rome.jpg"></a>
                  <hr id="list">
                </div>
   
  </div>


</hgroup>


</div>



<div class="footer">
  <br>
  <p><img src="../images/airplane.png"> Copyright Â© 2011-2012 CSSButton.me </p>
  <p>Designed by Caleb Ogden in California</p>
  
</div>


</body>

</html>
