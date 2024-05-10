<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Page</title>
    <link rel="stylesheet" href="css/fisherman-add-transaction-styles.css">
    <script src="scripts/fisherman-add-transaction-script.js"></script>
</head>

<body>
    <section class="wrapper-main">
        <h3>Add Transaction of a Fisherman</h3>
        <br>
        <form id="fishermanForm">
            <label for="fishermanSelection">Select Fisherman:</label>
            <!-- Include the PHP script to populate the dropdown -->
            <?php
            // Include the PHP script to populate the dropdown
            include 'includes/fetch_fisherman.php';
            ?>
            <br>
            <!-- Date selector -->
            <label for="transactionDate">Transaction Date:</label>
            <input type="date" id="transactionDate" name="transactionDate"><br>

            <!-- Include the PHP script to generate input number boxes based on the fish list -->
            <?php
            // Include the PHP script to generate input number boxes based on the fish list
            include 'includes/fetch_fish.php';
            ?>
            
            <!-- Submit button -->
            <input type="submit" value="Submit">
        </form>
    </section>
</body>

</html>
