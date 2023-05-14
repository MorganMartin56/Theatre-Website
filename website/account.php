<!-- PHP Link to head template -->
<?php require('header/head.php'); ?>
<!-- PHP checks for login -->
<?php require('checklogin.php'); ?>
<!-- PHP Link DB -->
<?php require('db-access.php'); ?>

<?php
//This finds the user with Admin status and redirects
$isAdmin = $_SESSION['isAdmin'];
$stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) 
{
    $row = $result->fetch_assoc();
    if ($row['isAdmin'] == 1) 
    {
        header("location: account-admin.php");
    } 
    else 
    {
        header("location: account-user.php");
    }
}

$conn->close();
?>
