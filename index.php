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
<h3>Welcome to Irai</h3>
<br>
<form action="fisherman-account.php" method="post">
        <button>Fisherman's account</button>
</form>
<?php
    check_login_errors();
?>
</body>
</section>

</html>
