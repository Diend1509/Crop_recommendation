<?php 

$con = mysqli_connect('localhost','root','', 'do_an_tot_nghiep');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$temperature = $_GET["temperature"];
$humidity = $_GET["humidity"];
$moisture = $_GET["moisture"];

$query = "Insert into dht11 (temperature, humidity, moisture) values ('$temperature','$humidity','$moisture')";
$result = mysqli_query($con,$query);

echo "Insertion success!";

?>