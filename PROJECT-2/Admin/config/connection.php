<?php
// connection establishing

$host = 'localhost:3306';
$username = 'root';
$upass = '';
$dbname = 'mbus';

// creating connection variable

$conn = mysqli_connect($host,$username,$upass,$dbname);

// if connection false

if(!$conn){
    die('connection unsuccessful'.mysqli_connect_error());
}
?>

