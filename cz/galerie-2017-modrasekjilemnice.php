              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/zm/IMG5.jpg" ?> />';
                          case 5:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/zm/IMG6.jpg" ?> />';
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
                    <li><img title="Mapování lokalit modráska bahenního na Jilemnicku" src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/IMG1.jpg" ?>  alt="Mapování lokalit modráska bahenního na Jilemnicku" /></li>
                    <li><img title="Mapování lokalit modráska bahenního na Jilemnicku" src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/IMG2.jpg" ?>  alt="Mapování lokalit modráska bahenního na Jilemnicku" /></li>
                    <li><img title="Mapování lokalit modráska bahenního na Jilemnicku" src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/IMG3.jpg" ?>  alt="Mapování lokalit modráska bahenního na Jilemnicku" /></li>
                    <li><img title="Mapování lokalit modráska bahenního na Jilemnicku" src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/IMG4.jpg" ?>  alt="Mapování lokalit modráska bahenního na Jilemnicku" /></li>
                    <li><img title="Mapování lokalit modráska bahenního na Jilemnicku" src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/IMG5.jpg" ?>  alt="Mapování lokalit modráska bahenního na Jilemnicku" /></li>
                    <li><img title="Mapování lokalit modráska bahenního na Jilemnicku" src=<?php echo "{$filespath}files/img/galery/2017_modrasekjilemnice/IMG6.jpg" ?>  alt="Mapování lokalit modráska bahenního na Jilemnicku" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
