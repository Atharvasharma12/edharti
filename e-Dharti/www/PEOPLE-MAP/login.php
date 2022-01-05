<?php

session_start(); 

$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "peoplemap";
$con =  pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n");

if(isset($_GET["email"], $_GET["password"])) 
	{	
$email = $_GET['email'];
$password = $_GET['password'];



   // $password = md5($password);
    $query = pg_query($con,"SELECT fullname, email, password FROM registration WHERE email = '".$email."' AND  password = '".$password."'");
     $rows = pg_num_rows($query);
     if ($rows == 1) {
			$_SESSION["email"] = $email; 
			include "home.php";
			
        }
		
        else
        {
            
			include "index.html";
			echo '<script language="javascript">';
          echo 'alert("SORRY...YOU ARE ALREADY REGISTERED USER...Just Login Now")';  //not showing an alert box.
          echo '</script>';
        }
	}
?>