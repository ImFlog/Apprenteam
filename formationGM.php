<?php
require 'header.php';

updateContent($bdd, 'formationGM', 'full_content');
$content = getContent($bdd, 'formationGM', 'full_content');
?>

<div class="container">
	<div class="row row-right main-content">
		<div class="col-xs-12 col-sm-9">
			<h1> L'apprentissage en mécanique </h1>
      <?php print $content; ?>
    </div>
    <?php require 'sidebar.html';
    showEditor('formationGM', $content); ?>
  </div>
  <?php require 'footer.html'; ?>
