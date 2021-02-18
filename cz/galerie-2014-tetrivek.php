              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG3.png" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG5.jpg" ?> />';
                          case 5:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG6.jpg" ?> />';
                          case 6:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG7.jpg" ?> />';
                          case 7:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG8.jpg" ?> />';
                          case 8:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG9.jpg" ?> />';
                          case 9:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG10.jpg" ?> />';
                          case 10:
                            return '<img src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/zm/IMG11.jpg" ?> />';
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
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG1.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG2.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG3.png" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG4.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG5.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG6.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG7.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG8.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG9.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG10.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                    <li><img title="Podpora tetřívka obecného" src=<?php echo "{$filespath}files/img/galery/2014_tetrivek/IMG11.jpg" ?>  alt="Podpora tetřívka obecného" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
