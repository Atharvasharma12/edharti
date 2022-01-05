<!doctype html>
<html>
    <head>
      <title>Create and download zip file with AJAX</title> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script >
            $(document).ready(function(){
                $('#download').click(function(){
                    $.ajax({
                        url: 'ajaxfile.php',
                        type: 'post',
                        success: function(response){
                            window.location = response;
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <input type='button' id='download' value='Download'>
    </body>
</html>
