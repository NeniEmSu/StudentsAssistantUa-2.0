<?php

// for the location of my server
$servername = "localhost";
$dBUsername = "root";
$dBpassword = "";
$dBName = "studentsassistantua";

// Running a connection
$conn = mysqli_connect($servername, $dBUsername, $dBpassword, $dBName);

// Check if connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
