<?php require 'header.php'; ?>
<div class="container">
  <div class="row row-right">
    <div class="col-xs-12 col-sm-9">
      <div class="jumbotron">
        <p><b> Bienvenue sur le site de l'association Apprenteam !</b> </br>   Apprenteam est l'association des apprentis de l'<span class="info">UTC</span>.
          Elle a pour rôle de fédérer les apprentis et promouvoir l'apprentissage à l'UTC. Ce site se destine aux futurs apprentis, mais aussi aux apprentis actuels !</p>
          <p style="text-align : right;"><a href="/Apprenteam/formation.php">Futurs apprentis, découvrez nos formations...</a></p>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-4">
           <img src="static/img/gears.jpg" class="img-rounded" />
           <div class="credit_photo">Credit photo : <a href="https://www.flickr.com/photos/72637449@N06/"> mout1234 </a> </div>

           <h2 style ="font-size:23px; margin-top:5px">Ingénieur en mécanique</h2>
           <p>La mécanique vous intéresse ?  Venez découvrir ici la formation d'ingénieur en mécanique.</p>
           <br/>
           <p><a class="btn btn-default" href="formationGM.php" role="button">Cliquez-ici</a></p>
         </div>
         <div class="col-12 col-sm-6 col-lg-4">
          <img src="static/img/computers_index.jpg" class="img-rounded" />
          <h2 style ="font-size:23px">Ingénieur en informatique</h2>
          <p>Plutôt tenté par l'informatique ? Vous trouverez ici des informations concernant le diplôme d'ingénieur en informatique</p>
          <br/>
          <p><a class="btn btn-default" href="formationGI.php" role="button">Cliquez-ici</a></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <img src="static/img/present/livre.png" class="img-rounded" />
          <h2 style ="font-size:23px">Des questions ? </h2>
          <p>Vous vous posez des questions sur l'apprentissage ? Nous avons répondu à toutes vos questions ici !</p>
          <br/>
          <p><a class="btn btn-default" href="faq.php" role="button">Les réponses à vos questions</a></p>
        </div>
      </div>
    </div>
    <?php require 'sidebar.html'; ?>
  </div>

  <?php require 'footer.html'; ?>
