<?php
    // the $_POST[] array will contain the passed in filename and data
    // the directory "data" is writable by the server (chmod 777)
    // the file path needs to be adjusted accordingly!
    // original $filename = "data/".$_POST['filename'];
    //$filename = $_POST['filename'];
    //$data = $_POST['filedata'];
    // write the file to disk
    //file_put_contents($filename, $data);

    function file_force_contents($dir, $contents){
        $parts = explode('/', $dir);
        $file = array_pop($parts);
        $dir = '';
        foreach($parts as $part)
            if(!is_dir($dir .= "/$part")) mkdir($dir);
        file_put_contents("$dir/$file", $contents);
    }
?>
