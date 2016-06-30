<?php

$file = fopen("texte.txt", 'r');
var_dump(fread($file, filesize("texte.txt")));
fclose($file);

$file = fopen("texte.log", 'a');
fwrite($file, date("Y-m-d H:i:s")." : le script a été ouvert\r\n");
fclose($file);

$content = file_get_contents("texte.log");
$content .= date("Y-m-d H:i:s")." : FPC le script a été ouvert\r\n";
file_put_contents("texte.log", $content);

//unlink("texte.log");
if(file_exists("texte.log")){
	echo "ficher log existant";
};

if(!is_dir('var')){
	mkdir('var');
}

chmod('texte.txt', 0644);

rename('texte.log', 'var/texte.log');

echo __DIR__;
echo dirname(dirname(__FILE__));
echo __FILE__;

echo date("d/m/Y à H:i:s", filemtime("var/texte.log"));

copy("var/texte.log", "texte.log.backup");

?>