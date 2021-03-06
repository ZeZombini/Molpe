<?php
  require_once("groupe.class.php");
  require_once("evenement.class.php");
  require_once("scene.class.php");
  require_once("DAO.class.php");

  class Passage {
// Attributs /////////////////////////////////////////////////////////////////////////////////////////////////
    var $dao;

    var $datePassage;
    var $dateBalances;

    // Association avec Groupe(1) et Evenement(1) et Scene(1)
    var $idEvenement;
    var $idScene;
    var $idGroupe;

// Constructeur ////////////////////////////////////////////////////////////////////////////////////////////
    function __construct() {
      $dao = new DAO();
    }

// Methodes ////////////////////////////////////////////////////////////////////////////////////////////////
    function getGroupe() {
      return getGroupeFromID(DAO::R_CLASS,$idGroupe);
    }

    function getScene() {
      return getSceneFromID(DAO::R_CLASS,$idScene);
    }

    function getEvenement() {
      return getEvenementFromID(DAO::R_CLASS,$idEvenement);
    }
  }
?>
