<?php

echo "<pre>";
var_dump($_POST);
echo '</pre>';


echo '<pre>';
var_dump($_FILES);
echo '</pre>';


//file_put_contents('archivo',json_encode($_FILES));



$fileinfo = $_FILES['kdjdhjdjdjdjdj'];

if(preg_match("/^image/$",$fileinfo['type']))

    copy($fileinfo['tmp_name'],'upload_images/'.$fileinfo['name']);

else

    header("Status: 414 Not accepted");