              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/zm/IMG5.jpg" ?> />';
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
                    <li><img title="Hmyzí hotel" src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/IMG1.jpg" ?>  alt="Hmyzí hotel" /></li>
                    <li><img title="Hmyzí hotel" src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/IMG2.jpg" ?>  alt="Hmyzí hotel" /></li>
                    <li><img title="Hmyzí hotel" src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/IMG3.jpg" ?>  alt="Hmyzí hotel" /></li>
                    <li><img title="Hmyzí hotel" src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/IMG4.jpg" ?>  alt="Hmyzí hotel" /></li>
                    <li><img title="Hmyzí hotel" src=<?php echo "{$filespath}files/img/galery/2014_hmyzihotel/IMG5.jpg" ?>  alt="Hmyzí hotel" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
