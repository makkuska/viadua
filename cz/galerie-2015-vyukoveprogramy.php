              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2015_vyukoveprogramy/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2015_vyukoveprogramy/zm/IMG2.jpg" ?> />';
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
                    <li><img title="Vyukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2015_vyukoveprogramy/IMG1.jpg" ?>  alt="Vyukové programy pro děti" /></li>
                    <li><img title="Vyukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2015_vyukoveprogramy/IMG2.jpg" ?>  alt="Vyukové programy pro děti" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
