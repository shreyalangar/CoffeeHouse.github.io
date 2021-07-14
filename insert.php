<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_error());
} 
echo "Connected successfully";

mysqli_select_db($conn,"tyit")or die(mysqli_error());

//Insert operation

$sql="insert into feedback (contact_name, contact_email, contact_no, contact_subject, contact_message) VALUES ('$_POST[contact_name]','$_POST[contact_email]','$_POST[contact_no]','$_POST[contact_subject]','$_POST[contact_message]')";
mysqli_query($conn,$sql)or die(mysqli_error($conn));

