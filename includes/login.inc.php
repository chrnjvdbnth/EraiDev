<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'login-model.inc.php';
    require_once 'login_controller.inc.php';
    
    // ERROR HANDLERS
    $errors = [];
    
    // Validate empty inputs
    if (empty($username) || empty($password)) {
        $errors["empty_input"] = "Fill in all fields!";
    }
    
    // Fetch user data from the database
    $result = get_user($pdo, $username);
    
    // Validate username
    if (!$result) {
        $errors["login_incorrect"] = "Incorrect login info.";
    }
    
    // Validate password
    elseif (!password_verify($password, $result["password"])) {
        $errors["login_incorrect"] = "Incorrect login info.";
    }
    
    // Initialize session and handle errors
    session_start();
    
    if (!empty($errors)) {
        $_SESSION['errors_login'] = $errors;
        header("Location: ../index.php");
        exit();
    }
    
    // Create and set session ID
    $session_id = session_create_id() . "_" . $result["username"];
    session_id($session_id);
    
    // Set session variables
    $_SESSION["username"] = htmlspecialchars($result["username"]);
    $_SESSION["last_regeneration"] = time();
    
    // Redirect to success page
    header("Location: ../index.php?login=success");
    
    // Clean up resources
    $pdo = null;
    $stmt = null;
    exit();
} else {
    // Redirect to home if not POST request
    header("Location: ../index.php");
    exit();
}
?>
