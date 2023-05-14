<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('AdminAccess.php');?>
<!--modify forum post-->
<div class="ForumBox">
<form action="ProcessPostModify.php" method="post" class="testw">
<h1 class="ForumTitle">Modify Post</h1>
<br> </br>
    <label for="post_id">Post ID:</label>
    <input type="text" name="post_id" id="post_id"required/> 
    <br> </br>
    <label for="post_title">Post Title:</label>
    <!--Verifies changes for each of the fields-->
    <input type="text" name="post_title" id="post_title" onchange="CheckValue(this.value)" required/> 
    <br> </br>
    <textarea class="Comment" rows="6" cols="60" name="post_content" id="post_content" onchange="CheckValue(this.value)" required>Edit Information Here...
    </textarea> 
    <br> </br>
    <input type="submit" class="SubmitB" value="Modify Post">
</form>
</div>

















</body>

</html>