<?php
require_once 'classes/Dipendente.php';
require_once 'classes/Dirigente.php';
require_once 'classes/Impiegato.php';

$luca = new Impiegato('luca','Rosi','22/12/1993','1234567890123456',2009,30,1000.00,'junior','ciao',3);
var_dump($luca);
$giulia = new Dirigente('giulia','Rosi','23-4-1900','1234567890123456',2009,2,3000.00,2,false,true);
var_dump($giulia);
echo$giulia->calcoloTredicesima(12).' ';
echo $luca->calcoloTredicesima(12);
