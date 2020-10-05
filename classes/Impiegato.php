<?php
require_once 'Dipendente.php';
require_once  __DIR__ . '/../traits/CalcoloTresicesima.php';

class Impiegato extends Dipendente
{

    private string $level;
    private string $mansione;
    private int $livelloRetributivo;
    /////////trait////////////////
    use CalcoloTredicesima;
    /////////costruttore//////////////////////////////////
    public function __construct(
        $nome,
        $cognome,
        $dataDiNascita,
        $cf,
        $annoCreazioneContratto,
        $durataContratto,
        $stipendioMensile,
        $level,
        $mansione,
        $livelloRetributivo
    ) {
        if($level == 'senior' || $level == 'junior'){
            $this->level = $level;
           
        }else{
            die("inserisci un livello tra juonior e senior");
        }
      
        $this->mansione = $mansione;
        $this->livelloRetributivo = $livelloRetributivo;

        parent::__construct(
            $nome,
            $cognome,
            $dataDiNascita,
            $cf,
            $annoCreazioneContratto,
            $durataContratto,
            $stipendioMensile
        );
    }
    //////triat calcolotredicesima////////////////////////////////
    function calcoloTredicesima($mesi){
        return $this->calcola($this->stipendioMensile,$mesi);
   }
    //////getters////////////////////////////////
    public function getLevel() {
        return $this->level;
    }
    public function getMansione(){
        return $this->mansione;
    }
    public function getLivelloRetributivo(){
        return $this->livelloRetributivo;
    }
    /////setters///////////////////////////////
    public function setLevel($level){
        if($level != 'junior' || $level != 'senior'){
            die("inserisci un livello tra juonior e senior");
        }
        $this->level = $level;
    }
    public function setMansione($mansione){
        $this->mansione = $mansione;
    }
    public function setLivelloRetributivo($livelloRetributivo){
        $this->livelloRetributivo = $livelloRetributivo;
    }
}
