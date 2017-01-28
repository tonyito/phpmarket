<?php
$user = 'tonito';
$status = 'inactive';
echo "
<html>
<head>
<title>
aikito
</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <style>
  .center {
  	text-align: center;
  }
  inline {
  	display: inline;
  }
  .bg1 {
  	padding-top: 70px;
  	padding-bottom: 70px;
  }
  </style>
</head>
<body>
";
if ($user === 'null') {
	echo "<h1>Welcome to Thrift</h1>
		<a href= '/registration.php'>Register</a> <a href= '/login.php'>Log In</a>
	";
}
else
{
	echo "
	<nav class='navbar navbar-default'>
  		<div class='container'>
    		<div class='navbar-header'>
      			<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
        				<span class='icon-bar'></span>
        				<span class='icon-bar'></span>
        				<span class='icon-bar'></span>                        
      			</button>
      			<a class='navbar-brand' href='#'>Home</a>
    		</div>
    		<div class='collapse navbar-collapse' id='myNavbar'>
      			<ul class='nav navbar-nav navbar-right'>
					<li><a href= '/user.php'>Profile</a></li> 
					<li><a href= '/Settings.php'>Settings</a></li>
				</ul>
			</div>
		</div>
	</nav>
";
} 
echo "
	
	<div class='container'>
	<div class='bg1 center'><h1>aikito</h1></div>
	</div>
	<div class='container'>
  <form>
    <div class='input-group input-group-sm'>
      <input type='text' class='form-control' placeholder='Search'>
      <div class='input-group-btn'>
        <button class='btn btn-default' type='submit'><i class='glyphicon glyphicon-search'></i></button>
      </div>
    </div>
  </form>
	</div>
	";
echo "
	</body>
	</html>
	";

?>
