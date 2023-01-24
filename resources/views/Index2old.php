<?= $this->extend('Layout/Base') ?>
<?= $this->section('title') ?>
 
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!--Newspane Starts Here-->
<div class="top-story" id="traffic-news">
    <div class="row">
        <div class="ui stackable two column grid">
            <div class="ui four wide column">
                <h4 class="ui horizontal divider header">
                    <span style="color: #133886;">
                        <h2>Traffic News</h2>
                    </span>
                    <?php
    $cdate = new DateTime('now', new DateTimeZone('Asia/karachi'));
    echo "<span style='color:#133886;'>".$cdate->format('F j, Y, g:i a')."</span>";
?>
                </h4>
            </div>
            <div class="ui twelve wide column" style="background: #133886;">
                <?php
	 
                    /*$GetStockQ = "SELECT * FROM trafficnews ORDER BY id DESC LIMIT 1";
					 	 
                     $GetStockQR = mysqli_query($con,$GetStockQ);

                     $GetStockNR = mysqli_num_rows($GetStockQR);

                     if($GetStockNR>0)
                     {
                         $GetStockRow = mysqli_fetch_assoc($GetStockQR);                          
                             
                             $trafficNews = $GetStockRow['text'];
                        
                            
                     }*/
                                 ?>
                <marquee behavior="scroll" direction="right" style="padding-bottom:15px; color:#fff; font-size:25px;">
                    <?php echo "This is Testing" ?>
                </marquee>
            </div>
        </div>
    </div>
</div>
<br>
<!--Newspane Ends Here-->
<!--Slider Starts here-->
<div class="slider" style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {
            var jssor_1_SlideoTransitions = [
                [{
                    b: -1,
                    d: 1,
                    o: -0.7
                }],
                [{
                    b: 900,
                    d: 2000,
                    x: -379,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: 900,
                    d: 2000,
                    x: -379,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    o: -1,
                    sX: 2,
                    sY: 2
                }, {
                    b: 0,
                    d: 900,
                    x: -171,
                    y: -341,
                    o: 1,
                    sX: -2,
                    sY: -2,
                    e: {
                        x: 3,
                        y: 3,
                        sX: 3,
                        sY: 3
                    }
                }, {
                    b: 900,
                    d: 1600,
                    x: -283,
                    o: -1,
                    e: {
                        x: 16
                    }
                }]
            ];
            var jssor_1_options = {
                $AutoPlay: 1,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            /*#region responsive code begin*/
            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                if (containerWidth) {
                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };

    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /*jssor slider loading skin spin css*/

        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /*jssor slider bullet skin 032 css*/

        .jssorb032 {
            position: absolute;
        }

        .jssorb032 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb032 .i .b {
            fill: #fff;
            fill-opacity: 0.7;
            stroke: #000;
            stroke-width: 1200;
            stroke-miterlimit: 10;
            stroke-opacity: 0.25;
        }

        .jssorb032 .i:hover .b {
            fill: #000;
            fill-opacity: .6;
            stroke: #fff;
            stroke-opacity: .35;
        }

        .jssorb032 .iav .b {
            fill: #000;
            fill-opacity: 1;
            stroke: #fff;
            stroke-opacity: .35;
        }

        .jssorb032 .i.idn {
            opacity: .3;
        }

        /*jssor slider arrow skin 051 css*/

        .jssora051 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora051 .a {
            fill: none;
            stroke: #fff;
            stroke-width: 360;
            stroke-miterlimit: 10;
        }

        .jssora051:hover {
            opacity: .8;
        }

        .jssora051.jssora051dn {
            opacity: .5;
        }

        .jssora051.jssora051ds {
            opacity: .3;
            pointer-events: none;
        }

    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:350px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);"> <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" /> </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:350px;overflow:hidden;">
            <div> <img data-u="image" src="sliderImg/6.jpg" /> </div>
            <!--div> <img data-u="image" src="sliderImg/1.jpg" /> </div-->
            <div> <img data-u="image" src="sliderImg/36.jpg" /> </div>
            <!--div> <img data-u="image" src="sliderImg/33.jpg" /> </div-->
            <div> <img data-u="image" src="sliderImg/34.jpg" /> </div>
            <!--div> <img data-u="image" src="sliderImg/35.jpg" /> </div-->
            <<div> <img data-u="image" src="sliderImg/epay.jpg" />
        </div>
        <div> <img data-u="image" src="sliderImg/8.jpg" /> </div>
        <!--<div> <img data-u="image" src="sliderImg/9.jpg" /> </div>
                            <div> <img data-u="image" src="sliderImg/10.jpg" /> </div>-->
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
<script type="text/javascript">
    jssor_1_slider_init();

</script>
<!-- #endregion Jssor Slider End -->
</div>
<!--/ Slider Ends here-->
<!-- Box Section Starts Here-->
<div class="ui horizontal divider"></div>
<div class="box" style="clear: both;">
    <div class="ui stackable relaxed grid">
        <div class="doubling five column row">
            <div class="column">
                <a href="trafficSigns">
                    <h2 class="ui centered aligned header"><img src="img/trafficsigns.png" alt="" class="ui image" style="width: 5.5em">
                        <br> Traffic Signs
                    </h2>
                </a>
            </div>
            <div class="column">
                <a href="roadMarking">
                    <h2 class="ui centered aligned header"><img src="img/roadmarking.png" alt="" class="ui image" style="width: 5.5em">
                        <br>Road Marking
                    </h2>
                </a>
            </div>
            <div class="column">
                <a href="trafficSignals">
                    <h2 class="ui centered aligned header"><img src="img/trafficsignal.png" alt="" class="ui image" style="width: 5.5em">
                        <br> Traffic Signals
                    </h2>
                </a>
            </div>
            <div class="column">
                <a href="testModules">
                    <h2 class="ui centered aligned header"><img src="img/testprepration.png" alt="" class="ui image" style="width: 5.5em">
                        <br> Test Preparation
                    </h2>
                </a>
            </div>
            <div class="column">
                <a href="ticketCalculator">
                    <h2 class="ui centered aligned header"><img src="img/ticketCalculator.png" alt="" class="ui image" style="width: 5.5em">
                        <br> Ticket Calculator
                    </h2>
                </a>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Box Section Ends Here-->
<div class="ui horizontal divider"></div>
<!--Bottom Grid-->
<div class="ui three column stackable relaxed grid">
    <div class="row">
        <div class="one wide column" hidden></div>
        <div class="five wide column">
            <div class="bottom-grid1">
                <h3>Important links</h3>
                <br />
                <style>
                    ul#UlImpLink {
                        list-style: none;
                        /* Remove HTML bullets */
                        padding: 0;
                        margin: 0;
                    }

                    ul#UlImpLink li {
                        padding-left: 16px;
                    }

                    ul#UlImpLink li::before {
                        content: "•";
                        /* Insert content that looks like bullets */
                        padding-right: 8px;
                        color: red;
                        /* Or a color you prefer */
                    }

                    ul#UlImpLink li a {
                        padding: 5px;
                    }

                </style>
                <ul id="UlImpLink">
                    <li><a href="https://www.facebook.com/ctpfaisalabad" target="_blank">City Traffic Police Faisalabad Facebook Page</a></li>
                    <li><a href="http://www.faisalabadpolice.gov.pk" target="_blank">City Police Faisalabad</a></li>
                    <li><a href="http://www.facebook.com/faisalabad.police.official.page" target="_blank">City Police Faisalabad FB</a></li>
                    <li><a href="htt p://www.ctplahore.gop.pk" target="_blank">City Traffic Police Lahore</a></li>
                    <li><a href="http://www.ctprwp.gop.pk" target="_blank">City Traffic Police Rawalpindi</a></li>
                    <li><a href="http://www.facebook.com/ctpmultan" target="_blank">City Traffic Police Multan FB</a></li>
                    <li><a href="http://www.ctpgujranwala.pk" target="_blank">City Traffic Police Gujranwala</a></li>
                    <li><a href="http://www.bisefsd.edu.pk" target="_blank">Education Board Faisalabad</a></li>
                    <li><a href="http://excise-punjab.gov.pk" target="_blank">Excise & Taxation Punjab</a></li>
                    <li><a href="http://punjab.gov.pk/Faisalabad_NADRA" target="_blank">Faisalabad Portal (NADRA)</a></li>
                    <li><a href="http://www.faisalabad.com" target="_blank">About City Faisalabad</a></li>
                    <li><a href="http://www.faisalabad.gov.pk" target="_blank">City District Government Faisalabad</a></li>
                    <li><a href="http://www.fesco.com.pk" target="_blank">Faisalabad Electric Supply Company (FESCO)</a></li>
                    <div class="clear"> </div>
                </ul>
                <br />
            </div>
        </div>
        <div class="nine wide column" hidden>
            <div class="bottom-grid2">
                <h3>Photos Gallery</h3>
                <div class="gallery">
                    <?php include('imageGallery.php');?>
                </div>
            </div>
        </div>
        <div class="one wide column" hidden></div>
    </div>
</div>
<!--/ Bottom Grid-->
<div class="ui horizontal divider"></div>
<!--Footer-->
<?= $this->include('partials/Footer.php') ?>
<!--/Footer-->
<!--LiveChat Script(powered by mylivechat.com)-->
<script type="text/javascript">
    function add_chatinline() {
        var hccid = 85739534;
        var nt = document.createElement("script");
        nt.async = true;
        nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
        var ct = document.getElementsByTagName("script")[0];
        ct.parentNode.insertBefore(nt, ct);
    }
    add_chatinline();

</script>
<!--/LiveChat Script-->

<?= $this->endSection() ?>
