<?php require('header/head.php');?>
<?php require ('db-access.php');

//grabs session of username
$username = $_SESSION['username'];

//sets username cookie
$cookie = "user";
$cookie_value = $username;

setcookie($cookie, $cookie_value); 
?>


<?php
//checks if cookie is setq
if(!isset($_COOKIE[$cookie])) 
{
    echo "<h1 class=\"results\">Cookie named '" . $cookie . "' is not set!</h1>";
} 
else 
{
    echo "<h1 class=\"results\">Your Username is: " . $_COOKIE[$cookie] . "</h1>";
}
?>
    