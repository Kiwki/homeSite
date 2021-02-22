<!DOCTYPE html>
<html>
    <head>
        <title>QK | Developper</title>
    	<link rel="icon" href="images/favicon.png" type="image/png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type='text/javascript' src='scriptJS/carousel.js'></script>
		<script type='text/javascript' src='scriptJS/jquery.particleground.js'></script>
		<script type='text/javascript' src='scriptJS/mainParticule.js'></script>
		<link rel="stylesheet" href="styleCSS/mainStyle.css">
		<style>
		<style>
			* {box-sizing: border-box;}
			body {font-family: Verdana, sans-serif;}
			.mySlides {display: none;}
			img {vertical-align: middle;}
			
			/* Slideshow container */
			.slideshow-container {
			  max-width: 50%;
			  position: relative;
			  margin: auto;
			}

			/* Caption text */
			.text {
			  color: #f2f2f2;
			  font-size: 15px;
			  padding: 8px 12px;
			  position: absolute;
			  bottom: 8px;
			  width: 100%;
			  text-align: center;
			}

			/* Number text (1/3 etc) */
			.numbertext {
			  color: #f2f2f2;
			  font-size: 12px;
			  padding: 8px 12px;
			  position: absolute;
			  top: 0;
			}

			/* The dots/bullets/indicators */
			.dot {
			  height: 15px;
			  width: 15px;
			  margin: 0 2px;
			  background-color: #bbb;
			  border-radius: 50%;
			  display: inline-block;
			  transition: background-color 0.6s ease;
			}

			.active {
			  background-color: #717171;
			}

			/* Fading animation */
			.fade {
			  -webkit-animation-name: fade;
			  -webkit-animation-duration: 1.5s;
			  animation-name: fade;
			  animation-duration: 1.5s;
			}

			@-webkit-keyframes fade {
			  from {opacity: .4} 
			  to {opacity: 1}
			}

			@keyframes fade {
			  from {opacity: .4} 
			  to {opacity: 1}
			}

			/* On smaller screens, decrease text size */
			@media only screen and (max-width: 300px) {
			  .text {font-size: 11px}
			}
		</style>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
			<a href="home.php" class="active">Home</a>
			<a href="dloads.php">Downloads</a>
			<a href="about.php">About</a>
			<a href="https://github.com/Kiwki"><img alt="My GitHub" src="images/githubIcone.png" height="16"></a>
		</div>
		<div id="particles">
			<div id="intro">
				<div>
					<h2>Professionally connected with web/software/mobile development and programming technologies for many years.<br>
						Well-organised person, problem solver, independent employee with high attention to detail.<br>
						Fan of outdoor activities, TV series and anime/manga.
					</h2>
					<br>
					<div class="slideshow-container">

						<div class="mySlides fade">
							<div class="numbertext">1 / 6</div>
								<img src="images/mangas.png" style="width:100%">
								<div class="text">Mangas / Animes</div>
						</div>

						<div class="mySlides fade">
							<div class="numbertext">2 / 6</div>
								<img src="images/chess.png" style="width:100%">
								<div class="text">Chess</div>
						</div>

						<div class="mySlides fade">
							<div class="numbertext">3 / 6</div>
								<img src="images/games.png" style="width:100%">
								<div class="text">Video Games</div>
						</div>
								
						<div class="mySlides fade">
							<div class="numbertext">4 / 6</div>
								<img src="images/nTechnologies.png" style="width:100%">
								<div class="text">News Technologies</div>
						</div>
								
						<div class="mySlides fade">
							<div class="numbertext">5 / 6</div>
								<img src="images/voyage.png" style="width:100%">
								<div class="text">Travel</div>
						</div>
								
						<div class="mySlides fade">
							<div class="numbertext">6 / 6</div>
								<img src="images/curiosite.png" style="width:100%">
								<div class="text">Curious / thirsty for knowledge</div>
						</div>
					</div>
					<br>

					<div style="text-align:center">
						<span class="dot"></span> 
						<span class="dot"></span> 
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
				</div>	
				<script>
					var slideIndex = 0;
					showSlides();

					function showSlides() {
					  var i;
					  var slides = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("dot");
					  for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";  
					  }
					  slideIndex++;
					  if (slideIndex > slides.length) {slideIndex = 1}    
					  for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";  
					  dots[slideIndex-1].className += " active";
					  setTimeout(showSlides, 5000);
					}
				</script>
			</div>
		</div>
   </body>
</html>
