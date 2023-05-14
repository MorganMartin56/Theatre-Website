<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('db-access.php');

//Sets the session variables
$username = $_SESSION['username'];
$post_title = $_POST["post_title"];
$post_content = $_POST["post_content"];

$stmt = $conn->prepare("INSERT INTO posts (post_title, post_content, username) VALUES (?, ?, ?)");


$stmt->bind_param("sss", $post_title, $post_content, $username);

if ($stmt->execute() == true)
  {
    echo "<h1 class=\"results\">Post Created Succesfully</h1>";
  } 
  else 
  {
    echo "<h1 class=\"results\">Post was not created/h1>";
  }
  
?>
</body>
</html>