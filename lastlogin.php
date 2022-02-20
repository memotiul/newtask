<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $lastlogin=$_POST['lastlogin'];
    $sql="selct * from task where emial='email' and password='password'";
    $rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rs);
    $cont=mysqli_num_rows($rs);

    if($cont==0){
        echo "Invalid Email or Password";
    }
    else{
        $_SESSION['Id']=$row['Id'];
        $_SESSION['name']=$row['name'];
        header('Location:welcome.php');
    }
    $sql="update task set lastlogin=now() where id=".$SESSION['Id'];
    $rs=mysqli_query($conn,$sql);
}