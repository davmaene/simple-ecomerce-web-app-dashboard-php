<?php 
    class Product{
        public $id,$name,$libelle,$categorie,$price,$marque,$src,$catProd;

        public function __construct($id,$name,$libelle,$categorie,$price,$marque,$src,$catProd){
            $this->id = $id;
            $this->name = $name;
            $this->libelle = $libelle;
            $this->categorie = $categorie;
            $this->price = $price;
            $this->marque = $marque;
            $this->src = $src;
            $this->catProd = $catProd;
        }
        // public function __construct(){
        //     // $this->id = $id;
        //     // $this->name = $name;
        //     // $this->libelle = $libelle;
        //     // $this->categorie = $categorie;
        //     // $this->price = $price;
        //     // $this->marque = $marque;
        //     // $this->src = $src;
        // }
        public function set_id($id){$this->id = $id;}
        public function set_name($name){$this->name = $name;}
        public function set_libelle($libelle){$this->libelle = $libelle;}
        public function set_categorie($categorie){$this->categorie = $categorie;}
        public function set_price($price){$this->price = $price;}
        public function set_marque($marque){$this->marque = $marque;}
        public function set_src($src){$this->src = $src;}
        public function set_catProd($catProd){$this->catProd = $catProd;}
        // 
        public function get_id(){return $this->id;}
        public function get_name(){return $this->name;}
        public function get_libelle(){return $this->libelle;}
        public function get_categorie(){return $this->categorie;}
        public function get_price(){return $this->price;}
        public function get_marque(){return $this->marque;}
        public function get_src(){return $this->src;}
        public function get_catProd(){return $this->catProd;}
    }
?>