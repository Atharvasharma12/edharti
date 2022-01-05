<?php 
$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "peoplemap";
 
$con =  pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start(); 
$email=$_SESSION["email"];
$query = pg_query($con,"SELECT workspacesatus FROM registration WHERE email = '$email'"); 
$value = pg_fetch_object($query);
$zero=$value->workspacesatus;
//echo $zero;
if($zero==0){
	//echo "yes";
	echo '<script>window.location.href = "workspace.php";</script>';
           }
		   
else {
	//echo "no";
			   echo '<script>window.location.href = "datastoreform.html";</script>';
			   
     }
	 
?>