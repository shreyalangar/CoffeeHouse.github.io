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

//Display operation

$res=mysqli_query($conn,"select * from feedback");
print "<html><body><br/>";
print "<b> Feedback Form </b>";
echo "<table border='1'>";
echo "<tr><td>Name</td><td>Email</td><td>Mobile No</td><td>Subject</td><td>Message</td>";
while($row=mysqli_fetch_array($res))
{
echo "<tr><td>";
echo $row['contact_name'];
echo "</td><td>";
echo $row['contact_email'];
echo "</td><td>";
echo $row['contact_no'];
echo "</td><td>";
echo $row['contact_subject'];
echo "</td><td>";
echo $row['contact_message'];
echo "</td>";
echo "</tr>";
} 
echo "</table></body></html>";
?>
