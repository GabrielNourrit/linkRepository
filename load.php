<?php
$ENDLINE = ';;;';
$FILE = '///';
$LINK = "\\\\\\";

 $ressource = fopen('save.txt', 'r');
 $file =  fread($ressource, filesize('save.txt'));

 $lines = explode($ENDLINE,$file);

$test="";

foreach ($lines as $l){
	
    $test = $test.$l;
}

echo $test;

?>