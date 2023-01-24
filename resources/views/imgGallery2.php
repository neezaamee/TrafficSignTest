<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .imgGallery {
        margin-top: 20px;
    }

    .imgGallerys p {
        text-align: justify;
    }

    .imgGallerys span {
        color: green;
    }

</style>
<div class="ui stackable grid">

    <div class="imgGallery contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                CTPF Gallery
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="imgGalleryBox">
            <!-- #region Jssor Slider Begin -->
            <!-- Generator: Jssor Slider Maker -->
            <!-- Source: https://www.jssor.com -->
            <script src="<?= base_url(); ?>/public/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                jssor_3_slider_init = function() {

                    var jssor_3_SlideshowTransitions = [{
                            $Duration: 800,
                            x: 0.3,
                            $During: {
                                $Left: [0.3, 0.7]
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: -0.3,
                            $SlideOut: true,
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: -0.3,
                            $During: {
                                $Left: [0.3, 0.7]
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            $SlideOut: true,
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $During: {
                                $Top: [0.3, 0.7]
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: -0.3,
                            $SlideOut: true,
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: -0.3,
                            $During: {
                                $Top: [0.3, 0.7]
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $SlideOut: true,
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            $Cols: 2,
                            $During: {
                                $Left: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Column: 3
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            $Cols: 2,
                            $SlideOut: true,
                            $ChessMode: {
                                $Column: 3
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $Rows: 2,
                            $During: {
                                $Top: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Row: 12
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $Rows: 2,
                            $SlideOut: true,
                            $ChessMode: {
                                $Row: 12
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $Cols: 2,
                            $During: {
                                $Top: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Column: 12
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: -0.3,
                            $Cols: 2,
                            $SlideOut: true,
                            $ChessMode: {
                                $Column: 12
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            $Rows: 2,
                            $During: {
                                $Left: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Row: 3
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: -0.3,
                            $Rows: 2,
                            $SlideOut: true,
                            $ChessMode: {
                                $Row: 3
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            y: 0.3,
                            $Cols: 2,
                            $Rows: 2,
                            $During: {
                                $Left: [0.3, 0.7],
                                $Top: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Column: 3,
                                $Row: 12
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            y: 0.3,
                            $Cols: 2,
                            $Rows: 2,
                            $During: {
                                $Left: [0.3, 0.7],
                                $Top: [0.3, 0.7]
                            },
                            $SlideOut: true,
                            $ChessMode: {
                                $Column: 3,
                                $Row: 12
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            $Delay: 20,
                            $Clip: 3,
                            $Assembly: 260,
                            $Easing: {
                                $Clip: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            $Delay: 20,
                            $Clip: 3,
                            $SlideOut: true,
                            $Assembly: 260,
                            $Easing: {
                                $Clip: $Jease$.$OutCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            $Delay: 20,
                            $Clip: 12,
                            $Assembly: 260,
                            $Easing: {
                                $Clip: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            $Delay: 20,
                            $Clip: 12,
                            $SlideOut: true,
                            $Assembly: 260,
                            $Easing: {
                                $Clip: $Jease$.$OutCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        }
                    ];

                    var jssor_3_options = {
                        $AutoPlay: 1,
                        $SlideDuration: 300,
                        $SlideEasing: $Jease$.$InQuad,
                        $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_3_SlideshowTransitions
                        },
                        $ThumbnailNavigatorOptions: {
                            $Class: $JssorThumbnailNavigator$,
                            $SpacingX: 5,
                            $SpacingY: 5
                        }
                    };

                    var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);

                    /*#region responsive code begin*/

                    var MAX_WIDTH = 980;

                    function ScaleSlider() {
                        var containerElement = jssor_3_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;

                        if (containerWidth) {

                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                            jssor_3_slider.$ScaleWidth(expectedWidth);
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
                .jssorl-00919-spin img {
                    animation-name: jssorl-00919-spin;
                    animation-duration: 1.6s;
                    animation-iteration-count: infinite;
                    animation-timing-function: linear;
                }

                @keyframes jssorl-00919-spin {
                    from {
                        transform: rotate(0deg);
                    }

                    to {
                        transform: rotate(360deg);
                    }
                }

                /*jssor slider thumbnail skin 909 css*/
                .jssort909 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    box-sizing: border-box;
                    background: #000;
                }

                .jssort909 .p .cv {
                    position: relative;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: 2px solid #000;
                    box-sizing: border-box;
                    z-index: 1;
                }

                .jssort909 .a {
                    fill: none;
                    stroke: #fff;
                    stroke-width: 400;
                    stroke-miterlimit: 10;
                    visibility: hidden;
                }

                .jssort909 .p:hover .cv,
                .jssort909 .p.pdn .cv {
                    border: none;
                    border-color: transparent;
                }

                .jssort909 .p:hover {
                    padding: 2px;
                }

                .jssort909 .p:hover .cv {
                    background-color: rgba(0, 0, 0, 6);
                    opacity: .35;
                }

                .jssort909 .p:hover.pdn {
                    padding: 0;
                }

                .jssort909 .p:hover.pdn .cv {
                    border: 2px solid #fff;
                    background: none;
                    opacity: .35;
                }

                .jssort909 .pav .cv {
                    border-color: #fff;
                    opacity: .35;
                }

                .jssort909 .pav .a,
                .jssort909 .p:hover .a {
                    visibility: visible;
                }

                .jssort909 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                    opacity: .6;
                }

                .jssort909 .pav .t,
                .jssort909 .p:hover .t {
                    opacity: 1;
                }

            </style>
            <div id="jssor_3" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:680px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-00919-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?= base_url(); ?>/public/img/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:580px;overflow:hidden;">
                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/1.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/1.jpg" />
                    </div>


                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/2.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/2.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/3.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/3.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/4.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/4.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/5.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/5.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/6.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/6.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/7.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/7.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/8.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/8.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/9.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/9.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?= base_url(); ?>/public/gallery/10.jpg" />
                        <img data-u="thumb" src="<?= base_url(); ?>/public/gallery/thumb/10.jpg" />
                    </div>
                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort909" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
                    <div data-u="slides">
                        <div data-u="prototype" class="p" style="width:190px;height:90px;">
                            <div data-u="thumbnailtemplate" class="t"></div>
                            <svg viewbox="0 0 16000 16000" class="cv">
                                <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                jssor_3_slider_init();

            </script>
            <!-- #endregion Jssor Slider End -->
            <!--/ui three column stackable relaxed grid-->
        </div>
    </div>
    <!--/imgGallery-->

</div>

<?= $this->endSection(); ?>
