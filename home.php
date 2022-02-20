<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
    background-color:#87CEFA ;
    background-image: url(https://st3.depositphotos.com/13324256/16702/i/1600/depositphotos_167020894-stock-photo-summer-forest-at-sunset.jpg);
}
.blink{

text-align: center;
line-height: 50px;
margin:centre;
}
span{
font-size: 25px;
font-family: cursive;
color: white;
animation: blink 1s linear infinite;
}
@keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Assignment</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="register.php" data-toggle="modal">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="blink"><span>Total No.of Registration: <?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "mydb";
								   
								$conn = mysqli_connect($servername, 
								    $username, $password, $dbname);
								   
								$sql = "SELECT count(*) FROM task ";
								$result = $conn->query($sql);

								while($row = mysqli_fetch_array($result)) {
								    echo  $row['count(*)'];
								    echo "<br />";
								}
								$conn->close();
								  
								?> </span>
		</div>
</body>
</html>