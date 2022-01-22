<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Printable{
    public function printMe(){
        echo $this . "<br>";
    }
} 

class computer {
 
    private  $codiceUnivoco;
    private  $modello;
    private  $prezzo;
    private  $marca;

    public function __construct($cod, $price){
    
       // Codice deve essere lungo esattamente 6 caratteri 0001 4
        if ( strlen( $cod ) != 6 ){
            throw new Exception("Il codice deve essere lungo 6 caratteri");
        }
       $this->codiceUnivoco = $cod;
       $this->prezzo = $price;
    }

    public function getCodiceUnivoco() {
        return $this->codiceUnivoco;
    }
    public function setCodiceUnivoco($cod) {
        $this->codiceUnivoco = $cod;
    }

    public function getModello() {
        return $this->modello;
    }
    public function setModello($newModello) {
        $this->modello = $newModello;
        if( is_integer($newPrezzo) == false ){
            throw new Exception("Deve essere un intero");
        }
        // se compreso fra 0 2000
        if ( $newPrezzo < 0 || $newPrezzo > 2000 ){
            throw new Exception("Deve evvere compreso fra 0 e 2000");
        }
    }

    public function getPrezzo() {
        return $this->prezzo;
    }
    public function setPrezzo($newPrezzo) {
        if( is_integer($newPrezzo) == false ){
            throw new Exception("Deve essere un intero");
        }
        // se compreso fra 0 2000
        if ( $newPrezzo < 0 || $newPrezzo > 2000 ){
            throw new Exception("Deve evvere compreso fra 0 e 2000");
        }
        $this->Prezzo = $newPrezzo;
    }

    public function getMarca() {
        return $this->marca;
    }
    public function setMarca($newMarca) {
        $this->marca = $newMarca;

        //deve essere una stringa
        if(is_string($newMarca) === false ){
            throw new Exception("Deve essere una stringa");
        }
        //deve essere un numero tra i 3 e 20 caratteri
        if(strlen($newMarca) < 3 || strlen($newMarca) > 20){
            throw new Exception("Deve essere compreso tra i 3 e 20 caratteri");
        }

    }

    public function printMe(){
        echo $this->codiceUnivoco . " - " . $this->modello . " - " . $this->prezzo . " - " . $this->marca ;
    }
    // - toString: "marca modello: prezzo [codice univoco]"

    public function __tostring(){
        return $this->marca . " " . $this->modello . ": " . $this -> prezzo . " [" . $this->codiceUnivoco . "]";
    }
} 

try {
    $computerCasa = new computer("000001", 100);
    
    $computerCasa -> setModello("Asus");
    $computerCasa -> setMarca( "Apple");
    $computerCasa -> setPrezzo( 32);
    $computerCasa -> setMarca( "viola");

    $computerCasa->printMe();

    echo "<br>" . $computerCasa -> __tostring() ;
} catch (Exception $error) {
    echo $error->getMessage();
}



// $computerSalotto = new computer("0002", 120);
