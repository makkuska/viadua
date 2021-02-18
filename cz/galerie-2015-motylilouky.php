              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/zm/IMG3.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/zm/IMG4.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/zm/IMG5.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/zm/IMG1.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/zm/IMG2.jpg" ?> />';
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
                    <li><img title="Motýlí totem Foersterova" src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/IMG3.jpg" ?>  alt="Motýlí louky" /></li>
                    <li><img title="Motýlí totem Lazce" src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/IMG4.jpg" ?>  alt="Motýlí louky" /></li>
                    <li><img title="Motýlí totem Schweitzerova" src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/IMG5.jpg" ?>  alt="Motýlí louky" /></li>
                    <li><img title="Motýli záhon Foersterova" src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/IMG1.jpg" ?>  alt="Motýlí louky" /></li>
                    <li><img title="Motýlí záhon Lazce" src=<?php echo "{$filespath}files/img/galery/2015_motylilouky/IMG2.jpg" ?>  alt="Motýlí louky" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
