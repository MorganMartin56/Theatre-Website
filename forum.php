<!-- PHP Link to head template -->
<?php require('header/head.php');?>

<h1 class="fTitle">Forum</h1>

<!-- Search bar input  -->
<form  method="get" action="forum.php" class="searchbar">
<input type="text" placeholder="Search Term" name="Search"></input>
<input type="submit" value="search"></input>
</form>

<!-- PHP Link to db-access -->
<?php require "db-access.php";


//This is the search functioanlity of the search bar so that it can search the database for the search term
if (isset($_GET['Search']))
{
$Search = $_GET['Search'];
$sql = "SELECT * FROM posts WHERE post_title LIKE '%$Search%'";
}
else
{
   $sql = "SELECT * FROM posts";
}


//This is the code that displays the forum posts
$result = $conn->query($sql);

if($result->num_rows > 0)
{
while ($row = $result->fetch_assoc())
{

   echo "<div class=\"ForumArea\">";
   echo "<div class=\"card\">";
   echo  "<a href=\"\">";
   echo "<a class=\"cardtitle\" href=\"\">" .$row['post_title']."</a>";
   echo "<img src=\"images/Forum Icon.png\" href=\"\" class=\"ForumIcon\" alt=\"Forum Image\">";
   echo "</a>";
   echo "</div>";
   echo "</div>";
    
}
}
//error handling
else
{
      echo "<h1 class=\"results\">0 results were found<h1>";
}

$conn->close();
?></div></div>