<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('AdminAccess.php');?>
<!-- delete forum post-->
<div class="ForumBox">
<form action="ProcessPostDelete.php" method="post" class="testw">
<h1 class="ForumTitle">Delete Post</h1>
<br> </br>
    <label for="post_id">Post ID:</label>
    <input type="text" name="post_id" id="post_id"required/> 
    <br> </br>
     <!--onclick function to confirm deletion-->
    <input type="submit" class="SubmitB" value="Delete Post" onclick="Rsure()">
</form>
</div>

















</body>

</html>