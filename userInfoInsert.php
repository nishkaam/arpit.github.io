<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message=$_POST['message'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact_form ".
      "(name,email,subject,message) ".
      "VALUES ('".$name."','".$email."','".$subject."','".$message."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// PHP URL redirection test
echo " You have submitted information successfully.Your registration status will be confirmed soon </script>";
exit();
?>
<html>
<head>
done
</head>