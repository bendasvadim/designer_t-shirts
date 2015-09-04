<?php

function base64_to_jpeg($base64_string, $output_file) {
    $ifp = fopen($output_file, "wb");
    $data = explode(',', $base64_string);
    fwrite($ifp, base64_decode($data[1])); 
    fclose($ifp); 
    return $output_file; 
}


if (!empty($_POST))
{
    //print_r($_POST);
    
    $image      = str_replace('data:image/png;base64,', '', $_POST['image']);
    $generated  = str_replace('data:image/png;base64,', '', $_POST['generated']);
    $generated = "data:image/png;base64,".$generated;
    
    base64_to_jpeg($image, dirname(__FILE__)."\\result\\image.jpg");
    base64_to_jpeg($generated, dirname(__FILE__)."\\result\\generated.jpg");
    
}