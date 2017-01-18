<?php

$directorio = 'upload_images';
$fotos = scandir($directorio);
echo json_encode($fotos);



// foreach($fotos as $foto){
// if(($foto != ".") && ($foto!=".."))
//     echo "<img src='".$directorio."/".$foto."'/>";
// }