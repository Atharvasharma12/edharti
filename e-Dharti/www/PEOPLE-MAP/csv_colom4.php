
<?php
     $headerValues  = array();
     $counter = 0;
     $row = 0;
     if (($handle = fopen("H:\data\sample.csv", "r")) !== FALSE) {
        echo '<table class="tbl">'; 
        while(($data = fgetcsv($handle, 1000, ",")) !== false)
        {  
            // You need to grab the header values on first iteration
            if ($counter == 0) {
              // store them in an array
              $headerValues = $data;
              // increment counter
              $counter++;                  
            }                

          $col    = count($data); 

            echo '<tr>';
            for ($c=0; $c < $col; $c++) {
                // grab column name here
             echo  $headerName = $headerValues[$c];
              /*  $cell   = $data[$c];
                $colnum = $c + 1;
                if( $row == 0)
                {                    
                    echo "<td  style='text-transform:uppercase;'><br><br>". 
                            "<b>{$headerName}</b></td>"; 
                }
                else
                { 
                    echo "<td>{$cell} = {$headerName}</td>";  //{$row} = {$colnum} 
                } 
            }
            echo '</tr>'; 
           */ $row++; 

        }  

        //echo '</table>';
    }}
    ?>  