<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userSearch = $_POST["userSearch"];
    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * from users where userName = :userSearch;";
        $stmt = $pdo->prepare($query);
        $stmt ->bindParam(":userSearch", $userSearch);
        $stmt ->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die("Query failed:" . $e->getMessage());
    }
}
else{
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Page</title>
    <!-- Link to a CSS file (optional) -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<section class="wrapper-main">
<body>
    <h3>Search results</h3>
    <br>
    <?php
        if(empty($results)){
            echo "<div>";
            echo "No result";
            echo "<div>";
        }
        else{
            foreach($results as $row){
                echo htmlspecialchars($row["userName"]);
                echo "<br>";
                echo htmlspecialchars($row["name"]); 
            }
        }
    ?>
</body>
</section>

</html>
