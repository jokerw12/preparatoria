<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/slid.css">
	<title>Galeria</title>
</head>
<body>
<center><div class="container">
	<img src="images/epo.png">
</div></center>
	<header>
		
		<div class="container">
			<div class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">	
						<button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar-1">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>	
							<span class="icon-bar"></span>	
			
						</button>
						<!--<a href="#" class="navbar-brand">Preparatoria 104</a>-->
					</div>
			
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Inicio</a></li>
							<li class="active"><a href="galeria.php">Galeria</a></li>
							<li><a href="eventos.php">Eventos</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Inicio sesion <span class="caret"></span>

								</a>
								<ul class="dropdown-menu">
									<li><form class="navbar-form" action="valida_user.php" method="post">
									
											<div class="form-group">
												<input class="form-control" type="text" name="user" id="#" placeholder="Usuario">
												<input class="form-control" type="password" name="password" id="#" placeholder="Password">
											</div>
											<br>
											<input class="btn btn-primary" type="submit" value="aceptar">
										</form>
									</li>
									<li class="divider"></li>
									<li><a href="">Registro</a></li>
								</ul>

							</li>
			
						</ul>
			
					</div>
				</div>
			</div>
		</div>

		
	</header>
	<section class="main container">
		
	<div class="slides">
			<img src="images/1.jpg" alt="">
			<img src="images/2.jpg" alt="">
			<img src="images/3.jpg" alt="">
		</div>
	</div>
			
	</section>

	<footer></footer>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slides.js"></script>
	<script>
		$(function(){
			  $(".slides").slidesjs({
			    play: {
			      active: true,
			        // [boolean] Generate the play and stop buttons.
			        // You cannot use your own buttons. Sorry.
			      effect: "slide",
			        // [string] Can be either "slide" or "fade".
			      interval: 4000,
			        // [number] Time spent on each slide in milliseconds.
			      auto: true,
			        // [boolean] Start playing the slideshow on load.
			      swap: true,
			        // [boolean] show/hide stop and play buttons
			      pauseOnHover: false,
			        // [boolean] pause a playing slideshow on hover
			      restartDelay: 2500
			        // [number] restart delay on inactive slideshow
			    }
			});
		});
 	</script>
</body>
</html>