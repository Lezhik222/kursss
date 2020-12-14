<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KURS</title>
    <link rel="stylesheet" href="../CSS/main.css">
</head>

<header >
  <div class ="logo">
    <a href="../index.html"> <img src="../images/General/logo/logo_static.png" style="width:8.5vw;"></a>
  </div> 
     <div class="title">
       <h3> PHOTOGRAPHER / VIDEOGRAPHER</h3>
       <h1> Oleg Petrov</h1>
     </div>
    
     <div class="Pages" >
      <ul id="port">
        <li><a href="" > <h2>Portfolio</h2></a>  
          <ul class="submenu">
            <li><a href="gallery_ph.html">Photography</a></li>
            <li><a href="gallery_vid.html">Videography</a></li> 
          </ul> 
        </li>    
        <li><a href="Site(about.me).html"><h2>About Me</h2></a> </li>    
        <li><a href="Site(price).html"><h2>Price</h2></a> </li>    
      </ul>
    </div>
    <div class="SocialNet">  
      <a href="https://www.instagram.com/_lezhik_ph_/"> <img src="../images/General/SocialNet/Instagram.png" style="width: 5vw; "></a> 
      <a href="https://www.facebook.com/profile.php?id=100004142117968"> <img src="../images/General/SocialNet/facebook.png"style="width: 5vw; "></a>
      <a href="https://t.me/I_lezhik_I"> <img src="../images/General/SocialNet/telegram.png"style="width: 5vw;"></a>
  </div>     
</header>
<body>
  <div style="margin: 5vw">
    <?php
     include "../DbConnect.php";
     $db = new DbConnect();
     $conn = $db->connect();
 
     $stmt = $conn -> prepare("SELECT*FROM docker_database.Portfolio");
     $stmt -> execute();
     $tests = $stmt -> fetchAll(PDO::FETCH_ASSOC);
     echo "<pre>";
     print_r($tests);
     echo "</pre>";

    
    ?>
   </div>
   
   <a href="../admin.php"> <h2>Come to admin page</h2></a>
</body>
<footer>
  <h2 style="font-size: 1vw ; color: white; text-align: center;">© 2020. Oleg Petrov Prod. KHPI.</h2>
</footer>
</html>