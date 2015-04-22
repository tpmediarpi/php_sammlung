<?php
echo "/n";
echo "Einlesen einer INI-Datei + vardump";


define ('VOGEL', 'Amsel');

// Ohne Gruppen analysieren
$ini_array = parse_ini_file("sample.ini");
print_r($ini_array);

// Mit Gruppen analysieren
$ini_array = parse_ini_file("sample.ini", TRUE);
print_r($ini_array);

?>