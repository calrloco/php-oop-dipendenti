<?php
trait CalcoloTredicesima
{

    public function calcola($stipendio, $tempoLavortato)
    {
        if ($tempoLavortato > 12 || $tempoLavortato < 1) {
            throw new Exception('Tempo lavortato non valido minimo 1 massimo 12');
        }else{
            return ($stipendio * $tempoLavortato) / 12;
        }
    }
}
