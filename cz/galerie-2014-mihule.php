              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_mihule/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_mihule/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_mihule/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_mihule/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_mihule/zm/IMG5.jpg" ?> />';
                          case 5:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_mihule/zm/IMG6.jpg" ?> />';
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
                    <li><img title="Mapování trdlišť mihule potoční" src=<?php echo "{$filespath}files/img/galery/2014_mihule/IMG1.jpg" ?>  alt="Mapování trdlišť mihule potoční" /></li>
                    <li><img title="Mapování trdlišť mihule potoční" src=<?php echo "{$filespath}files/img/galery/2014_mihule/IMG2.jpg" ?>  alt="Mapování trdlišť mihule potoční" /></li>
                    <li><img title="Mapování trdlišť mihule potoční" src=<?php echo "{$filespath}files/img/galery/2014_mihule/IMG3.jpg" ?>  alt="Mapování trdlišť mihule potoční" /></li>
                    <li><img title="Mapování trdlišť mihule potoční" src=<?php echo "{$filespath}files/img/galery/2014_mihule/IMG4.jpg" ?>  alt="Mapování trdlišť mihule potoční" /></li>
                    <li><img title="Mapování trdlišť mihule potoční" src=<?php echo "{$filespath}files/img/galery/2014_mihule/IMG5.jpg" ?>  alt="Mapování trdlišť mihule potoční" /></li>
                    <li><img title="Mapování trdlišť mihule potoční" src=<?php echo "{$filespath}files/img/galery/2014_mihule/IMG6.jpg" ?>  alt="Mapování trdlišť mihule potoční" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
