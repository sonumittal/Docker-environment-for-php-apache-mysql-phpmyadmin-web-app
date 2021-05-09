<?php
$host = 'db';
$username = 'root';
$password = 'example';
$dbname = 'rms';
$connection=mysqli_connect($host,$username,$password,$dbname) or die('could not connect to mysql') or die('something went wrong');
?>