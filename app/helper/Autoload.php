<?php

if(!isset($_SESSION['PROFIL']) || empty($_SESSION['PROFIL'])){

  $profil = model('Profil')->getProfil();
  $_SESSION['PROFIL'] = $profil;
  
}