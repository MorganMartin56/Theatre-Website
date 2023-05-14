<!--Checks if user is logged in or out for nav elements (Acts as a middle man page)-->
<?php session_start();

if(isset($_SESSION['loggedin'])) 
{
    include 'head-logged-in.php';
} 
else 
{
    include 'head-logged-out.php';
}


?>




