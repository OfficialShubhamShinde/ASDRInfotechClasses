<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();
echo "<script>alert('Logout successfull!')</script>";
  echo "<script>window.location.href='index.php#login-modal'</script>";

// Redirect to the login page
header("Location: index");
exit;
?>
