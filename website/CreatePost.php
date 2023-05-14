<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('AdminAccess.php');?>
<!-- create post forum-->
<div class="ForumBox">
<form action="ProcessPostCreation.php" method="post" class="testw">
<h1 class = "ForumTitle">Create Post</h1>
    <label for="post_title">Post Title:</label>
    <input type="text" name="post_title" id="post_title" required/> 
    <br> </br>
    <textarea  class="Comment" rows="6" cols="60" name="post_content" id="post_content" placeholder="Content Here..." required>
    </textarea> 
    <br> </br>
    <input type="submit" class="SubmitB" value="Create Post">
</form>
</div>


















</body>

</html>