              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_asopark/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_asopark/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_asopark/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_asopark/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_asopark/zm/IMG5.jpg" ?> />';
                          case 5:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2016_asopark/zm/IMG6.jpg" ?> />';
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
                    <li><img title="Květnatá louka ve Smetanových sadech" src=<?php echo "{$filespath}files/img/galery/2016_asopark/IMG1.jpg" ?>  alt="Květnatá louka ve Smetanových sadech" /></li>
                    <li><img title="Květnatá louka ve Smetanových sadech" src=<?php echo "{$filespath}files/img/galery/2016_asopark/IMG2.jpg" ?>  alt="Květnatá louka ve Smetanových sadech" /></li>
                    <li><img title="Květnatá louka ve Smetanových sadech" src=<?php echo "{$filespath}files/img/galery/2016_asopark/IMG3.jpg" ?>  alt="Květnatá louka ve Smetanových sadech" /></li>
                    <li><img title="Květnatá louka ve Smetanových sadech" src=<?php echo "{$filespath}files/img/galery/2016_asopark/IMG4.jpg" ?>  alt="Květnatá louka ve Smetanových sadech" /></li>
                    <li><img title="Květnatá louka ve Smetanových sadech" src=<?php echo "{$filespath}files/img/galery/2016_asopark/IMG5.jpg" ?>  alt="Květnatá louka ve Smetanových sadech" /></li>
                    <li><img title="Květnatá louka ve Smetanových sadech" src=<?php echo "{$filespath}files/img/galery/2016_asopark/IMG6.jpg" ?>  alt="Květnatá louka ve Smetanových sadech" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
