<?php
trait CalcoloTredicesima{
public function calcola($stipendio,$tempoLavortato){
    return ($stipendio * $tempoLavortato) / 12;
}
}