<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP Upload File With Progressbar</title>
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
				body{font-family:aparajita;
	
}
	
	
table { 
  width: 100%; 
  border-collapse: collapse; 
  
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #da9d40; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 3px solid #ccc; 
  text-align: left;

}
td{

font-size:25px;
}
th{

font-size:30px;
}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
	border-top: 2px solid #eee; 
	border-left: 2px solid #da9d40; 
	border-right: 2px solid #da9d40; 
		border-bottom: 2px solid #da9d40; 
		position: relative;
		padding-left: 50%;
		
		
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "Name"; }
	td:nth-of-type(2):before { content: "reference"; }
	td:nth-of-type(3):before { content: "Address"; }
	td:nth-of-type(4):before { content: "Email"; }
	td:nth-of-type(5):before { content: "Mobile No"; }
	td:nth-of-type(6):before { content: "contents"; }
	td:nth-of-type(7):before { content: "File Name"; }
	
}

		</style>
	</header>
	<body>
		<section class="special" id="offers">
	<div class="container">
	<a href="index.php" class="btn btn-info">Go Back</a>
	<h3 class="heading">Uploaded Files:</h3>
		<div class="agileits-special-grids">
			
			<table>
	<thead>	
			
			
			
					
					
    
    <tr>
    <td>Name</td>
	<td>reference</td>
	<td>Address</td>
	<td>Email</td>
	<td>Mobile No</td>
	<td>contents</td>
	<td>File Name</td>
	</tr>
	</thead>
	<tbody>
					<?php 
						$host = "localhost";
                        $user= "postgres";
                        $pass = "postgres";
                        $db = "first";
                        $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
                         or die ("Could not connect to server\n"); 
						
						$query = "SELECT *FROM uploadfile where contents='null'";
						
						$result = pg_query($con, $query);
						
						if(pg_num_rows($result) > 0)
						{
							while($row = pg_fetch_assoc($result))
							{
								$url = $row["filepath"]."/".$row["filename"];
								
					?>
					<tr>
					    <td> <?php echo $row["name"]?></td>
						<td> <?php echo $row["reference"]?></td>
						<td> <?php echo $row["address"]?></td>
						<td> <?php echo $row["email"]?></td>
					    <td> <?php echo $row["mobile"]?></td>
						<td> <?php echo $row["contents"]?></td>
						<td><a href="<?php echo $url;?>" target="_blank" >view file</a></td>
						
                        </tr>
        
						<!--a href="<!--?php echo $url; ?>"><!--image src="<!--?php echo $url; ?>" class="images" /--></a-->
								
					<?php
							}
						}
						else
						{
					?>
						<!--p>There are no images uploaded to display.</p-->
					<?php
						}
					?>					
				
				</tbody>
</table>
</div>
			</div>
		</section>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>		
	</body>
</html>