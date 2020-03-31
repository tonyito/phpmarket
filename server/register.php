<?php
// Create connection
$config = parse_ini_file('config.ini');
$db = new mysqli('localhost',$config['username'],$config['password'],'users');
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if(isset($_POST["submit"])){
$first = $_POST["first"];
$last = $_POST["last"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
 
$first = mysqli_real_escape_string($db, $first);
$last = mysqli_real_escape_string($db, $last);
$email = mysqli_real_escape_string($db, $email);
$username = mysqli_real_escape_string($db, $username);
$password = mysqli_real_escape_string($db, $password);
$password = md5($password);
}
$sql = "SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$sqlu = "SELECT username FROM users WHERE username='$username'";
$resultu = mysqli_query($db,$sqlu);
$rowu = mysqli_fetch_array($resultu,MYSQLI_ASSOC);
if(mysqli_num_rows($result) == 1)
{
	echo "<p>This email address already exists on our server. Click <a href=/registration.php>here</a> to go back to the registration page and try again.<p>";
}
elseif (mysqli_num_rows($resultu) == 1) {
	echo "<p>This username already exists on our server. Click <a href=/registration.php>here</a> to go back to the registration page and try again.<p>";
}
else
{
	$query = mysqli_query($db, "INSERT INTO users (first, last, email, username, password, status)VALUES ('$first', '$last', '$email', '$username', '$password', 'active')");
 
if($query)
{
 echo "Thank You! you are now registered.";
}
}

?>