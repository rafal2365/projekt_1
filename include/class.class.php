<?php

class nieruchomosc
{
  public $typ_nieruchomsci;
  public $rodzaj_transakcji;
  public $pum;
  public $klasa_gleby;
  public $status;
  public $powierzchnia;
  public $cena;
  public $lokalizacja_1;
  public $lokalizacja_2;
  public $dzielnica;
  public $img_src;
  public $description;
  public $title;
  public $id;
  
  public function setNieruchomosc($id){
    $mysql_query = mysql_query("SELECT * FROM nieruchomosci WHERE id = '$id'") or die("mysql_query error: ".mysql_error());
    $mysql_return = mysql_fetch_assoc($mysql_query);
    
    $this -> typ_nieruchomosci = $mysql_return['typ_nieruchomosci'];
    $this -> rodzaj_transakcji = $mysql_return['rodzaj'];
    $this -> pum = $mysql_return['pum'];
    $this -> klasa_gleby = $mysql_return['klasa_gleby'];
    $this -> status = $mysql_return['status'];
    $this -> powierzchnia = $mysql_return['powierzchnia'];
    $this -> cena = $mysql_return['cena'];
    $this -> lokalizacja_1 = $mysql_return['lokalizacja_1'];
    $this -> lokalizacja_2 = $mysql_return['lokalizacja_2'];
    $this -> dzielnica = $mysql_query['dzielnica'];
    $this -> img_src = $mysql_query['img_src'];
    $this -> description = $mysql_query['description'];
    $this -> title = $mysql_query['title']; 
    $this -> id = $id;
  }
  
  public function getNieruchomosc_typNieruchomosci(){
      return $this -> typ_nieruchomosci;
  }
  
  public function getNieruchomosc_rodzajTransakcji(){
      return $this -> rodzaj_transakcji;
  }
  
  public function getNieruchomosc_pum(){
      return $this -> pum;
  }
  
  public function getNieruchomosc_klasaGleby(){
      return $this -> klasa_gleby;
  }
  
  public function getNieruchomosc_status(){
      return $this -> status;
  }
  
  public function getNieruchomosc_powierzchnia(){
      return $this -> powierzchnia;
  }
  
  public function getNieruchomosc_cena(){
      return $this -> cena;
  }
                                    
  public function getNieruchomosc_lokalizacja1(){
      return $this -> lokalizacja_1;
  }
  
  public function getNieruchomosc_lokalizacja2(){
      return $this -> lokalizacja_2;
  }
  
  public function getNieruchomosc_dzielnica(){
      return $this -> dzielnica;
  }
  
  public function getNieruchomosc_title(){
      return $this -> title;
  }
  
  public function getNieruchomosc_description(){
      return $this -> description;
  }
  
  public function getNieruchomosc_imgSrc(){
      return $this -> img_src;
  }
  
  public function getId(){
      return $this -> id;
  }

}




?>