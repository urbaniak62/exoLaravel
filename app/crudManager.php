<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crudManager extends Model
{
    
        // -------------setter
      // ----------------------------
        public function setCrud($crud){
          $this->_crud=$crud;
        }
      
      // ----------------getter
      // ---------------------------
        public function getCrud(){
          return $this->_crud;
        }
      
        // --------------methode insert
        // ----------------------
      
        public function insert($insert){
          $req=connection()->prepare('INSERT INTO article(name,sold)
              VALUES(:name,:sold)');
      
              $req->execute(array(
        ':name'=>$insert->getName(),
        ':sold'=>$insert->getSold()
      ));
      }
      // -----------------methode select
      // -----------------------------------
        public function select(){
          $req=connection()->query('SELECT * FROM article ');
      
      
        $compte=$req->fetchAll(PDO::FETCH_ASSOC);
        return $compte;
        }
      
      // --------------------select by id
      // -------------------------------------
      
        public function selectById($id){
        $req=connection()->prepare('SELECT id,name,sold FROM article WHERE id=:id');
        $req->execute(array(
        'id'=>$id
      ));
        $article=$req->fetch(PDO::FETCH_ASSOC);
        return $article;
      }
      
        // ---------------methode update
        // -------------------------------
        public function update($article){
          $req=connection()->prepare('UPDATE article SET id = :id, name= :name, sold= :sold WHERE id= :id');
          $req->execute(array(
            'id'=>$compte->getId(),
            'name'=>$compte->getName(),
            'sold'=>$compte->getSold()
      
          ));
        }
      
        // ---------------methode delete
        // ---------------------------------
      
        public function delete($id){
        $req=connection()->prepare('DELETE  FROM article WHERE id=:id');
        $req->execute(array(
          'id'=>$id
        ));
       }
      
      }
}
