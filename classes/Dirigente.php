<?php
require_once 'Dipendente.php';
require_once  __DIR__ . '/../traits/CalcoloTresicesima.php';
class Dirigente extends Dipendente
{

    private int $fascia;
    private bool $cartaAziedale;
    private bool $autista;
    /////////trait////////////////
    use CalcoloTredicesima;
    ///////costruttore //////////////////////////////////
    public function __construct(
        $nome,
        $cognome,
        $dataDiNascita,
        $cf,
        $annoCreazioneContratto,
        $durataContratto,
        $stipendioMensile,
        $fascia,
        $cartaAziedale,
        $autista
    ) {
        if ($fascia > 2 || $fascia < 1) {
            throw new Exception("Fascia deve essere un numero fra 1 e 2");
        }
        $this->fascia = $fascia;
        if (
            $cartaAziedale == true || $cartaAziedale == false ||
            $autista == true || $autista == false
        ) {
            $this->cartaAziedale = $cartaAziedale;
            $this->autista = $autista;
        } else {
            throw new Exception('Inserisci valore Booleano');
        }


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
    //////funzione overraid trait///////////////
    function calcoloTredicesima($mesi)
    {
        return $this->calcola($this->stipendioMensile, $mesi);
    }
    //////getter////////////////////////////////
    public function getFascia()
    {
        return $this->fascia;
    }
    public function getCartaAziendale()
    {
        return $this->cartaAziedale;
    }
    public function getAutista()
    {
        return $this->autista;
    }
    /////setter////////////////////////////////
    public function setFascia($fascia)
    {
        if ($fascia > 2 || $fascia < 1) {
            throw new Exception("Fascia deve essere un numero fra 1 e 2");
        }
        $this->fascia = $fascia;
    }
    public function setCartaAziendale($cartaAziedale)
    {
        if ($cartaAziedale != true || $cartaAziedale != false) {
            throw new Exception("Inserire valore booleano");
        }
        $this->$cartaAziedale = $cartaAziedale;
    }
    public function setAutista($autista)
    {
        if ($autista != true || $autista = !false) {
            throw new Exception("Inserire valore booleano");
        }
        $this->autista = $autista;
    }
    public function __toString(){
        return parent::__toString().' '. 'fascia: '.$this->fascia.' carta: '.$this->cartaAziedale.' autista: '.$this->autista.'<br>'.'<br>';
    }
}
