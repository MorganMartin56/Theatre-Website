<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('db-access.php');

$post_id = $_POST["post_id"];
$post_title = $_POST["post_title"];
$post_content = $_POST["post_content"];

$stmt = $conn->prepare("SELECT * FROM posts WHERE post_id = ?");

$stmt->bind_param("i", $post_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) 
{
  $stmt = $conn->prepare("UPDATE posts SET post_title = ?, post_content = ? WHERE post_id = ?");
  $stmt->bind_param("ssi", $post_title, $post_content, $post_id);

  if ($stmt->execute()) {
    echo "<h1 class=\"results\">Modified Successfully</h1>";
    sleep(1);
    header("Location: account-admin.php");
  }
} 
else 
{
  echo "<h1 class=\"results\">Post not found</h1>";
}

?>
</body>
</html>
