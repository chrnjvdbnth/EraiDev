<?php
// Include your database connection
require_once "dbh.inc.php";

try {
    // Fetch form data
    $fishermanName = $_POST['fisherman'];
    $transactionDate = $_POST['transactionDate'];

    // Prepare the SQL insert statement
    $sql = "INSERT INTO fisherman_fish_transactions (name, date, fish_type, weight) VALUES (:name, :date, :fish, :weight)";
    $stmt = $pdo->prepare($sql);

    // Iterate over each POSTed fish type and weight
    foreach ($_POST as $fishType => $weight) {
        // Skip irrelevant form fields
        if ($fishType === 'fisherman' || $fishType === 'transactionDate') {
            continue;
        }
        
        // Convert weight to a numeric value (or treat empty as zero)
        $weight = floatval($weight);
        
        // Check if the weight is greater than zero
        if ($weight > 0) {
            // Execute the SQL statement
            $stmt->execute([
                ':name' => $fishermanName,
                ':date' => $transactionDate,
                ':fish' => $fishType,
                ':weight' => $weight
            ]);
        }
    }

    // Close the connection and the statement
    $pdo = null;
    $stmt = null;

    // Redirect to a confirmation page or show a success message
    header("Location: ../fisherman-add-transaction.php?submit=success");
    exit();
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>
