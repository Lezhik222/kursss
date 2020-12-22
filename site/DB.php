<?php
If(isset($_POST['submit'])){
    try{
        include "DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO docker_database.Price (id, Cost, Style, Time)
        VALUES (:id, :Cost, :Style, :Time)");
        $stmt->bindParam('id', $id);
        $stmt->bindParam(':Cost', $Cost);
        $stmt->bindParam(':Style', $Style);
        $stmt->bindParam(':Time', $Time);
        // insert a row from input
        $id = $_POST['id'];
        $Cost = $_POST['Cost'];
        $Style = $_POST['Style'];
        $Time = $_POST['Time'];
        $stmt->execute();
    }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }
If(isset($_POST['delete'])){
    try{
        include "DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("DELETE FROM docker_database.Price WHERE id= :id");
        $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
        $stmt->execute();
        $id = $_POST['id'];
        }
            catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;
        }
    header("Location: PHP/admin.php");
    exit;
?>