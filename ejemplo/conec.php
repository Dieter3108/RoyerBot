<?php

$host = 'localhost';
$db =   'video';
$user = 'root';
$pwd =  '';
$conn = mysqli_connect($host,$user,$pwd,$db);
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}

