<?php

$zip = new ZipArchive();
$filename = "zip/css.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
        exit("cannot open <$filename>\n");
}

$dir = 'archive/';

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