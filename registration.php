<?php
echo "
<!DOCTYPE html>
<head>
<title>
Registration
</title>
</head>

<body>
<h1>New User Registration</h1>
<form action='/postregistration.php' method='post'>
First Name: <input type='text' name='first'><br>
Last Name: <input type='text' name='last'><br>
Username: <input type='text' name='username'><br>
Password: <input type='password' name='password'><br>
<input type='submit'>
</form>
";