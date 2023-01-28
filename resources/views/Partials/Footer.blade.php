<!--Footer-->
<style>
    .copyright{
        padding-top: 15px;

    }
    .footer a{
        color: white;
    }
/*jssor slider loading skin spin css*/

.jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            tion-iteration-count: infinite;
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
<br>

<div class="footer">
    <div class="ui four column stackable relaxed padded grid">
        <div class="column">
        </div>
        <div class="column"> 
            <h3>FIND US</h3>            
            <table class="ui inverted basic compact table">
                <tr>
                    <th class="one wide">
                        <i class="large icons">
                            <i class="facebook icon"></i>
                            <i class="inverted corner add icon"></i>
                        </i>
                    </th>
                    <td>
                        <a href="{{ 'https://fb.com/neezaamee' }}" target="_blank"> fb.com/NeeZaaMee </a>
                    </td>
                </tr>
                <tr>
                    <th class="one wide">
                        <i class="large icons">
                            <i class="twitter icon"></i>
                            <i class="inverted corner add icon"></i>
                        </i>
                    </th>
                    <td>
                        <a href="{{ 'https://twitter.com/neezaamee' }}" target="_blank">twitter.com/NeeZaaMee</a>
                    </td>
                </tr>
                <tr>
                    <th class="one wide">
                        <i class="large icons">
                            <i class="whatsapp icon"></i>
                            <i class="inverted corner add icon"></i>
                        </i>
                    </th>
                    <td>
                        <a href="{{ 'https://wa.me/+923022211000' }}" target="_blank">+92-30-22211000</a>
                    </td>                    
                </tr>
            </table>
        </div>
        <div class="column">
            <h3>CONTACT US</h3>
            <table class="ui inverted basic compact table">
                <tr>
                    <th class="one wide">Address:</th>
                    <td>Faisalabad, Pakistan</td>
                </tr>
                <tr>
                    <th>Tel:</th>
                    <td>+92-30-22211000</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><a href="mailto:neezaamee@gmail.com.com">neezaamee@gmail.com</a></td>
                </tr>
            </table>
        </div>
        <div class="column">
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
    <div class="ui stackable relaxed padded grid">
        <div id="jssor_2"
            style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin"
                style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                    src="{{ asset('/img/spin.svg') }}" /> </div>
            <div data-u="slides"
                style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
                @for ($i = 1; $i < 33; $i++)
                    <div> <img data-u="image" src="{{ url('images/footerSlider/' . $i . '.JPG') }}" /> </div>
                @endfor
    
        </div>
    </div>
    </div>
    <script type="text/javascript">
        jssor_2_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
    <!--/Signal Jssor Slider-->

    <div class="row copyright">
        <center>
            <h5>Copyright © {{ date('Y') }} <u><a href="{{ url('/') }}">TrafficSigns.Com.Pk</a></u></h5>
        </center>
    </div>
</div>
<!--/Footer-->
