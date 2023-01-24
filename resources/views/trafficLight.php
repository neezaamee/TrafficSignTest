<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>signals for safety</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Salsa" />
    <link rel="stylesheet" href="trafficLight2.css">
    <style>
    html {
    background: linear-gradient(#08f, #fff);
    padding: 40px;
    /*width: 170px;
margin: 0 auto;*/
    height: 108%;
}

.trafficlight {
    background: #222;
    background-image: linear-gradient(transparent 2%, #111 2%, transparent 3%, #111 30%);
    width: 170px;
    height: 400px;
    border-radius: 20px;
    position: relative;
    border: solid 5px #333;
}

.trafficlight:before {
    background: #222;
    background-image: radial-gradient(#444, #000);
    content: "";
    width: 170px;
    height: 150px;
    margin: 0 auto;
    position: absolute;
    top: -20px;
    margin-left: 0px;
    border-radius: 50%;
    z-index: -1;
}

.trafficlight:after {
    background: #222;
    background-image: linear-gradient(-0deg, #777 10%, #ccc 30%, #000);
    content: "";
    width: 50px;
    height: 500px;
    margin-left: 60px;
    position: absolute;
    top: 150px;
    z-index: -1;
}

.protector {
    background: transparent;
    width: 180px;
    height: 0;
    position: absolute;
    top: 20px;
    left: -35px;
    border-right: solid 30px transparent;
    border-left: solid 30px transparent;
    border-top: solid 90px #111;
    border-radius: 10px;
    z-index: -1;
}

.protector:nth-child(2) {
    top: 140px;
}

.protector:nth-child(3) {
    top: 260px;
}

.red {
    background: red;
    background-image: radial-gradient(brown, transparent);
    background-size: 5px 5px;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 20px;
    left: 35px;
    animation: 13s red infinite;
    border: dotted 2px red;
    box-shadow:
        0 0 20px #111 inset,
        0 0 10px red;
}

.yellow {
    background: yellow;
    background-image: radial-gradient(orange, transparent);
    background-size: 5px 5px;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: dotted 2px yellow;
    position: absolute;
    top: 145px;
    left: 35px;
    animation: 13s yellow infinite;
    box-shadow:
        0 0 20px #111 inset,
        0 0 10px yellow;
}

.green {
    background: green;
    background-image: radial-gradient(lime, transparent);
    background-size: 5px 5px;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: dotted 2px lime;
    position: absolute;
    top: 270px;
    left: 35px;
    box-shadow:
        0 0 20px #111 inset,
        0 0 10px lime;
    animation: 13s green infinite;
}

@keyframes red {
    0% {
        opacity: 1
    }

    20% {
        opacity: 1
    }

    40% {
        opacity: 1
    }

    60% {
        opacity: .1
    }

    80% {
        opacity: .1
    }

    100% {
        opacity: .1
    }
}

@keyframes yellow {
    0% {
        opacity: .1
    }

    20% {
        opacity: .1
    }

    40% {
        opacity: 1
    }

    50% {
        opacity: .1
    }

    60% {
        opacity: .1
    }

    80% {
        opacity: .1
    }

    100% {
        opacity: .1
    }
}

@keyframes green {
    0% {
        opacity: .1
    }

    20% {
        opacity: .1
    }

    40% {
        opacity: .1
    }

    60% {
        opacity: 1
    }

    80% {
        opacity: 1
    }

    83% {
        opacity: .1
    }

    86% {
        opacity: 1
    }

    89% {
        opacity: .1
    }

    93% {
        opacity: 1
    }

    96% {
        opacity: .1
    }

    100% {
        opacity: 1
    }
}

        h1 {
            font-family: Salsa;
            font-size: 40px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 45.4px;
        }

        @media only screen and (max-width: 768px) {

            /* For mobile phones: */
            .heading {
                margin-left: 50%;
            }

            h1 {
                font-size: 25px;
                line-height: 45.4px;
            }

            .imgLogo {
                width: 50%;
                height: 50%;
            }
        }

    </style>
</head>

<body>

    <div class="heading" style="position: absolute; margin-left: 50%; margin-top: 80px;">
        <h1>City Traffic Police <br />Faisalabad</h1>
        <img class="imgLogo" src="img/logo1.png" alt="CTPF Logo" height="20%" width="20%">
    </div>

    <div class="trafficlight">
        <div class="protector"></div>
        <div class="protector"></div>
        <div class="protector"></div>
        <div class="red"></div>
        <div class="yellow"></div>
        <div class="green"></div>
    </div>
    <script>
        setTimeout(function() {
 window.location.href = 'index';
 }, 10000);

    </script>
</body>

</html>
