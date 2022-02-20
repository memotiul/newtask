<?php
session_start(); 
$error = ''; 
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{

$email = $_POST['email'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "mydb");
$query = "SELECT email, password from task where email=? AND password=? LIMIT 1";

$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->bind_result($email, $password);
$stmt->store_result();
if($stmt->fetch()) 
$_SESSION['login_user'] = $email; 
header("location: home.php"); 
}
mysqli_close($conn); 
}
?>