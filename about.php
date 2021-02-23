<!DOCTYPE html>
<html>
    <head>
        <title>QK | Developper</title>
    	<link rel="icon" href="images/favicon.png" type="image/png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type='text/javascript' src='scriptJS/jquery.min.js'></script>
		<script type='text/javascript' src='scriptJS/jquery.particleground.js'></script>
		<script type='text/javascript' src='scriptJS/mainParticule.js'></script>
		<link rel="stylesheet" href="styleCSS/mainStyle.css">
		<style>
		<style>
			#wrapper {
				float: none;
				width: 50%;
				height: 50%;
				overflow: scroll;
				text-align: center;
				display: flex;
				flex-direction: column;
			}
			#first {
				position: -webkit-sticky;
				position: sticky;
				top:0;
				width: 100%;
			}
			#second {
				width: 100%;
				text-align: center;
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
				<center><div id="wrapper">
					<h2 id="first">Professionally connected with web/software/mobile development for many years.<br>
								   Well-organised person, problem solver, independent employee with high attention to detail.<br>
								   Fan of outdoor activities, TV series, anime/manga and so many others things.
					</h2>
					<div id="second">
						<img src="images/mangas.png" width="10%" height="10%" id="hobby1"> 
						<img src="images/games.png" width="10%" height="10%" id="hobby2"> 
						<img src="images/chess.png" width="10%" height="10%" id="hobby3"> 
						<img src="images/curiosite.png" width="10%" height="10%" id="hobby4"> 
						<img src="images/nTechnologies.png" width="10%" height="10%" id="hobby5"> 
						<img src="images/voyage.png" width="10%" height="10%" id="hobby6"> 
					</div>
				<script>
					$(function() {
					   var ancien='';
					   $("img").click(function(){
						 var ddd="#"+$(this).attr("id");
						 if(ancien!='' && ancien!=ddd)
						 {
						   // alert(ancien);
						  $(ancien).animate({'height':'10%','width':'10%',},1000);
						 }
						 $(ddd).animate({'height':'40%','width':'40%',},1000);
						 //$(ddd).fadeOut(3000);

						 ancien=ddd;
					   });
					 });
				</script>
				</div>	
			</div></center>
		</div>
   </body>
</html>
