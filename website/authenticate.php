<!-- PHP Link to head and database template -->
<?php require('header/head.php');?>
<?php require ('db-access.php');

// authenticate user information on login
$username = $_POST['username'];
$password = $_POST['password'];

// prepare statement to find user
$stmt = $conn->prepare("SELECT user_id, username, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) 
{

    $row = $result->fetch_assoc();
    
//verify password and sets the SESSION VARIABLES
if (password_verify($password, $row['password']))
{
        $_SESSION['loggedin'] = true;
        //Uses session variables to store user information for other pagess
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];

      if($_SESSION['loggedin'] = true)
      {

        sleep(1);
        header("Location: index.php");
        exit();
    }
    } 
    //error handling
else 
{
        echo "<h1 class=\"results\">Your Password is not recognised</h1>"; }
} 
else 
{
    echo "<h1 class=\"results\">Your username is not recognised</h1>";
}

$conn->close();?>

