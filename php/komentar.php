<?php

  
  ?>
  
  <?php
  class komentari {
              public $ime;
              public $email;
              public $tel;
              public $ta;
  
              function __construct($ime,$email,$tel,$ta)
              {
                  $this->ime=$ime;
                  $this->email=$email;
                  $this->tel=$tel;
                  $this->ta=$ta;
              }
              function __tostring() {
                  return "$this->ime je poslao ovaj komentar $this->ta";
              }
                function getIme() {
                    return $this->ime;
                }
                function getEmail() {
                    return $this->email;
                }
                function getTel() {
                    return $this->tel;
                }
                function getKomentar() {
                    return $this->ta;
                }
  }
  if (isset($_GET["ime"]) && isset($_GET["email"]) && isset($_GET["tel"]) && isset($_GET["ta"])) {
    $ime=$_GET["ime"];
    $email=$_GET["email"];
    $tel=$_GET["tel"];
    $ta=$_GET["ta"];
    $komentar = new komentari($ime,$email,$tel,$ta);
}

var_dump($komentar);
  
  
  ?>