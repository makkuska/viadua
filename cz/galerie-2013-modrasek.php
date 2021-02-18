              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_modrasek/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_modrasek/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_modrasek/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_modrasek/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_modrasek/zm/IMG5.jpg" ?> />';
                          case 5:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_modrasek/zm/IMG6.jpg" ?> />';
                          case 6:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_modrasek/zm/IMG7.jpg" ?> />';
                          case 7:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_modrasek/zm/IMG8.jpg" ?> />';
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
                    <li><img title="Mapování výskytu modráska" src=<?php echo "{$filespath}files/img/galery/2013_modrasek/IMG1.jpg" ?>  alt="Mapování výskytu modráska" /></li>
                    <li><img title="Mapování výskytu modráska" src=<?php echo "{$filespath}files/img/galery/2013_modrasek/IMG2.jpg" ?>  alt="Mapování výskytu modráska" /></li>
                    <li><img title="Mapování výskytu modráska" src=<?php echo "{$filespath}files/img/galery/2013_modrasek/IMG3.jpg" ?>  alt="Mapování výskytu modráska" /></li>
                    <li><img title="Mapování výskytu modráska" src=<?php echo "{$filespath}files/img/galery/2013_modrasek/IMG4.jpg" ?>  alt="Mapování výskytu modráska" /></li>
                    <li><img title="Mapování výskytu modráska" src=<?php echo "{$filespath}files/img/galery/2013_modrasek/IMG5.jpg" ?>  alt="Mapování výskytu modráska" /></li>
                    <li><img title="Mapování výskytu modráska" src=<?php echo "{$filespath}files/img/galery/2013_modrasek/IMG6.jpg" ?>  alt="Mapování výskytu modráska" /></li>
                    <li><img title="Mapování výskytu modráska" src=<?php echo "{$filespath}files/img/galery/2013_modrasek/IMG7.jpg" ?>  alt="Mapování výskytu modráska" /></li>
                    <li><img title="Mapování výskytu modráska" src=<?php echo "{$filespath}files/img/galery/2013_modrasek/IMG8.jpg" ?>  alt="Mapování výskytu modráska" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
