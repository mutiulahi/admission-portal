<?php
$dbconnect = mysqli_connect("localhost", "root", "", "fountainAdmissionP");
if(mysqli_connect_error($dbconnect)){
    die("Error connecting to database".mysqli_connect_error());
}

?>