<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $_titre;
    protected $_contenu;
    protected $_date;
    protected $_name_auteur;
    protected $_categorie;
    protected $_nb_vue;

    public function __construct(array $donne){
        $this->hydrate($donne);
      }
    
      // ---------------hydratation
      // ----------------------------
      public function hydrate(array $donnes){
        foreach ($donnes as $key => $value) {
          $method = 'set'.ucfirst($key);
          if (method_exists($this, $method)) {
            $this->$method($value);
          }
        }
      }

    // settters 
    // ------------------------------------

    public function setTitre($titre){
        $this->_titre=$titre;
    }
    public function setContenu($contenu){
        $this->_contenu=$contenu;
    }
    public function setDate($date){
        $this->_date=$date;
    }
    public function setName_Auteur($name){
    $this->_name_Auteur=$name;
    }
    public function setCategorie($categorie){
        $this->_categorie=$categorie;
    }
    public function setNb_vue($vue){
        $this->_nb_vue=$vue;
    }

    // getters 
    // ----------------------------------------
    public function getTitre(){
        return  $this->_titre;
    }
    public function getContenu(){
        return $this->_contenu;
    }
    public function getDate(){
        return $this->_date;
    }
    public function getName_auteur(){
        return $this->_name_auteur;
    }
    public function getCategorie(){
        return $this->_categorie;
    }
    public function getVue(){
        return $this->_vue;
    }
    
}
