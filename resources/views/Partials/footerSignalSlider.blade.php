<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<!-- Source: https://www.jssor.com -->
<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
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
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);"> <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" /> </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
        <div> <img data-u="image" src="images/footerSlider/1.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/2.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/3.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/4.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/5.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/6.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/7.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/8.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/9.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/10.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/11.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/12.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/13.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/14.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/15.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/16.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/17.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/18.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/19.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/20.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/21.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/22.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/23.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/24.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/25.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/26.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/27.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/28.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/29.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/30.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/31.JPG" /> </div>
        <div> <img data-u="image" src="images/footerSlider/32.JPG" /> </div>
    </div>
</div>
<script type="text/javascript">
    jssor_2_slider_init();

</script>
<!-- #endregion Jssor Slider End -->
