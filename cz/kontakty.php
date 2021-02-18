<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "kontakty" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>Viadua | Kontakty</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="kontakty container">
      <?php include_once("header.html") ?>
        <div id="first">

          <div id="kontakty" class="container container-padding">
            <h1 class="page-header">Kontakty</h1>
            <div id="sidlo" class="container">
              <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <address>
                  <dl class="dl-horizontal">
                    <dt>adresa</dt>
                    <dd>Daskabát 159</dd>
                    <dt></dt>
                    <dd>779 00 Olomouc</dd>
                    <dt>tel.</dt>
                    <dd>+420 737 950 802</dd>
                    <dt>e- mail</dt>
                    <dd><a href="mailto:viadua@seznam.cz">viadua@seznam.cz</a></dd>
                    <dt>web</dt>
                    <dd>www.viadua.cz</dd>
                    <dt>ič</dt>
                    <dd>22611088</dd>
                    <dt><br /></dt>
                    <dd><br /></dd>
                    <dt>bankovní spojení</dt>
                    <dd>Fio Banka, a.s., pobočka Olomouc</dd>
                    <dt>číslo účtu</dt>
                    <dd>2300324786/2010</dd>
                  </dl>
                </address>
              </div><!-- class="container col-md-4">-->
              <!--  ?php include_once("mapa.html") ?> -->
            </div><!-- div sidlo  class="container"-->

            <hr />
            <h2>Kontaktní osoby</h2>
            <div id="osoby" class="container">
              <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Předseda</i></dd>
                    <dt></dt>
                    <dd><strong>Mgr. Jan Losík Ph.D.</strong></dd>
                    <dt>mobil</dt>
                    <dd>+420 604 623 654</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Jednatel</i></dd>
                    <dt></dt>
                    <dd><strong>Mgr. Slavomír Dostálík</strong></dd>
                    <dt>mobil</dt>
                    <dd>+420 737 950 802</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
              </div><!-- div container-->
            </div><!-- div osoby class="container"-->
          </div><!-- div kontakty -->

          <!-- ?php include_once("kontakt_nas.html") ?> -->
        <?php include_once("footer.html") ?>

      </div> <!-- id="first" -->
    </div> <!-- id="box" class="container" -->
  </body> 
</html>
