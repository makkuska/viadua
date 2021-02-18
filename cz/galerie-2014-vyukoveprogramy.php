              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG5.jpg" ?> />';
                          case 5:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG6.jpg" ?> />';
                          case 6:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG7.jpg" ?> />';
                          case 7:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG8.jpg" ?> />';
                          case 8:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG9.jpg" ?> />';
                          case 9:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG10.jpg" ?> />';
                          case 10:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/zm/IMG11.jpg" ?> />';
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
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG1.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG2.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG3.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG4.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG5.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG6.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG7.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG8.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG9.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG10.jpg" ?>  alt="Výukové programy pro děti" /></li>
                    <li><img title="Výukové programy pro děti" src=<?php echo "{$filespath}files/img/galery/2014_vyukoveprogramy/IMG11.jpg" ?>  alt="Výukové programy pro děti" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
