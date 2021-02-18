              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_vstavacslavkov/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_vstavacslavkov/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_vstavacslavkov/zm/IMG3.jpg" ?> />';
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
                    <li><img title="Mapování vstavače bledého na lokalitě Slavkov" src=<?php echo "{$filespath}files/img/galery/2017_vstavacslavkov/IMG1.jpg" ?>  alt="Mapování vstavače bledého na lokalitě Slavkov" /></li>
                    <li><img title="Mapování vstavače bledého na lokalitě Slavkov" src=<?php echo "{$filespath}files/img/galery/2017_vstavacslavkov/IMG2.jpg" ?>  alt="Mapování vstavače bledého na lokalitě Slavkov" /></li>
                    <li><img title="Mapování vstavače bledého na lokalitě Slavkov" src=<?php echo "{$filespath}files/img/galery/2017_vstavacslavkov/IMG3.jpg" ?>  alt="Mapování vstavače bledého na lokalitě Slavkov" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
