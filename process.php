<?php
$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];
$nito = $_POST['nito'];
$photpho = $_POST['photpho'];
$kali = $_POST['kali'];
$ph = $_POST['ph'];
$rainfall = $_POST['rainfall'];

$output = shell_exec(escapeshellcmd("py py_process.py $nito $photpho $kali $temperature $humidity $ph $rainfall"));
echo $output;
echo ' là cây trồng phù hợp';
?>

<br>
<a href="index.php">Return Home</a>
