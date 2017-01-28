<?php
// Create connection
$config = parse_ini_file('config.ini');
$connuser = new mysqli('localhost',$config['username'],$config['password'],'users');
// Check connection
if ($connuser->connect_error) {
    die("Connection failed: " . $connuser->connect_error);
}
// Select username
$selected_user = $connuser->query("SELECT * FROM users WHERE username='tonito'");
while ($userrow = $selected_user->fetch_assoc()){
$user= $userrow['first'];
}
$userstatic = $user;
//start html
echo "<!DOCTYPE html>
      <head>";
//display username in title
echo "
      <title>$user's Profile</title>
      </head>";
$connuser->close();
$connrating = new mysqli('localhost',$config['username'],$config['password'],'rating');
if ($connrating->connect_error) {
    die("Connection failed: " . $connrating->connect_error);
}
$selected_rating = $connrating->query("SELECT * FROM rating WHERE for_user='$user'");
echo "<body>
      <h1>$user's Profile</h1>
      ";
if ($selected_rating->num_rows > 0){
  while ($ratingrow = $selected_rating->fetch_assoc()){
    echo "<p>Rating by $ratingrow[by_user]: $ratingrow[rating], $ratingrow[comment]</p>";
  }
}
else {
  echo "No ratings";
}

$average_rating = $connrating->query("SELECT AVG(rating) AS average_rate FROM rating WHERE for_user='$user'");
  while ($averagerow = $average_rating->fetch_assoc()){
      if ($averagerow['average_rate'] >= 0) {
        echo "<h2>This user's average rating is: $averagerow[average_rate]</h2>";
      }
      else {
        echo "<p>This user has no ratings.</p>";
      }
  }

$connrating->close();
echo "<h3>$user's Active Ads:</h3>";
$connads = new mysqli('localhost',$config['username'],$config['password'],'ads');
if ($connads->connect_error) {
    die("Connection failed: " . $connads->connect_error);
}
$selected_ad = $connads->query("SELECT * FROM ads WHERE user='$user'");
if ($selected_ad->num_rows >= 0){
while ($adrow = $selected_ad->fetch_assoc()){
  echo "<a href='#'>$adrow[title]: \$$adrow[price]</a>";
}
}
else {
  echo "This user has no active advertisements.";
}

echo
      "
      </body>
      ";


echo
      "</html>";
 ?>
