<header >
<a href="index.html"> <img src="images/General/logo/logo_static.png" style="width:8.5vw; margin-top: 1vw; margin-left: 1vw; filter: drop-shadow(0vw 0vw 0.5vw black); "></a>
</header>
<body>  
    <?php
        include "DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM docker_database.Portfolio");
        $stmt->execute();
        $Photos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
      <div style = "text-align: center; margin: 2vw">
       
        <form action="DB.php" method="post" enctype="multipart/form-data">
            <input type="text" name="ph_id" required="required" placeholder="Please Enter Id"/><br /><br />
            <input type="file" name="photo">
            <input type="submit" value="Submit" name="submit"/><br />
        </form>
        <p>
          <?php
          echo "<pre>";
          print_r($Photos);
          echo "</pre>";
          ?>
        </p>
      </div>
  </body>