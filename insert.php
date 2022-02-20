<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$ip = mysqli_real_escape_string($conn, $_REQUEST['ip']);
$os = mysqli_real_escape_string($conn, $_REQUEST['os']);
$sql = "INSERT INTO task (name, contact, email,password,ip,os) VALUES ('$name', '$contact', '$email','$password','$ip','$os')";
if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>alert('Record added successfully');location='register.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>