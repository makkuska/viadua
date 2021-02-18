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
    <title>LT EkoLesServis | Kontakty</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="kontakty container">
      <?php include_once("header.html") ?>
        <div id="first" class="kontakty">

          <div id="kontakty" class="container container-padding">
            <?php
              //seznam mailů, na které se zpráva odešle
              $to = 'tandler@ekolesservis.cz';
              $from = $_POST['odesilatel_mail'];
              //proměnné naplněné z formáře kontaktujte_nas.html
              $formSubject = $_POST['predmet'];
              $formMessage = $_POST['zprava'];
              $formURL = $_POST['url'];

              $pr = "Dotaz z webu: $predmet";

              //hlavicka
                $hlavicka = "From:$from\n" . "BCC:marketa.solanska@gmail.com";
                $hlavicka .= "Subject:$pr\n";
                $hlavicka .= "MIME-Version: 1.0\n";
                $hlavicka .= "Content-Transfer-Encoding: QUOTED-PRINTABLE\n"; //způsob kódování
                $hlavicka .= "X-Mailer: PHP\n";
                $hlavicka .= "Content-Type: text/plain; charset=UTF-8\n"; // kódování
              
              //kopie emailu odesílatele
              $subjectCopy = 'Kopie Vaší zprávy z webu ekolesservis.cz';
              $messageCopy = 'Vaše zpráva, kterou jste odeslali přes web ekolesservis.cz:' . "\n" . "Předmět: " . $formSubject . "\n" . $formMessage;

              //mail na 
              $subjectOrig = "Dotaz z webu: $formSubject";

              if (!empty($formUrl)) {
                  $page1  = '<div class="container"><p>' .$formUrl .
                  $page1 .= '</p><a class="btn btn-default" href="http://www.solanskysro.cz">';
                  $page1 .= ' Zpět na solanskysro.cz</a></p> </div></div>';
                  echo ($page1);
              } else if (empty($from) or empty($formMessage) or empty($formSubject)) { 
                  echo('<div class="container container-padding"><h2 class="page-header">Omlouváme se, někde nastala chyba. Váš e-mail nebyl odeslán. </h2>><p>Zkuste zadat požadavek znovu, zkontrolujte, že jste vyplnili všechny kolonky. V případě, že to stále nepůjde, kontaktujte nám přímo na e-mailu tandler@ekolesservis.cz nebo na telefonním čísle +420 603 826 724. Děkujeme za pochopení.</p><p><a class="btn btn-info" href="kontakty.php">Zpět na kontakty</a></p></div></div>');
              } else {
                  mail($to,   $subjectOrig, $formMessage, $hlavicka);
                  mail($from, $subjectCopy, $messageCopy, $hlavicka);
                  echo('<div class="container container-padding"><h2 class="page-header">Váš mail byl úspěšně odeslán</h2><p> Děkujeme za vaši zprávu či dotaz.</><p> Po přečtení se Vám budeme snažit, co nejdříve odpovědět na mail, který jste zadali ' . '('.$from.').</p><p><a class="btn btn-info" href="kontakty.php">Zpět na kontakty</a></p></div>');
              }
              
              include_once("footer.html");
        ?>
        </div>
      </div>
    </div>
  </body>
</html>
