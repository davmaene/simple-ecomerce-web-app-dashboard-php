<?php 

class Command {

    public $name;
    public $src;
    public $prix;
    public $cat;
    public $date;
    public $marque;

    public function __construct($name,$src,$prix,$cat,$date,$marque){
        $this->name = $name;
        $this->src=$src;
        $this->prix=$prix;
        $this->cat=$cat;
        $this->date=$date;
        $this->marque = $marque;
    }
    function get_name(){return $this->name;}
    function get_src(){return $this->src;}
    function get_prix(){return $this->prix;}
    function get_categ(){return $this->cat;}
    function get_date(){return $this->date;}
    function get_marq(){return $this->marque;}
}

?>