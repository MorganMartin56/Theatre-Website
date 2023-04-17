<!-- PHP Link to head and database template -->
<?php require('header/head.php');?>
<?php require ('db-access.php');

// authenticate user information on login
$username = $_POST['username'];
$password = $_POST['password'];


$stmt = $conn->prepare("SELECT user_id, username, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();
    
//verify password
if (password_verify($password, $row['password'])){
        echo "Hi " . $row['username'];
        echo "<br>You have successfully logged in.";

        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $row['user_id'];
    } 
    //error handling
else 
{
        echo "Password not recognised"; }
} 
else 
{
    echo "Your username or password is incorrect";
}

$conn->close();?>

