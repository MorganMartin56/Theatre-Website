<!-- PHP Link to head template -->
<?php require('header/head.php');?>


<div class="ForumBox">
<form action="ProcessPostCreation.php" method="post">
<h1 class="ForumTitle">Create Post</h1>
    <label for="post_title">Post Title:</label>
    <input type="text" name="post_title" id="post_title"required/> 
    <br> </br>
    <textarea rows="6" cols="60" name="post_content" id="post_content" required>
    Enter Information Here...
    </textarea> 
    <br> </br>
    <input type="submit" class="SubmitB" value="Create Post">
</form>
</div>


















</body>

</html>