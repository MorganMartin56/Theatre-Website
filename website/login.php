<!-- PHP Link to head template -->
<?php require('header/head.php'); ?>


<!-- This is the login forum box -->
<div class="ForumBox">
    <h1 class="ForumTitle">Login User</h1>
    <form action="authenticate.php" method="post">
        <label for="username">Username:</label>
        <input type="text" placeholder="John Doe" name="username" id="username" required value=""/>
        <br> </br>
        <label for="password">Password:</label>
        <input type="password" placeholder="P@SSW0RD" name="password" id="password" required />
        <br> </br>
        <input type="submit" value="submit">
    </form>
</div>

</body>

</html>