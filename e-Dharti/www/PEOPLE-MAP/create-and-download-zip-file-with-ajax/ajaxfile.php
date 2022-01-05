<?php

$zip = new ZipArchive();
$filename = "C:/wamp64/www/PEOPLE-MAP/zip/sample_xy.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
        exit("cannot open <$filename>\n");
}

$dir = 'C:/wamp64/www/PEOPLE-MAP/';

// Create zip
if (is_dir($dir)){

    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
                
            // If file
            if (is_file($dir.$file)) {
                if($file != '' && $file != '.' && $file != '..'){
                        
                    $zip->addFile($dir.$file);
                }
            }
                    
        }
        closedir($dh);
    }
}

$zip->close();

echo $filename;