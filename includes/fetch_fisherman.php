<?php

try {
    require_once "dbh.inc.php";

    $query = "SELECT name from fisherman;";
    $stmt = $pdo->prepare($query);
    $stmt ->execute();
    $fishermen = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<select id="fishermanSelection" name="fisherman" onchange="handleSelection(event)">';

    foreach ($fishermen as $fisherman) {
        echo '<option value="' . htmlspecialchars($fisherman['id'], ENT_QUOTES, 'UTF-8') . '">'
            . htmlspecialchars($fisherman['name'], ENT_QUOTES, 'UTF-8') . '</option>';
    }

    echo '</select>';

    $pdo=null;
    $stmt=null;
} catch (PDOException $e) {
    die("Query failed:" . $e->getMessage());
}
