<?php

$firstname = $_POST["Fname"];
$lastname = $_POST["Lname"];
$email = $_POST["Email"];
$mobile = $_POST["Mobile"];
$message = $_POST["Message"];

$conn = mysqli_connect("localhost" , "root" , "" ,"contact_form" ) or die ("conn failed");

$sql = "INSERT INTO contact_table(First_name , Last_name , Email , Mobile , Message  ) VALUES ('{$firstname}','{$lastname}','{$email}','{$mobile}','{$message}')";
$result = mysqli_query($conn , $sql) or die ("query failed");

header ("location: http://localhost/SahyadriTrekkers/SahyadriTrekkers/contactform.php");

mysqli_close($conn);

?>