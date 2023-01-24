<!--Footer Section-->
<div class="ui horizontal divider"></div>
<!--Footer Section-->
<!--Footer-->
<style>
    ul.footer-ul {
        list-style: none;
        /* Remove HTML bullets */
        padding: 0;
        margin: 0;
    }

    ul.footer-ul li {
        padding-left: 16px;
    }

    ul.footer-ul li::before {
        content: "•";
        /* Insert content that looks like bullets */
        padding-right: 8px;
        color: yellow;
        /* Or a color you prefer */
    }

    ul.footer-ul li a {
        padding: 5px;
    }

</style>
<br>
<div class="footer" style="clear: both;">
    <div class="ui four column stackable relaxed padded grid">
        <div class="column footer-1st-grid">
            <ul>
                <li>
                    <a href="https://www.facebook.com/ctpfaisalabad">
                        <h2 class="ui header"><img src="<?= base_url(); ?>/public/images/Facebook-logo.jpg" alt="" class="ui image" style="width: 5.5em"></h2>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <h2 class="ui header"><img src="<?= base_url(); ?>/public/images/twitter_logo.png" alt="" class="ui image" style="width: 5.5em"></h2>
                    </a>
                </li>

                <li>
                    <a href="https://www.youtube.com/c/citytrafficpolicefaisalabad">
                        <h2 class="ui header"><img src="<?= base_url(); ?>/public/images/youtube.png" alt="" class="ui image" style="width: 5.5em"></h2>
                    </a>
                </li>
            </ul>

        </div>
        <div class="column footer-2nd-grid">
            <ul class="footer-ul">
                <li><a href="index#traffic-news">NEWS &amp; EVENTS </a></li>
                <li><a href="Salient">SALIENT FEATURES </a></li>
                <li><a href="Sports">CTPF IN SPORTS </a></li>
                <li><a href="emergencyNo">EMERGENCY NOS. </a></li>
                <li><a href="Oversight">OVERSIGHT </a></li>
                <li><a href="trafficVoilation">TRAFFIC VOILATION FINE </a></li>
            </ul>
        </div>
        <div class="column footer-3rd-grid">
            <ul class="footer-ul">
                <li><a href="Rescue15">RESCUE 15 </a></li>
                <li><a href="Fine">FINE PAYMENT PROCESS </a></li>
                <li><a href="Martyrs">SALUTE OUR MARTYRS </a></li>
                <li><a href="Employement">EMPLOYEMENT </a></li>
                <li><a href="Books">BOOKS BY POLICE OFFICERS </a></li>
                <li><a href="contactUs">CONTACT US </a></li>
            </ul>
        </div>
        <div class="column footer-last-grid">
            <h3>CONTACT US</h3>
            <ul>
                <li>CTO Office, Near Civil Lines Police Station, Opposite Kachehrian.</li>
                <li>Tel. +92-41-9200514, 9200714</li>
                <li>Help Line. 1915</li>
                <li>Fax: +92-419200515</li>
                <li>Email:<a href="#">fsd.ctp@gmail.com</a></li>
            </ul>
        </div>
    </div>


    <!--Signal Jssor Slider-->
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="<?= base_url(); ?>/public/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_2_slider_init = function() {
            var jssor_2_options = {
                $AutoPlay: 1,
                $Idle: 0,
                $SlideDuration: 5000,
                $SlideEasing: $Jease$.$Linear,
                $PauseOnHover: 4,
                $SlideWidth: 140,
                $Align: 0
            };
            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
            /*#region responsive code begin*/
            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_2_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                if (containerWidth) {
                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    jssor_2_slider.$ScaleWidth(expectedWidth);
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

    </style>
    <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);"> <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?= base_url(); ?>/public/img/spin.svg" /> </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/1.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/2.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/3.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/3.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/4.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/5.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/6.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/7.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/8.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/9.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/10.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/11.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/12.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/13.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/14.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/15.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/16.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/17.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/18.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/19.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/20.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/21.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/22.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/23.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/24.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/25.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/26.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/27.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/28.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/29.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/30.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/31.JPG" /> </div>
            <div> <img data-u="image" src="<?= base_url(); ?>/public/images/footerSlider/32.JPG" /> </div>
        </div>
    </div>
    <script type="text/javascript">
        jssor_2_slider_init();

    </script>
    <!-- #endregion Jssor Slider End -->


    <!--/Signal Jssor Slider-->


    <br>
    <div class="row copyright">
        <center>
            <h5>Copyright ©
                <?php echo "20".date('y');?> IT Branch, City Traffic Police Faisalabad.</h5>
        </center>
    </div>
</div>

<!--/Footer-->

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
