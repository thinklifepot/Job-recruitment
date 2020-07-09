<?php

//Your Mysql Config
$servername = "db4free.net";
$username = "thinklife20";
$password = "thinklife20";
$dbname = "recruitment";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}
