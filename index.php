<?php
require_once 'classes/Dipendente.php';
require_once 'classes/Dirigente.php';
require_once 'classes/Impiegato.php';


try {
    $luca = new Impiegato('luca', 'Rosi', '22/12/1993', '1234567890123456', 2009, 30, 1000.00, 'junior', 'ciao', 3);
} catch (Exception $e) {
    echo 'eccezione: ' . $e->getMessage();
}

var_dump($luca);
try {
    $giulia = new Dirigente('giulia', 'Rosi', '23-4-1900', '1234567890123456', 2009, 2, 3000.00, 2, true, true);
} catch (Exception $e) {
    echo 'eccezione: ' . $e->getMessage();
}
var_dump($giulia);
try {
    echo $giulia->calcoloTredicesima(12) . ' ';
} catch (Exception $e) {
    echo 'eccezione: ' . $e->getMessage();
}
try {
    echo $luca->calcoloTredicesima(12).'<br>';
} catch (Exception $e) {
    echo 'eccezione: ' . $e->getMessage();
}
echo $luca.'</br>';

echo $giulia;
