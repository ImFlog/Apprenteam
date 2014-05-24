<?php
require 'header.php';
$sql = "SELECT content FROM cms_content WHERE page = 'formation' AND name = 'full_content';";
$res = $bdd->query($sql);
$content = utf8_encode($res->fetch()[0]);
?>
<div class="container">
  <div class="row row-right">
    <div class="col-xs-12 col-sm-9">
      <h1>La formation en apprentissage</h1>
      <?php print $content; ?>
    </div>
    <?php 
    require 'sidebar.html';
    if (isCo()) {
      ?>
      <hr>
      <h3>Modification du contenu</h3>
      <form role="form" method="POST">
      <textarea class="ckeditor" name="content">
          <?php print $content; ?>
        </textarea>
        <input type="submit" value="modifier" class="btn btn-primary center">
      </form>
      <?php
    }
    require 'footer.html';
    ?>
