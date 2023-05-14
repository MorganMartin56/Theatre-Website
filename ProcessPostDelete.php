<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('db-access.php');



$post_id = $_POST["post_id"];
$stmt = $conn->prepare("SELECT * FROM posts WHERE post_id = ?");

$stmt->bind_param("i", $post_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) 
{
  $stmt = $conn->prepare("DELETE FROM posts WHERE post_id = ?");
  $stmt->bind_param("i", $post_id);

  if ($stmt->execute()) {
    echo "<h1 class=\"results\">Deleted Successfully</h1>";
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
