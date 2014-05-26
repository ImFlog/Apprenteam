<?php
require 'header.php';

updateContent($bdd, 'info_admin', 'content');
$content = getContent($bdd, 'info_admin', 'content');
?>

<div class="container">
  <div class="row row-right main-content">
    <div class="col-xs-12 col-sm-9">
      <h1>Informations administratives</h1>
      <?php print $content;?>
    </div>
    <?php require 'sidebar.html'; ?>
    <div class="main-content">
      <h3>Contacts</h3>
      <div class="col-6 col-sm-6 col-lg-3">
        <h3>Responsable Apprentissage</h3>
        <p><b>Valerie Moreau</b> <br/>
          valerie.moreau@utc.fr
        </p>
      </div>
      <div class="col-6 col-sm-6 col-lg-3">
        <h3>Responsable Administrative Apprentissage</h3>
        <p><b>Karine Sliwak </b><br/>
          karine.sliwak@utc.fr <br/>
          03 44 23 49 56
        </p>
      </div>
      <div class="col-6 col-sm-6 col-lg-3">
        <h3>Responsables pédagogique informatique</h3>
        <p><b>Dritan Nace </b><br/>
          dritan.nace@hds.utc.fr
        </p>
        <p><b>Benjamin Lussier </b> <br/>
          benjamin.lussier@hds.utc.fr
        </p>
      </div>

      <div class="col-6 col-sm-6 col-lg-3">
        <h3>Responsables pédagogique mécanique</h3>
        <p><b>Dritan Nace </b><br/>
          dritan.nace@hds.utc.fr
        </p>
        <p><b>Benjamin Lussier </b><br/>
          benjamin.lussier@hds.utc.fr
        </p>
      </div>
    </div>
    <?php
      showEditor('info_admin', $content);
      require 'footer.html';
    ?>