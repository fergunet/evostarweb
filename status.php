<?php
$dirs=0;
$x=".";
$y=scandir($x);
foreach($y as $z){
if(is_dir($z)){
	$dirs++;
}
}
echo "Hay <b>$dirs</b> directorios en el directorio $x<hr/>";
$filename = ".";
echo "La última carpeta se creó en " . date ("F d Y H:i:s.", filemtime($filename)); 
echo "<hr/>";


$total =  disk_total_space ( $x )/(1000*1000*1000);
echo "ESPACIO TOTAL: $total GB";
echo "<hr>";
$libre =  disk_free_space ( $x )/(1000*1000*1000);
echo "ESPACIO LIBRE: $libre GB";
?>