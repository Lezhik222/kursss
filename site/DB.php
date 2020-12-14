<?php
If(isset($_POST['submit'])){
    try{
        include "DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO docker_database.Portfolio (id, photo)
        VALUES (:ph_id, :photo)");
        $stmt->bindParam(':ph_id', $ph_id);
        $stmt->bindParam(':photo', $photo);
        // insert a row from input
        $ph_id = $_POST['ph_id'];
        $photo = $_POST['photo'];
        $stmt->execute();
    }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}
    header("Location: admin.php");
    exit;
?>

