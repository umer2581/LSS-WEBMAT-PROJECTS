<?php
$host='localhost:3306';
$username='root';
$password='';
$dbname='mbus-courier';
// connecting variable
$conn = mysqli_connect($host,$username,$password,$dbname);
// if connection false
if(!$conn){
    die('connection falied'.mysqli_connect_error());
}

?>