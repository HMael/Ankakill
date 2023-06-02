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
        <li><a href="./?action=accueil">accueil</a></li>
      <li><a href="./?action=profil">profil</a></li>
      <li><a href="./?action=declaration">déclaration du résultat</a></li>
      <li><a href="./?action=statistique">statistique</a></li>
      <li><a href="./?action=deconnexion">déconnexion</a></li>
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
      <li><a href="./?action=profil">profil</a></li>
      <li><a href="./?action=declaration">déclaration du résultat</a></li>
      <li><a href="./?action=statistique">statistique</a></li>
      <div class="iconeUtilisateur">
        <div class="dropdown">
            <li><img src="app/asset/images/utilisateur.png" alt="" /></li>
          <div class="container-drop">
            <a href="./?action=deconnexion">DECONNEXION</a>
          </div>
        </div>
      </div>
    </ul>
  </div>
</header>