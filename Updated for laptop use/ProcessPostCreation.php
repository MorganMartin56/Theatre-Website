<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('db-access.php');


$post_title = $_POST["post_title"];
$post_content = $_POST["post_content"];

$stmt = $conn->prepare("INSERT INTO posts (post_title, post_content)
VALUES (?,?)");

$stmt->bind_param("ss", $post_title, $post_content);

if ($stmt->execute() == true){
  echo "Post created successfully.";
} 
else 
{
  echo "Something went wrong.";
}
?>
</body>
</html>