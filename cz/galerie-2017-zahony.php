              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_zahony/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_zahony/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_zahony/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_zahony/zm/IMG4.jpg" ?> />';
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
                    <li><img title="Zajištění péče o luční záhony" src=<?php echo "{$filespath}files/img/galery/2017_zahony/IMG1.jpg" ?>  alt="Zajištění péče o luční záhony" /></li>
                    <li><img title="Zajištění péče o luční záhony" src=<?php echo "{$filespath}files/img/galery/2017_zahony/IMG2.jpg" ?>  alt="Zajištění péče o luční záhony" /></li>
                    <li><img title="Zajištění péče o luční záhony" src=<?php echo "{$filespath}files/img/galery/2017_zahony/IMG3.jpg" ?>  alt="Zajištění péče o luční záhony" /></li>
                    <li><img title="Zajištění péče o luční záhony" src=<?php echo "{$filespath}files/img/galery/2017_zahony/IMG4.jpg" ?>  alt="Zajištění péče o luční záhony" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
