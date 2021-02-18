              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekstaravoda/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekstaravoda/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekstaravoda/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekstaravoda/zm/IMG4.jpg" ?> />';
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
                    <li><img title="Mapování modráska černoskvrnného na lokalitě Stará Voda" src=<?php echo "{$filespath}files/img/galery/2017_modrasekstaravoda/IMG1.jpg" ?>  alt="Mapování modráska černoskvrnného na lokalitě Stará Voda" /></li>
                    <li><img title="Mapování modráska černoskvrnného na lokalitě Stará Voda" src=<?php echo "{$filespath}files/img/galery/2017_modrasekstaravoda/IMG2.jpg" ?>  alt="Mapování modráska černoskvrnného na lokalitě Stará Voda" /></li>
                    <li><img title="Mapování modráska černoskvrnného na lokalitě Stará Voda" src=<?php echo "{$filespath}files/img/galery/2017_modrasekstaravoda/IMG3.jpg" ?>  alt="Mapování modráska černoskvrnného na lokalitě Stará Voda" /></li>
                    <li><img title="Mapování modráska černoskvrnného na lokalitě Stará Voda" src=<?php echo "{$filespath}files/img/galery/2017_modrasekstaravoda/IMG4.jpg" ?>  alt="Mapování modráska černoskvrnného na lokalitě Stará Voda" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
