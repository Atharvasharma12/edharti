
<?php
    $handle = @fopen("H:\data\sample.csv", "r");
    if ($handle) 
    {
        while (($buffer = fgets($handle)) !== false) 
        {
            $array=explode(",",$buffer);
            print_r($array);
            // You have your array at this point.
        }
        if (!feof($handle)) 
        {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($handle);
    }
?>