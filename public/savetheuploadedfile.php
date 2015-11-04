<?php
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/');
$baseurl = "http://" . $host . $path. '/';
$folderName = 'medias';

if ($_FILES['file']['name']) {
    if (!$_FILES['file']['error']) {
        $name = md5(rand(100, 200));
        $ext = explode('.', $_FILES['file']['name']);
      
        if(!file_exists ($folderName)) {
            mkdir($folderName, 0777, true);
        }

        $filename = md5(time()). '_' . $name . '.' . $ext[1];
        $location = $_FILES["file"]["tmp_name"];
        move_uploaded_file($location, $folderName. '/' .$filename);
        echo $folderName. '/' .$filename;
    } else {
        echo  $message = 'Ooops!  Your upload triggered the following 
        error:  '.$_FILES['file']['error'];
    }
}