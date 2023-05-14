<!-- PHP Link to head template -->
<?php require('header/head.php'); ?>
<?php require('db-access.php');

//This statement finds the posts information and joins it with the users information so that it can display the post and the user who created it
$post_id = $_GET['post_id'];
$sql = "SELECT posts.post_id, posts.post_title, posts.post_content, users.username FROM posts JOIN users ON posts.username = users.username WHERE posts.post_id = $post_id";
$result = $conn->query($sql);

if($result && $result->num_rows > 0)
{
    $row = $result->fetch_assoc();
}
else
{   
    echo "<h1 class=\"results\">0 results were found</h1>";
}

?>
<!-- this is the code that displays the forum post -->
<h1 class="fTitle"><?php echo $row['post_title']?></h1>
<div class="fBody">
<div class="post-creator">
<h1 class="fdetails"><?php echo $row['username']?></h1>
<img src="images/Icons.png" alt="ForumImage" class="fImage">
</div>
<h1 class="fcontent"><?php echo $row['post_content']?></h1>
</div>

<!--Forum for comments to be posted-->
<div>
<form action="ProcessComment.php" method="post" class="Comment">
<input type="hidden" name="post_id" value="<?php echo $row['post_id']; ?>">
<a class="CommentTitle">Add A Comment</a>
<textarea rows="4" cols="60" name="comment_data" class="CommentData" id="CommentData" required>Add your comment...</textarea>
    <input type="submit" class="SubmitB" value="Upload Comment"> 
</form>
</div>
<?php
//This finds the comments that are linked to the post using username and post_id
$sql2 = "SELECT comments.comment_id, comments.comment_data, comments.comment_date, comments.username AS comment_username FROM comments WHERE comments.post_id = $post_id";
$result2 = $conn->query($sql2);

if($result2 && $result2->num_rows > 0)
{
    while($row2 = $result2->fetch_assoc())
    {
        ?>
            <div class="fBody2">
            <h1 class="left-side2"><?php echo $row2['comment_date']?></h1><h1 class="left-side"> <?php echo $row2['comment_username']?> </h1>
            <h1 class="right-side"><?php echo $row2['comment_data']?></h1>

        </div>
        <?php
    }
}
else
{
    echo "<h1 class=\"results\">0 comments were found</h1>";
}
?>
</div>
