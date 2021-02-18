              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG5.jpg" ?> />';
                          case 5:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG6.jpg" ?> />';
                          case 6:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG7.jpg" ?> />';
                          case 7:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG8.jpg" ?> />';
                          case 8:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG9.jpg" ?> />';
                          case 9:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG10.jpg" ?> />';
                          case 10:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2013_vychazky/zm/IMG11.jpg" ?> />';
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
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG1.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG2.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG3.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG4.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG5.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG6.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG7.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG8.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG9.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG10.jpg" ?>  alt="Vycházky do přírody" /></li>
                    <li><img title="Vycházky do přírody" src=<?php echo "{$filespath}files/img/galery/2013_vychazky/IMG11.jpg" ?>  alt="Vycházky do přírody" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
