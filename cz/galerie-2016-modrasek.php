              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_modrasek/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_modrasek/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_modrasek/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_modrasek/zm/IMG4.jpg" ?> />';
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
                    <li><img title="Management lokalit s výskytem modráska" src=<?php echo "{$filespath}files/img/galery/2016_modrasek/IMG1.jpg" ?>  alt="Management lokalit s výskytem modráska" /></li>
                    <li><img title="Management lokalit s výskytem modráska" src=<?php echo "{$filespath}files/img/galery/2016_modrasek/IMG2.jpg" ?>  alt="Management lokalit s výskytem modráska" /></li>
                    <li><img title="Management lokalit s výskytem modráska" src=<?php echo "{$filespath}files/img/galery/2016_modrasek/IMG3.jpg" ?>  alt="Management lokalit s výskytem modráska" /></li>
                    <li><img title="Management lokalit s výskytem modráska" src=<?php echo "{$filespath}files/img/galery/2016_modrasek/IMG4.jpg" ?>  alt="Management lokalit s výskytem modráska" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
