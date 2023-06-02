<?php require('head.php'); ?>

<header>
  <div class="titrep">
    <a href="./?action=accueil"><h1>ANKAKILL</h1></a>
  </div>

  <div class="menuB">
    <!-- =====menuBurger===== -->

    <div id="mySidenav" class="sidenav">
      <a id="closeBtn" href="#" class="close">&times;</a>
      <ul>
        <li><a href="./?action=accueil">ACCUEIL</a></li>
        <li><a href="#propos">A&nbsp;PROPOS</a></li>
        <li><a href="#tuto">TUTO</a></li>

        <div class="login">
          <div class="button">
            <a href="./?action=appelFormulaire">CONNEXION</a>
          </div>
        </div>
      </ul>
    </div>

    <a href="#" id="openBtn">
      <span class="burger-icon">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </a>

    <!-- =====menuBurger===== -->
  </div>

  <div class="cadre">
    <ul class="container">
      <li><a href="./?action=accueil">accueil</a></li>
      <li><a href="./?action=accueil#propos">à&nbsp;propos</a></li>
      <li><a href="./?action=accueil#tuto">tuto</a></li>
      <div class="iconeUtilisateur">
        <div class="dropdown">
            <li><img src="app/asset/images/utilisateur.png" alt="" /></li>
          <div class="container-drop">
            <a href="./?action=appelFormulaire">CONNEXION</a>
            <a href="./?action=inscription">INSCRIPTION</a>
          </div>
        </div>
      </div>
    </ul>
  </div>
</header>