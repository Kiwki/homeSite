<!DOCTYPE html>
<html>
    <head>
        <title>QK | Developper</title>
    	<link rel="icon" href="images/favicon.png" type="image/png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type='text/javascript' src='scriptJS/jquery.particleground.js'></script>
		<script type='text/javascript' src='scriptJS/mainParticule.js'></script>
		<link rel="stylesheet" href="styleCSS/mainStyle.css">
		<style>
			.cssload-wrap {
				position: absolute;
				margin: 0 auto 0;
				left: 13%;
				margin-left: -174px;
				transform: rotateX(75deg);
			}
			.cssload-wrp {
				position: absolute;
				margin: 0 auto 0;
				left: 87%;
				margin-left: -174px;
				transform: rotateX(75deg);
			}
			.cssload-circle {
				position: absolute;
				float: left;
				border: 1px solid white;
				animation: bounce 1.125s infinite ease-in-out alternate;
					-o-animation: bounce 1.125s infinite ease-in-out alternate;
					-ms-animation: bounce 1.125s infinite ease-in-out alternate;
					-webkit-animation: bounce 1.125s infinite ease-in-out alternate;
					-moz-animation: bounce 1.125s infinite ease-in-out alternate;
				border-radius: 100%;
				background: transparent;
				top: -58px;
				left: -58px;
			}
			.cssload-circle:nth-child(1) {
				margin: 0 229px;
				width: 8px;
				height: 8px;
				animation-delay: 75ms;
					-o-animation-delay: 75ms;
					-ms-animation-delay: 75ms;
					-webkit-animation-delay: 75ms;
					-moz-animation-delay: 75ms;
				z-index: -1;
				border: 1px solid rgba(255,43,0,0.7);
			}
			.cssload-circle:nth-child(2) {
				margin: 0 225px;
				width: 15px;
				height: 15px;
				animation-delay: 150ms;
					-o-animation-delay: 150ms;
					-ms-animation-delay: 150ms;
					-webkit-animation-delay: 150ms;
					-moz-animation-delay: 150ms;
				z-index: -2;
				border: 1px solid rgba(255,85,0,0.7);
			}
			.cssload-circle:nth-child(3) {
				margin: 0 221px;
				width: 23px;
				height: 23px;
				animation-delay: 225ms;
					-o-animation-delay: 225ms;
					-ms-animation-delay: 225ms;
					-webkit-animation-delay: 225ms;
					-moz-animation-delay: 225ms;
				z-index: -3;
				border: 1px solid rgba(255,128,0,0.7);
			}
			.cssload-circle:nth-child(4) {
				margin: 0 217px;
				width: 31px;
				height: 31px;
				animation-delay: 300ms;
					-o-animation-delay: 300ms;
					-ms-animation-delay: 300ms;
					-webkit-animation-delay: 300ms;
					-moz-animation-delay: 300ms;
				z-index: -4;
				border: 1px solid rgba(255,170,0,0.7);
			}
			.cssload-circle:nth-child(5) {
				margin: 0 213px;
				width: 39px;
				height: 39px;
				animation-delay: 375ms;
					-o-animation-delay: 375ms;
					-ms-animation-delay: 375ms;
					-webkit-animation-delay: 375ms;
					-moz-animation-delay: 375ms;
				z-index: -5;
				border: 1px solid rgba(255,213,0,0.7);
			}
			.cssload-circle:nth-child(6) {
				margin: 0 209px;
				width: 46px;
				height: 46px;
				animation-delay: 450ms;
					-o-animation-delay: 450ms;
					-ms-animation-delay: 450ms;
					-webkit-animation-delay: 450ms;
					-moz-animation-delay: 450ms;
				z-index: -6;
				border: 1px solid rgba(255,255,0,0.7);
			}
			.cssload-circle:nth-child(7) {
				margin: 0 205px;
				width: 54px;
				height: 54px;
				animation-delay: 525ms;
					-o-animation-delay: 525ms;
					-ms-animation-delay: 525ms;
					-webkit-animation-delay: 525ms;
					-moz-animation-delay: 525ms;
				z-index: -7;
				border: 1px solid rgba(212,255,0,0.7);
			}
			.cssload-circle:nth-child(8) {
				margin: 0 201px;
				width: 62px;
				height: 62px;
				animation-delay: 600ms;
					-o-animation-delay: 600ms;
					-ms-animation-delay: 600ms;
					-webkit-animation-delay: 600ms;
					-moz-animation-delay: 600ms;
				z-index: -8;
				border: 1px solid rgba(170,255,0,0.7);
			}
			.cssload-circle:nth-child(9) {
				margin: 0 198px;
				width: 70px;
				height: 70px;
				animation-delay: 675ms;
					-o-animation-delay: 675ms;
					-ms-animation-delay: 675ms;
					-webkit-animation-delay: 675ms;
					-moz-animation-delay: 675ms;
				z-index: -9;
				border: 1px solid rgba(128,255,0,0.7);
			}
			.cssload-circle:nth-child(10) {
				margin: 0 194px;
				width: 77px;
				height: 77px;
				animation-delay: 750ms;
					-o-animation-delay: 750ms;
					-ms-animation-delay: 750ms;
					-webkit-animation-delay: 750ms;
					-moz-animation-delay: 750ms;
				z-index: -10;
				border: 1px solid rgba(85,255,0,0.7);
			}
			.cssload-circle:nth-child(11) {
				margin: 0 190px;
				width: 85px;
				height: 85px;
				animation-delay: 825ms;
					-o-animation-delay: 825ms;
					-ms-animation-delay: 825ms;
					-webkit-animation-delay: 825ms;
					-moz-animation-delay: 825ms;
				z-index: -11;
				border: 1px solid rgba(43,255,0,0.7);
			}
			.cssload-circle:nth-child(12) {
				margin: 0 186px;
				width: 93px;
				height: 93px;
				animation-delay: 900ms;
					-o-animation-delay: 900ms;
					-ms-animation-delay: 900ms;
					-webkit-animation-delay: 900ms;
					-moz-animation-delay: 900ms;
				z-index: -12;
				border: 1px solid rgba(0,255,0,0.7);
			}
			.cssload-circle:nth-child(13) {
				margin: 0 182px;
				width: 101px;
				height: 101px;
				animation-delay: 975ms;
					-o-animation-delay: 975ms;
					-ms-animation-delay: 975ms;
					-webkit-animation-delay: 975ms;
					-moz-animation-delay: 975ms;
				z-index: -13;
				border: 1px solid rgba(0,255,43,0.7);
			}
			.cssload-circle:nth-child(14) {
				margin: 0 178px;
				width: 108px;
				height: 108px;
				animation-delay: 1050ms;
					-o-animation-delay: 1050ms;
					-ms-animation-delay: 1050ms;
					-webkit-animation-delay: 1050ms;
					-moz-animation-delay: 1050ms;
				z-index: -14;
				border: 1px solid rgba(0,255,85,0.7);
			}
			.cssload-circle:nth-child(15) {
				margin: 0 174px;
				width: 116px;
				height: 116px;
				animation-delay: 1125ms;
					-o-animation-delay: 1125ms;
					-ms-animation-delay: 1125ms;
					-webkit-animation-delay: 1125ms;
					-moz-animation-delay: 1125ms;
				z-index: -15;
				border: 1px solid rgba(0,255,128,0.7);
			}
			.cssload-circle:nth-child(16) {
				margin: 0 170px;
				width: 124px;
				height: 124px;
				animation-delay: 1200ms;
					-o-animation-delay: 1200ms;
					-ms-animation-delay: 1200ms;
					-webkit-animation-delay: 1200ms;
					-moz-animation-delay: 1200ms;
				z-index: -16;
				border: 1px solid rgba(0,255,170,0.7);
			}
			.cssload-circle:nth-child(17) {
				margin: 0 167px;
				width: 132px;
				height: 132px;
				animation-delay: 1275ms;
					-o-animation-delay: 1275ms;
					-ms-animation-delay: 1275ms;
					-webkit-animation-delay: 1275ms;
					-moz-animation-delay: 1275ms;
				z-index: -17;
				border: 1px solid rgba(0, 255, 213, 0.7);
			}
			.cssload-circle:nth-child(18) {
				margin: 0 163px;
				width: 139px;
				height: 139px;
				animation-delay: 1350ms;
					-o-animation-delay: 1350ms;
					-ms-animation-delay: 1350ms;
					-webkit-animation-delay: 1350ms;
					-moz-animation-delay: 1350ms;
				z-index: -18;
				border: 1px solid rgba(0, 255, 255, 0.7);
			}
			.cssload-circle:nth-child(19) {
				margin: 0 159px;
				width: 147px;
				height: 147px;
				animation-delay: 1425ms;
					-o-animation-delay: 1425ms;
					-ms-animation-delay: 1425ms;
					-webkit-animation-delay: 1425ms;
					-moz-animation-delay: 1425ms;
				z-index: -19;
				border: 1px solid rgba(0, 212, 255, 0.7);
			}
			.cssload-circle:nth-child(20) {
				margin: 0 155px;
				width: 155px;
				height: 155px;
				animation-delay: 1500ms;
					-o-animation-delay: 1500ms;
					-ms-animation-delay: 1500ms;
					-webkit-animation-delay: 1500ms;
					-moz-animation-delay: 1500ms;
				z-index: -20;
				border: 1px solid rgba(0, 170, 255, 0.7);
			}
			.cssload-circle:nth-child(21) {
				margin: 0 151px;
				width: 163px;
				height: 163px;
				animation-delay: 1575ms;
					-o-animation-delay: 1575ms;
					-ms-animation-delay: 1575ms;
					-webkit-animation-delay: 1575ms;
					-moz-animation-delay: 1575ms;
				z-index: -21;
				border: 1px solid rgba(0, 127, 255, 0.7);
			}
			.cssload-circle:nth-child(22) {
				margin: 0 147px;
				width: 170px;
				height: 170px;
				animation-delay: 1650ms;
					-o-animation-delay: 1650ms;
					-ms-animation-delay: 1650ms;
					-webkit-animation-delay: 1650ms;
					-moz-animation-delay: 1650ms;
				z-index: -22;
				border: 1px solid rgba(0, 85, 255, 0.7);
			}
			.cssload-circle:nth-child(23) {
				margin: 0 143px;
				width: 178px;
				height: 178px;
				animation-delay: 1725ms;
					-o-animation-delay: 1725ms;
					-ms-animation-delay: 1725ms;
					-webkit-animation-delay: 1725ms;
					-moz-animation-delay: 1725ms;
				z-index: -23;
				border: 1px solid rgba(0, 43, 255, 0.7);
			}
			.cssload-circle:nth-child(24) {
				margin: 0 139px;
				width: 186px;
				height: 186px;
				animation-delay: 1800ms;
					-o-animation-delay: 1800ms;
					-ms-animation-delay: 1800ms;
					-webkit-animation-delay: 1800ms;
					-moz-animation-delay: 1800ms;
				z-index: -24;
				border: 1px solid rgba(0, 0, 255, 0.7);
			}
			.cssload-circle:nth-child(25) {
				margin: 0 136px;
				width: 194px;
				height: 194px;
				animation-delay: 1875ms;
					-o-animation-delay: 1875ms;
					-ms-animation-delay: 1875ms;
					-webkit-animation-delay: 1875ms;
					-moz-animation-delay: 1875ms;
				z-index: -25;
				border: 1px solid rgba(42, 0, 255, 0.7);
			}
			.cssload-circle:nth-child(26) {
				margin: 0 132px;
				width: 201px;
				height: 201px;
				animation-delay: 1950ms;
					-o-animation-delay: 1950ms;
					-ms-animation-delay: 1950ms;
					-webkit-animation-delay: 1950ms;
					-moz-animation-delay: 1950ms;
				z-index: -26;
				border: 1px solid rgba(85, 0, 255, 0.7);
			}
			.cssload-circle:nth-child(27) {
				margin: 0 128px;
				width: 209px;
				height: 209px;
				animation-delay: 2025ms;
					-o-animation-delay: 2025ms;
					-ms-animation-delay: 2025ms;
					-webkit-animation-delay: 2025ms;
					-moz-animation-delay: 2025ms;
				z-index: -27;
				border: 1px solid rgba(127, 0, 255, 0.7);
			}
			.cssload-circle:nth-child(28) {
				margin: 0 124px;
				width: 217px;
				height: 217px;
				animation-delay: 2100ms;
					-o-animation-delay: 2100ms;
					-ms-animation-delay: 2100ms;
					-webkit-animation-delay: 2100ms;
					-moz-animation-delay: 2100ms;
				z-index: -28;
				border: 1px solid rgba(170, 0, 255, 0.7);
			}
			.cssload-circle:nth-child(29) {
				margin: 0 120px;
				width: 225px;
				height: 225px;
				animation-delay: 2175ms;
					-o-animation-delay: 2175ms;
					-ms-animation-delay: 2175ms;
					-webkit-animation-delay: 2175ms;
					-moz-animation-delay: 2175ms;
				z-index: -29;
				border: 1px solid rgba(212, 0, 255, 0.7);
			}
			.cssload-circle:nth-child(30) {
				margin: 0 116px;
				width: 232px;
				height: 232px;
				animation-delay: 2250ms;
					-o-animation-delay: 2250ms;
					-ms-animation-delay: 2250ms;
					-webkit-animation-delay: 2250ms;
					-moz-animation-delay: 2250ms;
				z-index: -30;
				border: 1px solid rgba(255, 0, 255, 0.7);
			}


			@keyframes bounce {
				0% {
					transform: translateY(0px);
				}
				100% {
					transform: translateY(77px);
				}
			}

			@-o-keyframes bounce {
				0% {
					-o-transform: translateY(0px);
				}
				100% {
					-o-transform: translateY(77px);
				}
			}

			@-ms-keyframes bounce {
				0% {
					-ms-transform: translateY(0px);
				}
				100% {
					-ms-transform: translateY(77px);
				}
			}

			@-webkit-keyframes bounce {
				0% {
					-webkit-transform: translateY(0px);
				}
				100% {
					-webkit-transform: translateY(77px);
				}
			}

			@-moz-keyframes bounce {
				0% {
					-moz-transform: translateY(0px);
				}
				100% {
					-moz-transform: translateY(77px);
				}
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
				<center><table>
					<tr>
						<td>
							<div class="cssload-wrap">
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
								<div class="cssload-circle"></div>
							</div>
						</td>
						<td><div style="text-align: center;"><h1>About me</h1>
							<h2>Professionally connected with web/software/mobile development and programming technologys for many years.<br>
								Well-organised person, problem solver, independent employee with high attention to detail.<br>
								Fan of outdoor activities, TV series and anime/manga.
							</h2></div>
						</td>
					</tr>
				</table><center>
			</div>
		</div>
   </body>
</html>