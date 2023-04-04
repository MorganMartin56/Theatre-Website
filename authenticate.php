<?php require('php/head.php');?>


<?php

// require 'db-access.php';

// $username = $_POST['username'];
// $password = $_POST['password'];

// $sql = "SELECT user_id, username, password FROM users
// WHERE username = '$username'";

// $result = $conn->query($sql);

// if($result->num_rows == 1) {

// $row = $result->fetch_assoc();

//     if(password_verify($password, $row['password'])){
//         echo "Welcome " . $row['username'];
//         echo "You have logged in successfully";


//         $_SESSION['loggedin'] = true;
//         $_SESSION['customer_no'] = $row['customer_no'];
// }
// else
// {

// echo "Password not correct";

// }
// }
// else
// {
// echo "Your Username and password is incorrect";
// }

// $conn->close();
?>


<?php

require "db-access.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT user_id, username, password FROM users
        WHERE username = '$username'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();

    if ($row['password']){
        echo "Hi " . $row['username'];
        echo "<br>You have successfully logged in.";

        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $row['user_id'];
    } 
    else {
        echo "Password not recognised";
    }
} 
else {
    echo "Your username or password is incorrect";
}

$conn->close();

?>

