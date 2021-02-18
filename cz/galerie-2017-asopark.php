              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_asopark/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2017_asopark/zm/IMG2.jpg" ?> />';
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
                    <li><img title="Realizace opatření pro podporu hmyzu a zvýšení informovanosti veřejnosti v ASO parku" src=<?php echo "{$filespath}files/img/galery/2017_asopark/IMG1.jpg" ?>  alt="Realizace opatření pro podporu hmyzu a zvýšení informovanosti veřejnosti v ASO parku" /></li>
                    <li><img title="Realizace opatření pro podporu hmyzu a zvýšení informovanosti veřejnosti v ASO parku" src=<?php echo "{$filespath}files/img/galery/2017_asopark/IMG2.jpg" ?>  alt="Realizace opatření pro podporu hmyzu a zvýšení informovanosti veřejnosti v ASO parku" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
