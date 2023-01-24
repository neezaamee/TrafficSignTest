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
                    <a href="{{ url('https://www.facebook.com/ctpfaisalabad') }}">
                        <h2 class="ui header"><img src="{{ asset('images/Facebook-logo.jpg') }}" alt="" class="ui image" style="width: 5.5em"></h2>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <h2 class="ui header"><img src="{{ asset('images/twitter_logo.png') }}" alt="" class="ui image" style="width: 5.5em"></h2>
                    </a>
                </li>

                <li>
                    <a href="{{ url('https://www.youtube.com/c/citytrafficpolicefaisalabad') }}">
                        <h2 class="ui header"><img src="{{ asset('images/youtube.png') }}" alt="" class="ui image" style="width: 5.5em"></h2>
                    </a>
                </li>
            </ul>

        </div>
        <div class="column footer-2nd-grid">
            <ul class="footer-ul">
                <li><a href="#traffic-news">NEWS &amp; EVENTS </a></li>
                <li><a href="{{ url('/TrafficViolationFine') }}">TRAFFIC VIOLATION FINE </a></li>
                <li><a href="{{ url('/Salient') }}">SALIENT FEATURES </a></li>
                <li><a href="{{ url('/SportsCTPF') }}">CTPF IN SPORTS </a></li>
                <li><a href="{{ url('/EmergencyNumbers') }}">EMERGENCY NUMBERS </a></li>
                <li><a href="{{ url('/Oversight') }}">OVERSIGHT </a></li>
            </ul>
        </div>
        <div class="column footer-3rd-grid">
            <ul class="footer-ul">
                <li><a href="{{ url('/Rescue15') }}">RESCUE 15 </a></li>
                <li><a href="{{ url('/FinePaymentProcess') }}">FINE PAYMENT PROCESS </a></li>
                <li><a href="{{ url('/MartyrsCTPF') }}">SALUTE OUR MARTYRS </a></li>
                <li><a href="{{ url('/Employement') }}">EMPLOYEMENT </a></li>
                <li><a href="{{ url('/BooksByPoliceOfficers') }}">BOOKS BY POLICE OFFICERS </a></li>
                <li><a href="{{ url('/ContactUs') }}">CONTACT US </a></li>
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
    <script src="{{ url('/js/jssor.slider-27.5.0.min.js') }}" type="text/javascript"></script>
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
            animation-duration: 1.6s;tion-iteration-count: infinite;
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
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);"> <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('/img/spin.svg') }}" /> </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
            @for ($i = 1; $i < 33; $i++)
                <div> <img data-u="image" src="{{ url('images/footerSlider/'.$i.'.JPG') }}" /> </div>
            @endfor
            
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
