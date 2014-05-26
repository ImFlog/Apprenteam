<?php
require 'header.php';

updateContent($bdd, 'formation', 'full_content');
$content = getContent($bdd, 'formation', 'full_content');
?>
<div class="container">
  <div class="row row-right">
    <div class="col-xs-12 col-sm-9">
      <h1>La formation en apprentissage</h1>
      <?php print $content; ?>
    </div>
    <?php 
    require 'sidebar.html';
    showEditor('formation', $content);
    require 'footer.html';
    ?>
