<!DOCTYPE html>
<html lang="en">
<head>
    <title>403-Error de Internet</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Dosis:300,400,700,800");
        html {
            height: 100%;
            overflow: hidden;
        }
        body {
            background: #FCC53F;
            font-family: "Dosis", sans-serif;
            height: calc(100%);
            overflow: auto;
            position: relative;
            text-align: center;
        }
        #tsparticles {
            width: 100%;
            height: 100%;
            position: absolute;
            z-index:-1;


        }
        .cont {
            width: 100%;
            height: auto;
            margin-top: 4rem;
        }
        h2 {
            color:rgb(255, 255, 255);
            font-size: 150px;
            margin-bottom:0rem;
        }
        h3 {
        color:rgb(46, 46, 46);
            font-size: 60px;
            opacity: 100%;
        }
        p {
            color:rgb(255, 255, 255);
            font-size: 24px;
            margin-top: 0rem;
        }
        a {
            text-decoration: none;
        }
        .button {
            background-color: #FCC53F;
            color: #000;
            padding: 12px 0px 10px 0px;
            border: 3px solid rgb(0, 0, 0);
            outline: none;
            border-radius: 7px;
            width: 150px;
            font-size: 15px;
            text-align: center;
            margin: 0 auto;
            vertical-align: middle;
            display: block;
            margin-bottom: 40px;
            margin-top: 25px;
            font-family: "Dosis", sans-serif;
            font-weight: 400;
        }
        .button:hover {
            color: #fff;
            border-color: #fff;
            cursor: pointer;
            opacity: 1;
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela">
</head>
<body>
    <div id="tsparticles"></div>

        <div class="cont">
            <header>
                <h2>403.</h2>
                <p>
                    Ours bee materials to search but...
                </p>
            </header>
                <h3>ERROR DE INTERNET</h3>

        <a href="/"><button class="button" style="font-size: x-large;">Regresar</button></a>

        </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tsparticles/1.18.11/tsparticles.min.js"></script>
    <script>
        tsParticles.load("tsparticles", {
            particles: {
            number: {
            value: 350,
            limit:0,
            density: {
                enable: false,
                value_area: 600
            }
            },
            color: {
            value: "#ffffff"
            },
            shape: {
            type: "image",
            stroke: {
                width: 2,
                color: "#fff"
            },
            polygon: {
                nb_sides: 6
            },
            image: [{
                src: "assets/images/errorPage/1.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/2.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/3.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/4.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/5.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/6.png",
                width: 64,
                height: 64
            }],
            images: [{
                src: "assets/images/errorPage/1.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/2.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/3.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/4.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/5.png",
                width: 64,
                height: 64
            },
            {
                src: "assets/images/errorPage/6.png",
                width: 64,
                height: 64
            }]
            },
            opacity: {
            value: 1,
            random: false,
            anim: {
                enable: false,
                speed: 2,
                opacity_min: 0.2,
                sync: false
            }
            },
            size: {
            value: 16,
            random: false,
            anim: {
                enable: false,
                speed: 20,
                size_min: 32,
                sync: false
            }
            },
            line_linked: {
            enable: false,
            distance: 50,
            color: "#ffffff",
            opacity: 0.5,
            width: 1
            },
            move: {
            enable: true,
            speed: 5,
            direction: "none",
            random: true,
            straight: false,
            outModes:
            {
                default:"bounce",
                top:"bounce",
                left:"bounce",
                right:"bounce",
                bottom:"bounce"
            },
            bounce: false,
            attract: {
                enable: true,
                rotateX: 250,
                rotateY: 1000
            },

            },
        },
        interactivity: {
            detect_on: "canvas",
            events: {
            onhover: {
                enable: true,
                mode:  "bubble"
            },
            onclick: {
                enable: true,
                mode: "repulse"
            },
            resize: true
            },
            modes: {
            grab: {
                distance: 125,
                line_linked: {
                opacity: 1
                }
            },
            bubble: {
                distance: 200,
                size: 33,
                duration: 2,
                opacity: 6,
                speed: 2
            },
            repulse: {
                distance: 200,
                duration: 0.25
            },
            push: {
                particles_nb: 4
            },
            remove: {
                particles_nb: 2
            }
            }
        },
        retina_detect: true
        });

    </script>
</body>
</html>
