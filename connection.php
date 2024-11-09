<?php
session_start();

// $servername="localhost";
// $username="u987256365_enterprise";
// $password="zL$&UZPTMqt1";
// $dbname="u987256365_enterprise";

$servername="localhost";
$username="root";
$password="bTwSI@Iv6HQ/";
$dbname="u987256365_enterprise";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) 
{
        die("Connection failed: " . mysqli_connect_error());
}
error_reporting(0);
?>