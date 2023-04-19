<!-- Checks for user so users have to login prior visting a page -->
<?php

 if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
 {
     header ("Location: login.php");
     exit;
 }

 ?>