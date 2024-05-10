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
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="password" placeholder="Password">
        <input type="text" name="userName" placeholder="userName">
        <input type="text" name="userType" placeholder="userType">
        <button>Signup</button>
    </form>
    <br>
    <br>
    <div>
        <form action="search.php" method="post">
        <input type="text" name="userSearch" placeholder="userName">
            <button>Search a user</button>
        </form>
    </div>
</body>
</section>

</html>
