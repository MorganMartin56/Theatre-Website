<!-- Checks for user so users have to login prior visting a page -->
<?php
$isAdmin = $_SESSION['isAdmin'];

 if ($isAdmin == 1)
 {
     header ("Location: account-admin.php");
     exit;
 }
 else
 {
    header ("Location: account.php");
    exit;
 }

 ?>