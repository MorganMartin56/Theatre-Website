<!-- PHP Link to head template -->
<?php require('header/head.php');?>


<div class="ForumBox">
<form action="ProcessModifyPost.php" method="post">
<h1 class="ForumTitle">Modify Post</h1>
<br> </br>
    <label for="post_id">Post ID:</label>
    <input type="text" name="post_id" id="post_id"required/> 
    <br> </br>
    <label for="post_title">Post Title:</label>
    <input type="text" name="post_title" id="post_title"required/> 
    <br> </br>
    <textarea rows="6" cols="60" name="post_content" id="post_content" required>
    Edit Information Here...
    </textarea> 
    <br> </br>
    <input type="submit" class="SubmitB" value="Modify Post">
</form>
</div>

















</body>

</html>