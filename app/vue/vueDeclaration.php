<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

?>

<div class="titreProfile">
<h1>Déclaration de votre partie</h1>
</div>

<!-- =====drop/formulaire===== -->

<form method="post" action="">
<label for="dropdown">Choisissez une option :</label>
  <select id="dropdown">
    <option value="">Sélectionnez une option</option>
    <option value="">Cra</option>
    <option value="">Ecaflip</option>
    <option value="">Eniripsa</option>
    <option value="">Enutrof</option>
    <option value="">Feca</option>
    <option value="">Iop</option>
    <option value="">Osamodas</option>
    <option value="">Pandawa</option>
    <option value="">Sacrieur</option>
    <option value="">Sadidas</option>
    <option value="">Sram</option>
    <option value="">Xelor</option>
    <option value="">Roublard</option>
    <option value="">Zobal</option>
    <option value="">Steamer</option>
    <option value="">Eliotrope</option>
    <option value="">Huppermage</option>
    <option value="">Ouginak</option>
  </select>

  <div id="selected-content" class="selected-content"></div>

  <section class="resultat">
    <div class="titreResultat">
      <h3>Résultat de la partie</h3>
    </div>

      <fieldset>
        <div>
          <input type="radio" id="gagne" name="drone" value="gagne" checked>
          <label for="gagne">Gagné</label>
        </div>

        <div>
          <input type="radio" id="perdu" name="drone" value="perdu">
          <label for="perdu">Perdu</label>
        </div>
      </fieldset>

    <button type="submit">Soumettre</button>
  </section>
</form>

<!-- =====finDrop/formulaire===== -->


