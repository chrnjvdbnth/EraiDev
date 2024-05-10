<?php
    require_once 'includes/config-session.inc.php';
    require_once 'includes/login-view.inc.php';
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
<h3>Manage Fisherman</h3>
<br>
<a href='fisherman-add-transaction.php'>
    <button>Add Transaction</button>
</a>
<a href='fisherman-edit-transaction.php'>
    <button>Edit Transaction</button>
</a>
<a href='fisherman-manage-expense.php'>
    <button>Manage Expense</button>
</a>
</body>
</section>
</html>
