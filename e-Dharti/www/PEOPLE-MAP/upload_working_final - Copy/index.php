<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP Upload File With Progressbar</title>
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script  type="text/javascript">
function disableField(val) {
    var exampleInputFile = document.getElementById("exampleInputFile");
    exampleInputFile.disabled = ( val.length > 0  )? true:false;
}
(function($){
	$.fn.textareaCounter = function(options) {
		// setting the defaults
		// $("textarea").textareaCounter({ limit: 100 });
		var defaults = {
			limit: 300
		};	
		var options = $.extend(defaults, options);
 
		// and the plugin begins
		return this.each(function() {
			var obj, text, wordcount, limited;
			
			obj = $(this);
			obj.after('<span style="font-size: 11px; clear: both; margin-top: 3px; display: block;" id="counter-text">Max. '+options.limit+' words</span>');

			obj.keyup(function() {
			    text = obj.val();
			    if(text === "") {
			    	wordcount = 0;
			    } else {
				    wordcount = $.trim(text).split(" ").length;
				}
			    if(wordcount > options.limit) {
			        $("#counter-text").html('<span style="color: red">0 words left tou can not enter</span>');
					limited = $.trim(text).split(" ", options.limit);
					limited = limited.join(" ");
					$(this).val(limited);
			    } else {
			        $("#counter-text").html('out of 300 Words ---' +(options.limit - wordcount)+' words left');
					
					
					
			   } 
			   
			  
			   
			});
		});
	};
})(jQuery);

</script>
  <style>
  .form-horizontal .form-group {
    margin-right: -5px;
    margin-left: -5px;
}
</style>
	</header>
	<body>
		<div class="container">			
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Upload File</button>
		
		<div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog modal-lg">
			<div class="modal-content">
        <div class="modal-header">
        
		<button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please ! Fill Form</h4>
        
		</div>
		    <div class="modal-body">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" class="form-horizontal" name="formUploadFile" id="uploadForm" action="upload.php">
						   
						   
						    <div class="form-group">
                            <label class="control-label col-sm-2" for="email">नाम/Name:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" required placeholder="Enter Name" name="name">
                            </div>
                            </div>
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="email">पता/Address:</label>
                            <div class="col-sm-10">
                            <input type="address" class="form-control" id="email" required placeholder="Enter Address" name="address">
                            </div>
                            </div>
						
						    <div class="form-group">
                            <label class="control-label col-sm-2" for="email">ईमेल/Email:</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" required placeholder="Enter email" name="email">
                            </div>
                            </div>
                            
							<div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">मोबाइल नंबर/mobile No:</label>
                            <div class="col-sm-10">          
                            <input type="mobile" class="form-control" id="pwd" required placeholder="Enter Mobile No" name="mb">
                            </div>
                            </div> 
                            
							<div class="form-group">
                            <label class="control-label col-sm-2" for="pwd"></label>
                            <div class="col-sm-10"><span class="label label-info">Note:</span>  एक को चुनें या तो फ़ाइल या पाठ क्षेत्र चुनें(please select any one  either choose file or text area)
							</div>
							</div>
							
							<div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Textarea:</label>
                            <div class="col-sm-10">          
                            <textarea rows="4" cols="93"  name="comment" class="form-control" id="valorFinal" onkeyup="disableField(this.value)"></textarea>
							<script type="text/javascript">
	                        $("textarea").textareaCounter();
	                        </script>
                            </div>
                            </div> 
							
							
							
							
							<div class="form-group">
                            <label class="control-label col-sm-2" >अपलोड करने के लिए फ़ाइल का चयन करें/Select files to upload:</label>
                            <div class="col-sm-10">          
                            <input type="file" class="form-control" id="exampleInputFile"  name="files[]" multiple="multiple">
							<p class="help-block"><span class="label label-info">Note:</span> Please, Select the only file (.docx,.doc) to upload with the size of 1000KB only.</p>
						</div>
						</div>
                        
						<div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">						
						<input type="checkbox" required name="vehicle" value="Bike"> I am not robbot<br>
						</div>
						</div>
						
						
						<br/>
                        <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">						
						<button type="submit" class="btn btn-primary" name="btnSubmit" >Submit</button>
						<a href="view.php" class="btn btn-info">Show Uploaded Files</a>
						</diV>
						</div>
					</form>
					<br/>
					</div>
					</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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
		
		<!--script type="text/javascript">
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
		</script-->
	</body>
</html>