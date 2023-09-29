<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('db-access.php');

$post_id = $_POST["post_id"];
$post_title = $_POST["post_title"];
$post_content = $_POST["post_content"];

$stmt = $conn->prepare("UPDATE posts post_title, post_content WHERE post_id = ?)
VALUES (?,?)");

$stmt->bind_param("sss", $post_title, $post_content);

if ($stmt->execute() == true){
  echo "Post Edited successfully.";
} 
else 
{
  echo "Something went wrong.";
}
?>
</body>
</html>