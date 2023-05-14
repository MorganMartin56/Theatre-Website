<!-- Checks for user so users have to login prior visting a page -->
<?php
// Initialize the session and checks login status
 if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
 {
     header ("Location: login.php");
     exit;
 }

 ?>