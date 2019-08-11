<?php
$username = "kuzhithuraidioce";
$password = "aakash2014";
$dbname = "kuzhithuraidiocese";

//$username = "sxcce";
//$password = "kuzhithurai_new";
//$dbname = "kuzhithurai";
$servername = "localhost";




// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 
