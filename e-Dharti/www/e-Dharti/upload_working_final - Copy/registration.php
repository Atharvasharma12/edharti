<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration..</title>
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  .form-horizontal .form-group {
    margin-right: -5px;
    margin-left: -5px;
}



@media (min-width: 768px) {
  alert {
    width: 66.66666666%;
    margin-left: 16.666666%;
  }
}
@media (min-width: 992px) {
  alert {
    width: 50%;
    margin-left: 25%;
  }
}
@media (min-width: 1200px) {
  alert {
    width: 33.33333%;
    margin-left: 33.33333%;
  }
}


</style>




	</header>
	<body>
		<div class="container">			
			<div class="page-header">
				<h3>Please Registere Here..</h3>
				<p style="color:red;">ध्यान दें / Note:- 
सभी * फील्ड अनिवार्य  है। / all * fields are menditory.</p>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" class="form-horizontal" name="registration" id="registration" action="registration.php">
						   
						   
						    <div class="form-group" >
                            <label class="control-label col-sm-2" for="name"> पूरा नाम / Full Name<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="name"  placeholder="पूरा नाम" name="name" required >
                            </div>
                            </div>
							
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="designation"> पदनाम / Designation<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="designation" placeholder="पदनाम" name="designation" required>
                            </div>
                            </div>
							
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="centerunit"> केंद्र -इकाई/ Center-Unit<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="centerunit" placeholder="केंद्र -इकाई" name="centerunit" required>
                            </div>
                            </div>
							
							
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="officeadd">कार्यालय का पता / office address<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="officeadd" placeholder="कार्यालय का पता" name="officeadd" required> 
                            </div>
                            </div>
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="phone">फ़ोन /  Phone</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" placeholder="फ़ोन" name="phone">
                            </div>
                            </div>
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="mob">मोबाइल /  Mobile<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
                            <input type="mobile" class="form-control" id="mob" placeholder="मोबाइल" name="mob" pattern="^\d{10}$" required>
                            </div>
                            </div>
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="fax">फैक्स/  Fax</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="fax" placeholder="फैक्स" name="fax" required>
                            </div>
                            </div>
							
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="pr"> लेख  प्रस्तुतकर्ता/ paper representer<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
							
							<input type="radio" name="pr" value=""  required > <b> हाँ / YES </b> &nbsp; &nbsp; &nbsp;
                            <input type="radio" name="pr" value=""> <b> नहीं /  NO</b><br>
							</div>
                            </div>
                            
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="title">लेख का  शीर्षक/  Title of the paper</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="लेख का  शीर्षक" name="title" >
                            </div>
                            </div>
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="accom_r">क्या आवास वांछित  है/  Acommodation Required<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
                           <input type="radio" name="accom_r" value=""  required  > <b> हाँ/ YES </b> &nbsp; &nbsp; &nbsp;
                            <input type="radio" name="accom_r" value=""> <b>नहीं / NO</b><br> 
                            </div>
                            </div>
							
							
						
						    <div class="form-group">
                            <label class="control-label col-sm-2" for="arrival_detail">जोधपुर में आगमन की  तिथि व समय  /  Date and Time of Arrival at Jodhpur<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="arrival_detail" placeholder="जोधपुर में आगमन की  तिथि व समय" name="arrival_detail" required>
                            </div>
                            </div>
                            
							 <div class="form-group">
                            <label class="control-label col-sm-2" for="pickup">पिक अप स्थान  /  pick up point<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pickup" placeholder="पिक अप स्थान " name="pickup" required>
                            </div>
                            </div>
    
	<div class="form-group">
                            <label class="control-label col-sm-2" for="Departure_detail">जोधपुर से प्रस्थान की  तिथि और समय  /  Date and Time of Departure from Jodhpur<p style="color:red;">*</p></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="Departure_detail" placeholder="जोधपुर से प्रस्थान की  तिथि और समय" name="Departure_detail" required>
                            </div>
                            </div>
							
							

                        <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">						
						<button type="submit" class="btn btn-primary"  name="Submit" onclick="myFunction()" > रजिस्टर/ Register</button><br></br>
						

						
						
					 
									
					</div>
					</div>
					</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){			
				
				var divProgressBar=$("#divProgressBar");
				var status=$("#status");
				
				$("#uploadForm").ajaxForm({
					
					dataType:"json",
					
					beforeSend:function(){
						divProgressBar.css({});
						divProgressBar.width(0);
					},
					
					uploadProgress:function(event, position, total, percentComplete){
						var pVel=percentComplete+"%";
						divProgressBar.width(pVel);
					},
					
					complete:function(data){
						status.html(data.responseText);
					}
				});
			});
		</script>
	</body>
</html>