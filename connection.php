<?php
// Create connection
$config = parse_ini_file('config.ini');
$db = new mysqli('localhost',$config['username'],$config['password'],'users');
?>