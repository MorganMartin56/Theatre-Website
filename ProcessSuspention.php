<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('db-access.php');

$username = $_POST["username"];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) 
{
  $stmt = $conn->prepare("DELETE FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);

  if ($stmt->execute()) {
    echo "<h1 class=\"results\">Suspended User Successfully</h1>";
    sleep(1);
    header("Location: account-admin.php");
  }
} 
else 
{
  echo "<h1 class=\"results\">User not found</h1>";
}

?>
</body>
</html>
