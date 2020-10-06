<?php
class Dipendente
{
    private string $nome;
    private string $cognome;
    private string $dataDiNascita;
    private string $cf;
    private int $annoCreazioneContratto;
    private int $durataContratto;
    protected float $stipendioMensile;

    public function __construct(
        $nome,
        $cognome,
        $dataDiNascita,
        $cf,
        $annoCreazioneContratto,
        $durataContratto,
        $stipendioMensile
    ) {
        if (empty($nome) && strlen($nome < 3)) {
            throw new Exception("Nome non Valido");
        }
        $this->nome = $nome;
        if (empty($cognome) && strlen($cognome < 3)) {
            throw new Exception("cognome non Valido");
        }
        $this->cognome = $cognome;
        $this->dataDiNascita = $dataDiNascita;
        if (strlen($cf) != 16) {
            throw new Exception("codice fiscale inserito non valido");
        }
        $this->cf = $cf;
        $this->annoCreazioneContratto = $annoCreazioneContratto;
        $this->durataContratto = $durataContratto;
        if ($stipendioMensile < 600.00) {
            throw new Exception("stipendio minimo 600 euro");
        }
        $this->stipendioMensile = $stipendioMensile;
    }
    /////trait//////////////////////////////////

    ////getters////////////////////////////////
    public function getNome()
    {
        return $this->nome;
    }
    public function getCognome()
    {
        return $this->cognome;
    }
    public function getDatDiNascia()
    {
        return $this->datDiNascia;
    }
    public function getCf()
    {
        return $this->cf;
    }
    public function getAnnoCreazioneContratto()
    {
        return $this->annoCreazioneContratto;
    }
    public function getDurataContratto()
    {
        return $this->durataContratto;
    }
    public function getStipendio()
    {
        return $this->stipendioMensile;
    }
    ///////setters//////////////////////////////
    public function setNome($nome)
    {
        if (empty($nome) && strlen($nome < 3)) {
            throw new Exception("Nome non Valido");
        }
        $this->nome = $nome;
    }
    public function setCognome($cognome)
    {
        if (empty($cognome) && strlen($cognome < 3)) {
            throw new Exception("cognome non Valido");
        }
        $this->cognome = $cognome;
    }
    public function setDataDiNascita($dataDiNascita)
    {
        $this->dataDiNascita = $dataDiNascita;
    }
    public function setCf($cf)
    {
        if (strlen($cf) != 16) {
            throw new Exception("codice fiscale inserito non valido");
        }
        $this->cf = $cf;
    }
    public function setAnnoCreazioneContratto($anno)
    {
        $this->annoCreazioneContratto = $anno;
    }
    public function setDurataContratto($durata)
    {
        $this->durataContratto = $durata;
    }
    public function setStipendioMensile($stipendio)
    {
        if ($stipendio < 600.00) {
            throw new Exception("stipendio minimo 600 euro");
        }
        $this->stipendioMensile = $stipendio;
    }
    public function __toString()
    {
        return 'nome: '. $this->nome . ' cognome: ' . $this->cognome . ' nato: ' . $this->dataDiNascita . '<br>'
            . ' codice fiscale: ' . $this->cf . ' ' . $this->annoCreazioneContratto . 'contratto Creato: '
            . $this->annoCreazioneContratto . '<br>' . ' durata contratto:  ' . $this->durataContratto . '
         stipendio: ' . $this->stipendioMensile;
    }
}
