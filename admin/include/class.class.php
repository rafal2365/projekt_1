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
  public $pietro;
  public $liczba_pieter;
  public $rodzaj_budynku;
  public $rok_budowy;
  
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
    $this -> dzielnica = $mysql_return['dzielnica'];
    $this -> img_src = $mysql_return['img_src'];
    $this -> description = $mysql_return['description'];
    $this -> title = $mysql_return['title']; 
    $this -> id = $id;
    $this -> pietro = $mysql_return['pietro'];
    $this -> liczba_pieter = $mysql_return['liczba_pieter'];
    $this -> rodzaj_budynku = $mysql_return['rodzaj_budynku'];
    $this -> rok_budowy = $mysql_return['rok_budowy'];
  }
  
  public function previewNieruchomosc($typ_nieruchomosci,$rodzaj_transakcji,$pum,$klasa_gleby,$status,$powierzchnia,$cena,$lokalizacja_1,$lokalizacja_2,$dzielnica,$img_src,$title,$description,$pietro,$liczba_pieter,$rodzaj_budynku,$rok_budowy){
    $this -> typ_nieruchomosci = $typ_nieruchomosci;
    $this -> rodzaj_transakcji = $rodzaj_transakcji; 
    $this -> pum = $pum;
    $this -> klasa_gleby = $klasa_gleby;
    $this -> status = $status; 
    $this -> powierzchnia = $powierzchnia; 
    $this -> cena = $cena; 
    $this -> lokalizacja_1 = $lokalizacja_1; 
    $this -> lokalizacja_2 = $lokalizacja_2; 
    $this -> dzielnica = $dzielnica; 
    $this -> img_src = $img_src; 
    $this -> description = $description; 
    $this -> title = $title;  
    $this -> pietro = $pietro; 
    $this -> liczba_pieter = $liczba_pieter; 
    $this -> rodzaj_budynku = $rodzaj_budynku;
    $this -> rok_budowy = $rok_budowy;                                                                                                                            
  }
  
  public function getNieruchomosc_pietro(){
    return $this -> pietro;
  }
  
  public function getNieruchomosc_liczbaPieter(){
    return $this -> liczba_pieter;
  }
  
  public function getNieruchomosc_rodzajBudynku(){
    return $this -> rodzaj_budynku;
  }
  
  public function getNieruchomosc_rokBudowy(){
    return $this -> rok_budowy;
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