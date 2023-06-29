<?php
$host = 'localhost';
$db =   'dd';
$user = 'root';
$pwd =  '';
$conn = mysqli_connect($host,$user,$pwd,$db);
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

