<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "projekty" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>Viadua | Projekty</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="container">
      <?php include_once("header.html") ?>
      <div id="first">
      
        <div id="projekty" class="container container-padding">
          <h1>Projekty</h1>

          <div align="center">
            <a href="projekty.php">2020</a>
            <a href="projekty2019.php">2019</a>
            <a href="projekty2018.php">2018</a>
            <a href="projekty2017.php">2017</a>
            <a href="projekty2016.php">2016</a>
            <a href="projekty2015.php">2015</a>
            <a href="projekty2014.php">2014</a>
            <u>2013</u>
          </div>

            <hr />
          <h2>Rok  2013</h2>
            <?php include_once("projekty2013.html") ?>

        </div>
        <?php include_once("footer.html") ?>
      </div> <!-- id="box" class="container" -->
    </div> <!-- id="first" class="container" -->
  </body> 
</html>
