<?php
$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "first";

	if(isset($_POST["btnSubmit"]))
	{		

	
	      $name = $_POST['name'];
		  $add  = $_POST['address'];
		  $email=$_POST['email'];
		  $mb   =$_POST['mb'];
		  $errors = array();
		
		$extension = array("doc","docx","txt");
		
		$bytes = 1024;
		//$allowedKB = 100;
		$allowedKB = 10000;
		$totalBytes = $allowedKB * $bytes;
		$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n"); 
		
			if(isset($_FILES["files"])==true && ($_POST['comment'])==false){
		
			foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{
			//$uploadThisFile = true;
			
			$file_name=$_FILES["files"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];
			
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(!in_array(strtolower($ext),$extension))
			{
				array_push($errors, "File type is invalid. Name:- ".$file_name);
				$uploadThisFile = false;
			}				
			
			if($_FILES["files"]["size"][$key] > $totalBytes){
				array_push($errors, "File size must be less than 10000KB. Name:- ".$file_name);
				$uploadThisFile = false;
			}
			
			if(file_exists("Upload/".$_FILES["files"]["name"][$key]))
			{
				array_push($errors, "File is already exist. Name:- ". $file_name);
				$uploadThisFile = false;
			}
			
			
				$filename=basename($file_name,$ext);
				$newFileName=$filename.$ext;				
				move_uploaded_file($_FILES["files"]["tmp_name"][$key],"Upload/".$newFileName);
				
				$query = "INSERT INTO uploadfile(name,address,email,mobile,contents,filepath,filename) VALUES('".$name."','".$add."','".$email."','".$mb."','null','upload','".$newFileName."')";
				
				pg_query($con, $query);			
			}
		}	
		if(isset($_FILES["files"])==false && ($_POST['comment'])==true){
				
				$content=$_POST['comment'];
				$query = "INSERT INTO uploadfile(name,address,email,mobile,contents,filepath,filename) VALUES('".$name."','".$add."','".$email."','".$mb."','".$content."','null','null')";
				
				pg_query($con, $query);			
			}
			
		
			
	
		
	/*	$count = count($errors);
		
		if($count != 0){
			foreach($errors as $error){
				echo $error."<br/>";
			}
		}		
	*/
	
	}
	/*$result=  pg_query($con,"SELECT address FROM uploadfile where name='$name'");
    $row=  pg_affected_rows($result);
	echo $row['address'];
	*/
	?>
	
  
   
	<?php
	pg_close($con);
	?>