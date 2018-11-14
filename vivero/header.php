<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Vivero</title>
        <!--<link rel="stylesheet" type="text/css" media="all" href="main.css" />
		-->	
		<link rel="stylesheet" href='css/estilos.css'>
        <link rel="stylesheet" href='css/fonts.css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="bootstrap/css/bootstrap.min.css" />
		
        <meta name="viewport" content="width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<script src="js/jquery.js"> </script>
		<script src="js/carousel.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
        <style>


            #animation {
              width: 100%;
              height: 100%;
                max-height: 600px;
              margin: 2em auto 0;
              @media screen and (min-width: 800px) {
                height: 90%;
              }
            }

        </style>
        <script>
            
            function setup() {
              TweenMax.set("#shadow", {
                scale:0,
                transformOrigin:"15px 8px"
              });
              TweenMax.set("#tree", {
                scale:0,
                transformOrigin:"154px bottom"
              });
              TweenMax.set("#leaf-rb", {
                scale:0,
                rotation:'-60cw',
                y: -15,
                transformOrigin:"left bottom"
              });
              TweenMax.set("#leaf-rm", {
                scale:0,
                rotation:'-50cw',
                y: 30,
                transformOrigin:"left bottom"
              });
              TweenMax.set("#leaf-lb", {
                scale:0,
                rotation:'60cw',
                y: -80,
                transformOrigin:"right bottom"
              });
              TweenMax.set("#leaf-lm", {
                scale:0,
                rotation:'40cw',
                y: -90,
                transformOrigin:"right bottom"
              });

              TweenMax.set("#leaf-top", {
                scale:0,
                transformOrigin:"center bottom"
              });

              TweenMax.set("#leaf-rb g", {
                scale:0,
                transformOrigin:"left 60px"
              });
              TweenMax.set("#leaf-rm g", {
                scale:0,
                transformOrigin:"22px 140px"
              });
              TweenMax.set("#leaf-lb g", {
                scale:0,
                transformOrigin:"right 56px"
              });
              TweenMax.set("#leaf-lm g", {
                scale:0,
                transformOrigin:"106px bottom"
              });
            }

            // This should be called on document.load
            function animate() {
            var tl = new TimelineMax({
                  delay: 0.42,
                  repeat: -1,
                  repeatDelay: 2,
                  yoyo: true
                });

                tl.to("#shadow", 2, {
                  scale:1
                }, 0).to("#tree", 2, {
                  scale:1
                }, 0).to("#leaf-rb", 2, {
                  scale:1,
                  rotation:'0cw',
                  y: 0,
                  delay: 0.35
                }, 0).to("#leaf-rm", 2, {
                  scale:1,
                  rotation:'0cw',
                  y: 0,
                  delay: 0.35
                }, 0).to("#leaf-lb", 2, {
                  scale:1,
                  rotation:'0cw',
                  y: 0,
                  delay: 0.35
                }, 0).to("#leaf-lm", 2, {
                  scale:1,
                  rotation:'0cw',
                  y: 0,
                  delay: 0.35
                }, 0).to("#leaf-top", 2.5, {
                  scale:1,
                  delay: 0.35
                }, 0).to("#leaf-lb g", 2.25, {
                  scale:1,
                  delay: 0.5
                }, 0).to("#leaf-lm g", 2.25, {
                  scale:1,
                  delay: 0.6
                }, 0).to("#leaf-rb g", 2.25, {
                  scale:1,
                  delay: 0.5
                }, 0).to("#leaf-rm g", 2.25, {
                  scale:1,
                  delay: 0.6
                }, 0);

                return tl;
            }

            function stopAndReset() {
              TweenMax.killAll(false, true, false);
              TweenMax.set("#tree", {clearProps:"all"});
              TweenMax.set("#shadow", {clearProps:"all"});
              TweenMax.set("#leaf-top", {clearProps:"all"});
              TweenMax.set("#leaf-rb", {clearProps:"all"});
              TweenMax.set("#leaf-rm", {clearProps:"all"});
              TweenMax.set("#leaf-lb", {clearProps:"all"});
              TweenMax.set("#leaf-lm", {clearProps:"all"});
              TweenMax.set("#leaf-top", {clearProps:"all"});
              TweenMax.set("#leaf-rb g", {clearProps:"all"});
              TweenMax.set("#leaf-rm g", {clearProps:"all"});
              TweenMax.set("#leaf-lb g", {clearProps:"all"});
              TweenMax.set("#leaf-lm g", {clearProps:"all"});
            }

            function playAgain() {
              stopAndReset();
              setup();
              animate();
            }

            stopAndReset();
            setup();
            
            window.onload = animate;
            
            
        </script>
	</head>
    
	<body onload="playAgain()">
        <div class="container-fluid">                
			<header class="row">
				<nav class="col-xs-12 col-sm-12 col-md-12">
                    <ul>
                        <li><a href="#"><span class='primero'><i class='icon icon-home3'></i></span>Inicio</a></li>
                        <li><a href="#"><span class='segundo'><i class='icon icon-briefcase'></i></span>Servicios</a></li>
                        <li><a href="#"><span class='quinto'><i class='icon icon-price-tags'></i></span>Productos</a></li>
                        <li><a href="#"><span class='sexto'><i class='icon icon-bubbles2'></i></span>Contacto</a></li>
                    </ul>
				</nav>
			</header>
		</div>
    </body>
</html>