<!DOCTYPE html>
<html>
   <head>
		<title>Loading page</title>
		<meta http-equiv = "refresh" content = "2; url = home.php" />
		<style>
			body {
				background: #16a085;
			}
			
			.cssload-container{
				display: block;
				margin:81px auto;
				width:163px;
			}

			.cssload-loading{
				width: 49px;
				height: 49px;
			}
			.cssload-loading i{
				width: 49px;
				height: 49px;
				display: inline-block;
				background: rgb(255,89,84);
				border-radius: 50%;
				position: absolute;
				top: 45%;
			}
			.cssload-loading i:nth-child(1){
				transform:translate(-81px,0);
					-o-transform:translate(-81px,0);
					-ms-transform:translate(-81px,0);
					-webkit-transform:translate(-81px,0);
					-moz-transform:translate(-81px,0);
				animation:cssload-loading-ani1 1.15s linear infinite;
					-o-animation:cssload-loading-ani1 1.15s linear infinite;
					-ms-animation:cssload-loading-ani1 1.15s linear infinite;
					-webkit-animation:cssload-loading-ani1 1.15s linear infinite;
					-moz-animation:cssload-loading-ani1 1.15s linear infinite;

			}
			.cssload-loading i:nth-child(2){
				background: rgb(0,168,206);
				transform:translate(81px,0);
					-o-transform:translate(81px,0);
					-ms-transform:translate(81px,0);
					-webkit-transform:translate(81px,0);
					-moz-transform:translate(81px,0);
				animation:cssload-loading-ani2 1.15s linear infinite;
					-o-animation:cssload-loading-ani2 1.15s linear infinite;
					-ms-animation:cssload-loading-ani2 1.15s linear infinite;
					-webkit-animation:cssload-loading-ani2 1.15s linear infinite;
					-moz-animation:cssload-loading-ani2 1.15s linear infinite;
			}

			@keyframes cssload-loading-ani1{
				25%{
					z-index: 2;
				}
				50%{
					transform:translate(81px,0) scale(1);
				}
				75%{
					transform:translate(0,0) scale(0.75);
				}
				100%{
					transform:translate(-81px,0) scale(1);

				}
			}

			@-o-keyframes cssload-loading-ani1{
				25%{
					z-index: 2;
				}
				50%{
					-o-transform:translate(81px,0) scale(1);
				}
				75%{
					-o-transform:translate(0,0) scale(0.75);
				}
				100%{
					-o-transform:translate(-81px,0) scale(1);

				}
			}

			@-ms-keyframes cssload-loading-ani1{
				25%{
					z-index: 2;
				}
				50%{
					-ms-transform:translate(81px,0) scale(1);
				}
				75%{
					-ms-transform:translate(0,0) scale(0.75);
				}
				100%{
					-ms-transform:translate(-81px,0) scale(1);

				}
			}

			@-webkit-keyframes cssload-loading-ani1{
				25%{
					z-index: 2;
				}
				50%{
					-webkit-transform:translate(81px,0) scale(1);
				}
				75%{
					-webkit-transform:translate(0,0) scale(0.75);
				}
				100%{
					-webkit-transform:translate(-81px,0) scale(1);

				}
			}

			@-moz-keyframes cssload-loading-ani1{
				25%{
					z-index: 2;
				}
				50%{
					-moz-transform:translate(81px,0) scale(1);
				}
				75%{
					-moz-transform:translate(0,0) scale(0.75);
				}
				100%{
					-moz-transform:translate(-81px,0) scale(1);

				}
			}

			@keyframes cssload-loading-ani2{
				25%{
					transform:translate(0,0) scale(0.75);
				}
				50%{
					transform:translate(-81px,0) scale(1);
				}
				75%{
					z-index: 2;
				}
				100%{
					transform:translate(81px,0) scale(1);
				}
			}

			@-o-keyframes cssload-loading-ani2{
				25%{
					-o-transform:translate(0,0) scale(0.75);
				}
				50%{
					-o-transform:translate(-81px,0) scale(1);
				}
				75%{
					z-index: 2;
				}
				100%{
					-o-transform:translate(81px,0) scale(1);
				}
			}

			@-ms-keyframes cssload-loading-ani2{
				25%{
					-ms-transform:translate(0,0) scale(0.75);
				}
				50%{
					-ms-transform:translate(-81px,0) scale(1);
				}
				75%{
					z-index: 2;
				}
				100%{
					-ms-transform:translate(81px,0) scale(1);
				}
			}

			@-webkit-keyframes cssload-loading-ani2{
				25%{
					-webkit-transform:translate(0,0) scale(0.75);
				}
				50%{
					-webkit-transform:translate(-81px,0) scale(1);
				}
				75%{
					z-index: 2;
				}
				100%{
					-webkit-transform:translate(81px,0) scale(1);
				}
			}

			@-moz-keyframes cssload-loading-ani2{
				25%{
					-moz-transform:translate(0,0) scale(0.75);
				}
				50%{
					-moz-transform:translate(-81px,0) scale(1);
				}
				75%{
					z-index: 2;
				}
				100%{
					-moz-transform:translate(81px,0) scale(1);
				}
			}
		</style>
   </head>
   <body>
		<div class="cssload-container">
			<div class="cssload-loading"><i></i><i></i></div>
		</div>
   </body>
</html>