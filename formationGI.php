<?php
require 'header.php';
updateContent($bdd, 'formationGI', 'full_content');
$content = getContent($bdd, 'formationGI', 'full_content');
?>

<div class="container">
	<div class="row row-right main-content ">
		<div class="col-xs-12 col-sm-9">
			<h1> L'apprentissage en informatique </h1>
			<?php print $content; ?>
		</div>
		<?php require 'sidebar.html';
		showEditor('formationGI', $content); ?>
	</div>
	<?php require 'footer.html'; ?>
