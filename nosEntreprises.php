<?php require 'header.html'; ?>

<div class="container">
	<div class="col-md-9" id="myCanvasContainer">
    <h1> Ces entreprises font confiance à nos apprentis :</h1>
    <div class="container-canvas">
      <canvas width="900em" height="700em" id="myCanvas">
       <p>Anything in here will be replaced on browsers that support the canvas element</p>
       <ul id="liste"> </ul>
     </canvas>
   </div>
 </div>

 <?php require 'sidebar.html'; ?>
</div>

<script type="text/javascript" >
displayCompanies();
</script>
<?php require 'footer.html'; ?>