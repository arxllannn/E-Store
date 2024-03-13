<?php
// Start the session
session_start();

// Store the current page URL in a variable
if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
    $redirect_url = $_SERVER['HTTP_REFERER'];
} else {
    // If the referer is not available, redirect to index.php
    $redirect_url = "index.php";
}

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the current page URL
header("Location: $redirect_url");
exit;
?>
