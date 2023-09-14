<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'ekinptt';
$url = 'http://localhost/e-kinptt';

$conn = new mysqli($servername,$username,$password, $db);

if (!$conn)
{
    die ("Connection failed : " . mysqli_connect_error());
}
//thisis
$url = trim($url,'/');
?>
