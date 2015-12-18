<?php
// Ok avec le MDC final
require_once("utilisateur.class.php");
require_once("passage.class.php");
require_once("DAO.class.php");

class Groupe extends Utilisateur {

  // Variables de groupe
  var $idUser_Groupe;
  var $style;
  var $taille;
  var $matDispo;

  // Association avec booker
  var $bookers; // Cardinalité : *

  // Association avec Evenement et scene via heure de passage
  var $passages; // Cardinalité : *

  include("getter/groupe.getter.php");

  function __construct() {
    parent::__construct($this->idGroupe);
    $dao = new DAO();
    $bookers = $dao->getBookersFromGroupeID($this->idGroupe);
    $passages = $dao->getPassagesFromGroupeID($this->idGroupe);
  }

}
 ?>
