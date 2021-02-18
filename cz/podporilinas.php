<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "podporilinas" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>Viadua | Podpořili nás</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="container">
      <?php include_once("header.html") ?>
      <div id="first">
      
        <div id="podporilinas" class="container container-padding">
          <h1 class="page-header">Podpořili nás</h1>
            <div class="row">
              <div class="col-lg-4 col-lg-offset-2 col-md-4">
                <h4>Vojenské lesy a statky, s.p.</h4>
                  <img src=<?php echo "{$filespath}files/img/podpora_vls.jpg" ?> />
              </div>
              <div class="col-lg-4 col-lg-offset-1 col-md-4">
                <h4>ÚVR ČSOP</h4>
                  <img src=<?php echo "{$filespath}files/img/podpora_csop.png" ?> />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-lg-offset-2 col-md-4">
                <h4>Město Olomouc</h4>
                  <img class="img80" src=<?php echo "{$filespath}files/img/podpora_mestool.jpg" ?> />
              </div>
              <div class="col-lg-4 col-lg-offset-1 col-md-4">
                <h4>Magistrát města Olomouce</h4>
                  <img src=<?php echo "{$filespath}files/img/podpora_magistratmol.png" ?> />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-lg-offset-2 col-md-4">
                <h4>Olomoucký kraj</h4>
                  <img class="img100" src=<?php echo "{$filespath}files/img/podpora_olkraj.bmp" ?> />
              </div>
              <div class="col-lg-4 col-lg-offset-1 col-md-4">
                <h4>Nestlé</h4>
                  <img class="img80" src=<?php echo "{$filespath}files/img/podpora_nestle.jpg" ?> />
              </div>
            </div>
        </div>
        <?php include_once("footer.html") ?>
      </div> <!-- id="box" class="container" -->
    </div> <!-- id="first" class="container" -->
  </body> 
</html>
