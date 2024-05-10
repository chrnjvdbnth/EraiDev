<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $password = $_POST["password"];
    $userName = $_POST["userName"];
    $userType = $_POST["userType"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (name, password, userName, userType) VALUES (:name, :password, :userName, :userType);";
        $stmt = $pdo->prepare($query);
        $stmt ->bindParam(":name", $name);
        $stmt ->bindParam(":password", $password);
        $stmt ->bindParam(":userName", $userName);
        $stmt ->bindParam(":userType", $userType);
        $stmt ->execute();

        $pdo=null;
        $stmt=null;
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Query failed:" . $e->getMessage());
    }
}
else{
    header("Location: ../index.php");
}