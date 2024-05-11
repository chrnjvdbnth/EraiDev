<?php

try {
    require "dbh.inc.php";

    $query = "SELECT name from fish;";
    $stmt = $pdo->prepare($query);
    $stmt ->execute();
    $fishList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($fishList as $fish) {
        $fishName = htmlspecialchars($fish['name'], ENT_QUOTES, 'UTF-8');
        echo '<input type="number" name="' . $fishName . '" placeholder="' . $fishName . '" min="0"><br>';
    }

    $pdo=null;
    $stmt=null;
} catch (PDOException $e) {
    die("Query failed:" . $e->getMessage());
}
