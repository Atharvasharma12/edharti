<?php 
$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "peoplemap";
 
 
		
// $db=pg_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
     $con =  pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");
if(isset($_GET["submit"]))
	{	
	 $fullname = $_GET['name']; 
	 
     $email = $_GET['email']; 
     $password = $_GET['pass']; 
     $organizaname=$_GET['oname'];
     $role=$_GET['role'];
	 
	 //if(!empty($_GET['email'])) 
	 
	 //{ 
	 
	 $query = pg_query($con,"SELECT * FROM registration WHERE email = '$_GET[email]' AND password = '$_GET[pass]'"); 
	 
	 if(!$row = pg_fetch_array($query))
     { 
	 $query = "INSERT INTO registration (fullname,email,password,organizationname,role) VALUES ('".$fullname."','".$email."','".$password."','".$organizaname."','".$role."')"; 
   $data = pg_query($con, $query);		
   
   if($data) 
 { 
include "index.html";
echo "YOUR REGISTRATION IS COMPLETED...";
 }
 
	 } 
	 else 
	 {
		 
		 include "index.html";
		 echo '<script language="javascript">';
        echo 'alert("SORRY...YOU ARE ALREADY REGISTERED USER...Just Login Now")';  //not showing an alert box.
        echo '</script>';
		
		 //echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		 
	 }
	}
	 
		
		 ?>

