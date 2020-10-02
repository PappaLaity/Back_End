<?php
//file_put_contents('demo.txt', 'salut les gens');
//var_dump(__DIR__);
$fichier = __DIR__.DIRECTORY_SEPARATOR.'demo.txt';
//file_put_contents($fichier, 'salut les gens');
file_put_contents($fichier, '! Marc comment ca va?',FILE_APPEND);
?>