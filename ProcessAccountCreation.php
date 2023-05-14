<?php require('header/head.php');?>
<?php require('db-access.php');?>

<?php 
//initialize variables
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmpassword'];
$isValid = true;

//password validation
if($password != $confirmPassword)
{
        echo "<h1 class=\"results\">Passwords do not match<a href='create account.php'>Go Back</a></h1></br>";
        $isValid = false;
}
if (strlen($password) < 8)
{
        echo "<h1 class=\"results\">Password must be at least 8 characters<a href='create account.php'>Go Back</a></h1></br>";
        $isValid = false;
}

//Checks if username is already taken
$stmt = $conn->prepare("SELECT username FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0)
{
        echo "<h1 class=\"results\">Username is already taken<br><a class=\"GoBack\" href='create account.php'>Go Back</a></br></h1>";
        $isValid = false;
}

//Creates a new user
if($isValid == true)
{
//hashes password and sends to database
$hash = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

//bind parameters
$stmt->bind_param("sss", $username, $email, $hash);

//Execute
if($stmt->execute() == true)
{
        $lastId = $stmt->insert_id;     
        echo "<h1 class=\"results\">New User created successfully</div> ";
}

//error handling
else
{
        echo "<h1 class=\"results\">Invalid User information was not inputted please try again</h1>";
}}
$conn->close();?>