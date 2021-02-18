              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_ucitahrat/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_ucitahrat/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_ucitahrat/zm/IMG3.jpg" ?> />';
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
                    <li><img title="Pojďme se učit a hrát si ven" src=<?php echo "{$filespath}files/img/galery/2017_ucitahrat/IMG1.jpg" ?>  alt="Pojďme se učit a hrát si ven" /></li>
                    <li><img title="Pojďme se učit a hrát si ven" src=<?php echo "{$filespath}files/img/galery/2017_ucitahrat/IMG2.jpg" ?>  alt="Pojďme se učit a hrát si ven" /></li>
                    <li><img title="Pojďme se učit a hrát si ven" src=<?php echo "{$filespath}files/img/galery/2017_ucitahrat/IMG3.jpg" ?>  alt="Pojďme se učit a hrát si ven" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
