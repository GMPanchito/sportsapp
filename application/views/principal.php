<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sports App | Inicio</title>
	<link href="<?=base_url()?>assets/css/styles.css" type="text/css" media="all" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/index-style.css" type="text/css" media="all" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jugadores_style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/reset.css">
	<link href="<?=base_url()?>assets/css/styles.css" type="text/css" media="all" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/index-style.css" type="text/css" media="all" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jugadores_style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/reset.css">
	<!-- Skitter Styles -->
	<link href="<?=base_url()?>assets/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	<script src="<?=base_url()?>assets/js/jquery-1.10.2.min.js"></script>
	<script src="<?=base_url()?>assets/js/semantic.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/semantic.css">
	<!-- Skitter JS -->
	<script type="text/javascript" language="javascript" src="<?=base_url()?>assets/js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="<?=base_url()?>assets/js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=base_url()?>assets/js/jquery.skitter.min.js"></script>

	<!-- Script Slider -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers: false,
				autoplay: true,
				dots: true,
				numbers_align: 'center'
			});
		});
	</script>

	<!-- Script Twitter -->
	<script>
	!function(d,s,id){
		var js,fjs=d.getElementsByTagName(s)[0],
		p=/^http:/.test(d.location)?'http':'https';
		if(!d.getElementById(id)){
			js=d.createElement(s);
			js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js,fjs);
		}}
		(document,"script","twitter-wjs");
		</script>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=128278730528849";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
</head>
<body>
	<header>
		<div id="divlogo">
			<img src="<?=base_url()?>assets/images/sportsapp.png" alt="SportsApp">

		    <div style="display:none;" id="login" class="ui green button">Log-in</div>

		</div>
		<div id="like" class="fb-like" data-href="https://facebook.com/sportsapp.cd" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
	</header>
	<nav>
		<div id="menusito" class="ui green inverted menu" style="padding-left:200px;padding-right:200px;">
		  <a class="item" id="inicio" href="<?=base_url()?>index.php/principal">
		    <i class="home icon"></i>Inicio
		  </a>
		  <a class="item">
		    <i class="trophy icon"></i> Equipos
		  </a>
		  <a class="item" href="<?=base_url()?>index.php/perfil">
		    <i class="users icon"></i> Jugadores
		  </a>
		  <a class="item" href="<?=base_url()?>index.php/empresa">
		    <i class="globe icon"></i> ¿Quienes somos?
		  </a>
		</div>
	</nav>
	<article>
		<section>
		<div id="content">
			<div class="border_box">
				<div class="box_skitter box_skitter_large">
					<ul>
						<li><img src="<?=base_url()?>assets/images/example/001.jpg"/></li>
						<li><img src="<?=base_url()?>assets/images/example/002.jpg"/></li>
						<li><img src="<?=base_url()?>assets/images/example/003.jpg"/></li>
						<li><img src="<?=base_url()?>assets/images/example/004.jpg"/></li>	
					</ul>
				</div>
			</div>
			<div id="twitter">
			<a class="twitter-timeline" href="https://twitter.com/SportsAppCD" data-widget-id="448986518917369856">Tweets por @SportsAppCD</a
				</div>
			</div>
		</section>
	</article>
	<div id="noticias">
		<section id="top10basquet"><h2 class="header top10basquet">Top 10 Basquetbol</h2></section>
		<section id="top10beis"><h2 class="header top10">Top 10 Beisbol</h2>
			<ul>
				<li>Nombre1</li>
				<li>Nombre2</li>
				<li>Nombre3</li>
				<li>Nombre4</li>
				<li>Nombre5</li>
				<li>Nombre6</li>
				<li>Nombre7</li>
				<li>Nombre8</li>
				<li>Nombre9</li>
				<li>Nombre10</li>
			</ul>
		</section>
		<section id="top10fut"><h2 class="header top10">Top 10 Futbol</h2></section>
	</div>
	<div id="footer">
			<div id="socialbar">
						<font face=Arial size=2 color=b8b8b8>
						<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;<b>Copyright ©2013 SportsApp. All rights reserved. Designed by <a href="#">Cultura Digital.</b></a>
						<ul>
							<li><a href="https://www.facebook.com/sportsapp.cd"><img id="t" src="<?=base_url()?>assets/images/t.png" width=18 height=20></a></li>
							<li><a href="https://twitter.com/@SportsAppCD"><img id="f" src="<?=base_url()?>assets/images/f.png" width=18 height=20></a></li>
						</ul>
					</div>
					<div id="logo2" src="<?=base_url()?>assets/images/logo2.png"></div>
			</div>
</body>
</html>