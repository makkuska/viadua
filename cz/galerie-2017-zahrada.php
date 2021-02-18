              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_zahrada/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_zahrada/zm/IMG2.jpg" ?> />';
                        }
                      },
                      adaptiveHeight: true,
                      controls: true,
                      autoControls: true,
                      captions: true,
                    });
                    });
                  </script>
                  <ul class="foto">
                    <li><img title="Zahrada plná překvapení" src=<?php echo "{$filespath}files/img/galery/2017_zahrada/IMG1.jpg" ?>  alt="Zahrada plná překvapení" /></li>
                    <li><img title="Zahrada plná překvapení" src=<?php echo "{$filespath}files/img/galery/2017_zahrada/IMG2.jpg" ?>  alt="Zahrada plná překvapení" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
