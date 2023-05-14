<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require ('checklogin.php');?>
<?php require ('db-access.php');

//Sets the session variables
$user_id = $_SESSION['user_id'];
$comment_data = $_POST["comment_data"];
$post_id = $_POST['post_id'];
$username = $_SESSION['username'];



//Prepare statement that inserts the comment into the database with the related informaiton
$stmt = $conn->prepare("INSERT INTO comments (comment_data, user_id, username, post_id) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sisi", $comment_data, $user_id, $username, $post_id); 

if ($stmt->execute() == true)
{
    echo "<h1 class=\"results\">Comment Created Successfully</h1>";
} 
else 
{
    echo "<h1 class=\"results\">Comment wasnt successful</h1>";
}
  
?>
</body>
</html>
