<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KURS</title>
    <link rel="stylesheet" href="../CSS/main.css">
</head>

<header>
  <div class ="logo">
    <a href="../index.html"> <img src="../images/General/logo/logo_static.png" style="width:8.5vw;"></a>
  </div> 
       <div class="title">
         <h3> PHOTOGRAPHER / VIDEOGRAPHER</h3>
         <h1> Oleg Petrov</h1>
       </div>
      
       <div class="Pages" >
          <ul id="port">
            <li><a> <h2>Portfolio</h2></a>  
              <ul class="submenu">
                <li><a href="../HTML/gallery_ph.html">Photography</a></li>
                <li><a href="../HTML/gallery_vid.html">Videography</a></li> 
              </ul> 
            </li>    
            <li><a href="../HTML/Site(about.me).html"><h2>About Me</h2></a> </li>    
            <li><a href="../HTML/Site(price).html"><h2>Price</h2></a> </li>    
          </ul>
        </div>
      <div class="SocialNet">  
        <a href="https://www.instagram.com/_lezhik_ph_/"> <img src="../images/General/SocialNet/Instagram.png" style="width: 5vw; "></a> 
        <a href="https://www.facebook.com/profile.php?id=100004142117968"> <img src="../images/General/SocialNet/facebook.png"style="width: 5vw; "></a>
        <a href="https://t.me/I_lezhik_I"> <img src="../images/General/SocialNet/telegram.png"style="width: 5vw;"></a>
    </div>     
</header>
<body>
<a href="../JS/pass.html" > <h2 style="font-size: 1.1vw; text-align: center;  ">Come to admin page</h2></a>
<div style="margin: 5vw; text-align:center">
    <?php
    require_once "../DbConnect.php";
    
     $db = new DbConnect();
     $conn = $db->connect();
 
     $stmt = $conn -> prepare("SELECT*FROM docker_database.Price");
     $stmt -> execute();
     while ($row= $stmt -> fetch (PDO::FETCH_ASSOC))
              {
                $id=$row ['id'];
                $Cost=$row ['Cost'];
                $Style=$row ['Style'];
                $Time=$row ['Time'];
                echo "<div>".'<h2 style="color: white; font-size:2.5vw">'.$id.'.  '.$Cost.'$  '.$Style.'  '.$Time.'hour(s)'."</div>";
              }
    ?>

   </div>
</body>
<footer>
  <h2 style="font-size: 1vw ; color: white; text-align: center;">© 2020. Oleg Petrov Prod. KHPI.</h2>
</footer>
</html>