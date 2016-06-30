<?php

$file = fopen("texte.txt", 'r');
var_dump(fread($file, filesize("texte.txt")));
fclose($file);

$file = fopen("texte.log", 'a');
fwrite($file, date("Y-m-d H:i:s")." : le script a été ouvert\r\n");
fclose($file);



?>