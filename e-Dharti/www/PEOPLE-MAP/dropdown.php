<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>JQuery Popup | JQuery Slide Popup | Demo</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
     
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript">
function openOffersDialog(x) {
    $('#overlay').fadeIn('fast', function() {
        $(boxpopup).css('display','block');
        $(boxpopup).animate({'left':'30%'},500);
         
        $('#content').html(x);
    });
}
 
 
function closeOffersDialog(prospectElementID) {
    $(function($) {
        $(document).ready(function() {
            $('#' + prospectElementID).css('position','absolute');
            $('#' + prospectElementID).animate({'left':'-100%'}, 500, function() {
                $('#' + prospectElementID).css('position','fixed');
                $('#' + prospectElementID).css('left','100%');
                $('#overlay').fadeOut('fast');
            });
        });
    });
}    
    </script>
</head>
 
<body onload="openOffersDialog('Audi');">
<div id="wrapper">
<div id="overlay" class="overlay"></div>
<select onchange="openOffersDialog(this.value);">
  <option value="volvo">Volvo</option>  
  <option value="saab">Saab</option>  
  <option value="vw">VW</option>  
  <option value="audi" selected>Audi</option>                
</select>
 
<div id="boxpopup" class="box">
    <a onclick="closeOffersDialog('boxpopup');" class="boxclose"></a>
    <div id="content">
    This is popupbox. This is popupbox. This is popupbox. This is popupbox. 
    </div><!--end of content -->
</div><!--end of popupbox -->
 
</div><!--end of wrapper -->
</body>
</html>
