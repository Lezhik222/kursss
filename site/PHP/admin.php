<head>
<link rel="stylesheet" href="../CSS/main.css">
</head>
<header >
<a href="../index.html"> <img src="../images/General/logo/logo_static.png" style="width:8.5vw; margin-top: 1vw; margin-left: 1vw; filter: drop-shadow(0vw 0vw 0.5vw black); "></a>
</header>
<body>  


<?php
        include "../DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM docker_database.Price");
        $stmt->execute();
    ?>
  <div style = "text-align: center; margin: 2vw">
    <form action="../DB.php" method="post" enctype="multipart/form-data">
            <input type="text" name="id" required="required" placeholder="Please Enter Id"/>
            <input type="submit" value="Delete" name="delete"/><br /><br />
            <input type="decimal" name="Cost" placeholder="Cost ($)">
            <input type="text" name="Style" placeholder="Style">
            <input type="text" name="Time" placeholder="Time (hour)">
            <input type="submit" value="Submit" name="submit"/><br />
            
    </form>

        <p>
          <?php
              while ($row= $stmt -> fetch (PDO::FETCH_ASSOC))
              {
                $id=$row ['id'];
                $Cost=$row ['Cost'];
                $Style=$row ['Style'];
                $Time=$row ['Time'];
                echo "<div>".'<h2 style="color: white; font-size:2vw">'.$id.'.  '.$Cost.'$  '.$Style.'  '.$Time.'hour(s)'."</div>";
              }
            ?>
        </p>
      </div>
  </body>