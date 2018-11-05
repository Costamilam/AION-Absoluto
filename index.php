<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AION Absoluto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site oficial AION Absoluto">
	<meta name="keywords" content="AION, AION absoluto, absoluto, plaza, plazinha, CommandInvest, hotel, investimento, condo-hotel">
	<meta name="author" content="Guilherme Costamilam Pereira">

	<link rel="shortcut icon" href="./images/commandinvest_icone.png">

  	<!-- Facebook and Twitter integration -->
	<!--meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" /-->

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- Google Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126426371-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-126426371-3');

		let isOpen = false;
	</script>

    <!-- Smartsupp Live Chat script -->
	<script type="text/javascript">
		var _smartsupp = _smartsupp || {};
		_smartsupp.key = 'f1373cdf7909677323fca61f316709add56923ee';
		window.smartsupp||(function(d) {
			var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
			s=d.getElementsByTagName('script')[0];c=d.createElement('script');c.src='https://www.smartsuppchat.com/loader.js?';
			c.addEventListener('load', function() {
				const iframeDocument = document.querySelector('iframe').contentDocument;
				(function verify() {
					if (iframeDocument.getElementById('widgetPanel') === null) {
						setTimeout(verify, 500);
					} else {
						iframeDocument.getElementById('widgetPanel').addEventListener('click', function() {
							if(!isOpen) {
								gtag('event', 'chat', {
									'event_label' : 'opened',
									'value': 'true'
								});
								isOpen = true;
							}
						});
					}
				})();
			});
			s.parentNode.insertBefore(c,s);
		})(document);
	</script>
	<script>
		setTimeout(function() {
			if (document.getElementsByClassName('js-gtco-nav-toggle')[0]) document.getElementsByClassName('js-gtco-nav-toggle')[0].style.display = 'none'
		}, 100)
		setTimeout(function() {
			if (document.getElementsByClassName('js-gtco-nav-toggle')[0]) document.getElementsByClassName('js-gtco-nav-toggle')[0].style.display = 'none'
		}, 500)
	</script>

    <style>
		#background {
			position: fixed;
			height: 100%;
			width: 100%;
			top: 0;
			left: 0;
			background: #fff;
			background: -moz-linear-gradient(left, #000 0%, #309fbf 50%, #000 100%);
			background: -webkit-linear-gradient(left, #000 0%,#309fbf 50%,#000 100%);
			background: linear-gradient(to left, #309fbf 0%, #000 35%, #000 65%, #309fbf 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000', endColorstr='#000',GradientType=1 );
		}
		#background img {
			height: 100%;
		}
		@media all and (max-width: 1100px) {
			.menu-1 {
				display: none;
			}
			#page > nav > div > div > div.col-sm-2.col-xs-12.center {
				width: 100%;
			}
		}
		#gtco-header {
			background-image: url(images/front_light.png), linear-gradient(to left, #309fbf 0%, #000 100%);
			background-size: auto calc(100% - 100px), cover;
			background-position: right bottom;
		}
		#gtco-features, #gtco-hotel, #gtco-absolute, #gtco-footer {
			background-color: #efefef;
		}
		#gtco-absolute .gtco-heading h2 {
			text-align: left;
		}
		#gtco-absolute .gtco-heading h2:before {
			left: 5%;
		}
		#gtco-absolute .gtco-heading p {
			text-align: justify;
		}
		#gtco-sub {
			background: #303841;
			padding: 7em 0;
			clear: both;
			position: relative;
		}
    	#gtco-features .icon {
    		width: 120px;
    		height: 120px;
    	}
    	#gtco-features .icon {
    		overflow: hidden;
    	}
    	#gtco-features .icon img {
    		width: 100%;
    	}
    	#gtco-hotel .icon img {
			height: 100%;
    	}
    	.gtco-flex {
    		float: initial;
    	}
    	#gtco-features-3 {
    		margin-top: 75px;
    	}
    	#gtco-features-3 .feature .icon {
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			-ms-border-radius: 5px;
			border-radius: 5px;
			width: 300px;
	     	max-width: 100%;
			height: 200px;
		    margin-top: -25px;
			overflow: hidden;
			background: transparent !important;
    	}
    	.gtco-image {
    		width: 100%;
    		display: block;
    		margin: 15px auto;
    	}
    	.gtco-cover .overlay {
    		background: rgba(0, 0, 0, 0.5);
    	}
        nav {
            position: fixed !important;
            background-color: #021523;
        }
        nav > .gtco-container {
            max-width: none;
        }
		nav > div > div > div:nth-child(2) {
			line-height: 50px;
		}
        .large {
            line-height: 5;
        }
		.large > div > div > div:nth-child(2) {
			line-height: 100px;
		}
		#gtco-logo img {
			height: 50px;
			transition: linear 0.5s;
		}
		.gtco-nav ul li a {
			text-transform: uppercase;
			font-weight: bold;
		}
		.text-right {
			text-align: right;
		}
    	.gtco-nav .gtco-contact ul li:nth-child(1) {
    		color:  #021523;
		    font-weight: bold;
		    padding: 30px 10px;
		    font-size: 20px;
    	}
		#gtco-header {
			height: 100vh;
		}
        #gtco-header .display-tc, .gtco-cover .display-tc {
            vertical-align: top;
            padding-top: 125px;
        }
    	.gtco-nav .gtco-contact ul li a i, 
    	.feature-center .icon i, a, 
    	.gtco-social-icons li a, 
    	.gototop a, a:focus {
    		color: #021523;
    	}
        .gototop a:hover {
    		color: #fff;
        }
    	.gtco-nav .gtco-contact ul li a {
    		font-size: 20px;
    	}
    	#gtco-features-3 {
    		padding-top: 100px;
    	}
    	#gtco-features-3 .feature, 
    	#gtco-features-3 .feature.feature-2:before, 
    	#gtco-features-3 .feature.feature-2:after, 
    	.gtco-heading h2:before,
    	.btn-primary {
    		background-color: #021523 !important;
    	}
    	a:hover, .gtco-social-icons li a:hover {
    		color: #000;
    	}
    	.owl-theme .owl-controls .owl-nav [class*="owl-"] i, .owl-theme .owl-controls .owl-nav [class*="owl-"] i:hover {
    		background-color: #021523 !important;
    	}
    	.owl-theme .owl-controls .owl-nav [class*=owl-]:hover {
    		color: #000;
    	}
    	.owl-theme .owl-dots .owl-dot span {
    		background-color: #021523;
    	}
    	.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    		border-color: #021523;
    	}
    	.btn-white.btn-outline:active {
    		color: #fff;
    		border: 2px solid #fff;
    	}
    	.btn-white:active {
    		background: none !important;
    	}
		.btn-primary {
			border: none !important;
		}
		.btn-primary:hover {
			background-color: transparent !important;
			color: #021523;
		}
		.btn-primary:active {
			background-color: transparent !important;
			color: #021523;
		}
		.btn-primary:focus {
			background-color: transparent !important;
			color: #021523;
		}
    	#gtco-footer {
    		padding-bottom: 50px;
			margin-top: 700px;
			background-color: #fff;
    	}
    	#gtco-footer img {
    		margin-bottom: 15px;
    	}
    	.owl-carousel .owl-stage-outer {
    		overflow: initial;
    	}
    	#gtco-products .gtco-container .row {
    		overflow: hidden;
    	}
    	.owl-theme .owl-dots {
    		position: initial;
    	}
        .gtco-nav ul li a:focus {
            color: rgba(255, 255, 255, 0.5);
        }
		#gtco-portfolio-list li a.color-2:before {
			background: rgba(37, 213, 213, 0.7);
		}
		#gtco-portfolio-list li a.color-7:before {
			background: rgba(28, 114, 28, 0.7);
		}
		#gtco-portfolio-list li a.color-8:before {
			background: rgba(200, 200, 40, 0.7);
		}
		#gtco-portfolio-list li a.color-7:hover:before {
			background: rgba(28, 114, 28, 0);
		}
		#gtco-portfolio-list li a.color-8:hover:before {
			background: rgba(200, 200, 40, 0);
		}
		#gtco-features .feature-center {
			height: 220px;
		}
		.showHide {
			display: none;
			overflow: hidden;
			transition: height 1s ease-in-out;
		}
		.center {
			justify-content: center;
			display: flex;
		}
		#background img, #gtco-products img {
			-webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
			box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
		}
		#gtco-news {
			background: #efefef;
			padding: 7em 0;
			clear: both;
			position: relative;
		}
		#gtco-news .gtco-container .row:nth-child(2) {
			display: flex;
		}
		#gtco-news .gtco-container .row:nth-child(2) > div {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}
		#gtco-news .gtco-container .row:nth-child(2) > div > a {
			white-space: initial;
		}
		@media (max-width: 768px) {
			#gtco-news .gtco-container .row:nth-child(2) {
				display: block;
			}
		}

		[modal-src], .modal img {
			cursor: pointer;
		}
		.modal {
			display: none;
			position: fixed;
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgb(0,0,0);
			background-color: rgba(0,0,0,0.9);
			z-index: 99999;
		}
		.modal-content {
			margin: auto;
			display: block;
			width: 80%;
			max-width: 700px;
		}
		.modal-content {    
			-webkit-animation-name: zoom;
			-webkit-animation-duration: 0.6s;
			animation-name: zoom;
			animation-duration: 0.6s;
		}

		@-webkit-keyframes zoom {
			from {-webkit-transform:scale(0)} 
			to {-webkit-transform:scale(1)}
		}

		@keyframes zoom {
			from {transform:scale(0)} 
			to {transform:scale(1)}
		}

		/* 100% Image Width on Smaller Screens */
		@media only screen and (max-width: 700px){
			.modal-content {
				width: 100%;
			}
		}
    </style>
	</head>
	<body>
	<div class="gtco-loader"></div>
	
	<div id="page">
		<div id="background" class="center">
			<img src="images/Fachada_02.jpg">
		</div>
		<div id="modalImage" class="modal">
			<img class="modal-content">
		</div>
		<div id="modalPDF" class="modal">
			<div id="gtco-sub" class="scrollspy">
				<div class="gtco-container">
					<div class="row animate-box fadeInUp animated-fast">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
							<p>Preencha todos os campos para iniciar o download do arquivo.</p>
						</div>
					</div>
					<div class="row animate-box fadeInUp animated-fast">
						<div class="col-md-8 col-md-offset-2">
							<form id="downloadForm" action="" method="post">
								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="name">Nome</label>
										<input name="name" type="text" id="name" class="form-control" placeholder="Nome" required pattern="[A-ẑ ]{2,100}">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="phone">Telefone</label>
										<input name="phone" type="tel" id="phone" class="form-control" placeholder="Telefone" required pattern="^[0-9\(\)\-. ]{8,17}$">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="email">Email</label>
										<input name="email" type="text" id="email" class="form-control" placeholder="Email" required>
									</div>
								</div>

								<div class="form-group">
									<input name="submit" type="submit" value="Iniciar Download" class="btn btn-primary btn-lg">
									<input name="reset" type="button" value="Cancelar" class="btn btn-primary btn-lg" onclick="$('#modalPDF').css('display', 'none');">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="gtco-nav large" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-lg-2 center">
						<div id="gtco-logo">
							<a a-event="click,redirect,intern,CommandInvest" href="http://commandinvest.com"><img src="images/logo_header.png" alt="Logo CommandInvest"></a>
						</div>
					</div>
					<div class="col-md-12 col-lg-10 hidden-xs hidden-sm center menu-1">
						<ul>
							<li class="active"><a href="#gtco-header">Início</a></li>
							<li><a href="#gtco-absolute">Conceito</a></li>
							<li><a href="#gtco-hotel">Empreendimento</a></li>
							<li><a href="#gtco-features">Infraestrutura</a></li>
							<li><a href="#gtco-portfolio">Espaços</a></li>
							<li><a href="#gtco-products">Localização</a></li>
							<li><a href="#gtco-news">Notícias</a></li>
							<li><a href="#gtco-subscribe">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<header id="gtco-header" class="gtco-cover scrollspy" role="banner">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="display-t">
							<div class="display-tc">
								<img style="margin-top: 50px;" class="col-xs-12 col-md-8 col-md-offset-2" src="./images/logo-aion.png" alt="Logo AION">
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="gtco-absolute" class="gtco-section scrollspy">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>INTELIGÊNCIA</h2>
						<h2>SUSTENTABILIDADE</h2>
						<h2>COMODIDADE</h2>
						<p>O AION foi concebido para representar o mais alto nível conceitual que um empreendimento pode oferecer: o conceito ABSOLUTO.</p>
						<p>Entregamos aos nossos investidores e residentes todas as suas expectativas. Alta rentabilidade, enorme valorização, conforto, tecnologia e toda a assistência que somente uma empresa que existe para seus clientes pode disponibilizar.</p>
						<button a-event="click,contact,download,open" class="btn btn-primary btn-lg" onclick="$('#modalPDF').css('display', 'block');">Baixar PDF</button>
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-hotel" class="gtco-section scrollspy">
			<div class="gtco-container">
				<div class="row">
					<div class="gtco-heading animate-box">
						<h2 style="text-align: center;">O Empreendimento</h2>
						<p>O AION começa a impressionar, com uma fachada única, imponente e moderna que se encaixa perfeitamente com a revitalização do Centro Histórico de Porto Alegre.</p>
						<p>Residentes e locatários encontrarão a mais completa e sofisticada estrutura de comodidades e serviços.</p>
						<p>Uma obra de arte no coração da capital gaúcha.</p>
						<p>Viva no AION o seu melhor tempo, aqui é seu espaço, aqui você tem tudo!</p>
					</div>
				</div>

				<div id="gtco-features-3">
					<div class="gtco-flex">
						<div class="feature feature-1 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-inner">
								<span class="icon">
									<img src="images/loft_in.png" modal-src="images/loft_in.png">
								</span>
								<h3>Loft</h3>
								<p>Os lofts possuem de 25 a 30 m² e proporcionam conforto, funcionalidade e elegância em um espaço compacto e charmoso.</p>
							</div>
						</div>

						<div class="feature feature-2 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-inner">
								<span class="icon">
									<img src="images/apartment_in.png" modal-src="images/apartment_in.png">
								</span>
								<h3>Apartamento</h3>
								<p>Os apartamentos possuem 40 m² e são ideais tanto para locação, investimento ou moradia. Todos os apartamentos podem ser adaptados à acessibilidade (PNE) ou seguir o conceito senior <abbr title="Um lar onde você pode desfrutar sua melhor idade.">living house</abbr>.</p>
							</div>
						</div>

						<div class="feature feature-3 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-inner">
								<span class="icon">
									<img src="images/studio_in.png" modal-src="images/studio_in.png">
								</span>
								<h3>Studio</h3>
								<p>Os Studios possuem de 20 a 24 m² e são ideais tanto para locação, investimento ou moradia especialmente para estudantes, advogados ou empresários, pois possuem móveis inteligentes.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div id="gtco-features" class="scrollspy">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box fadeInUp animated-fast">
						<h2>Infraestrutura completa</h2>
						<p>No AION você se torna integrado e acolhido por um lugar que foi projetado para você trabalhar, morar e ter toda a comodidade em um único local.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/group_icon.png">
							</span>
							<h3>Sala de reuniões e vídeoconferência</h3>
						</div>
					</div>
					<div class="showHide col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/laundry_icon.png">
							</span>
							<h3>Lavanderia</h3>
						</div>
					</div>
					<div class="showHide col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/translate_icon.png">
							</span>
							<h3>Translato</h3>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/academy_icon.png">
							</span>
							<h3>Academia</h3>
						</div>
					</div>
					<div class="showHide col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/maid_icon.png">
							</span>
							<h3>Camareira</h3>
						</div>
					</div>
					<div class="showHide col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/sun_icon.png">
							</span>
							<h3>Energia Solar</h3>
						</div>
					</div>
					<div class="showHide col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/rain_icon.png">
							</span>
							<h3>Captação da água da chuva</h3>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/automation_icon.png">
							</span>
							<h3>Automação residencial</h3>
						</div>
					</div>
					<div class="showHide col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/chair_icon.png">
							</span>
							<h3>Móveis inteligentes</h3>
						</div>
					</div>
					<div class="showHide col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/accessibility_light_icon.png">
							</span>
							<h3>Acessibilidade (PNE)</h3>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<img src="images/restaurant_icon.png">
							</span>
							<h3>Restaurante</h3>
						</div>
					</div>
					<div class="showHide col-md-3 col-sm-6 col-xs-12">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon" style="display: flex; align-items: center;">
								<img style="width: 50%;" src="images/drink_icon.png">
								<img style="width: 50%;" src="images/coffee_icon.png">
							</span>
							<h3>Bar e café</h3>
						</div>
					</div>
					<div class="col-xs-12 center">
						<button onclick="showHide(this)" class="btn btn-primary btn-lg">Ver Mais</button>
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-portfolio" class="gtco-section scrollspy">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Espaços</h2>
						<p>Um espaço completo para o seu bem-estar, contando com um restaurante localizado no segundo andar com boa comida e atendimento personalizado, a comodidade de um sofisticado bar e café 24 horas, um moderno salão de festas e sala de jogos com vista para o Centro Histórico e Cais do Porto, tudo isso e muito mais.</p>
					</div>
				</div>

				<div class="row row-pb-md">
					<div class="col-md-12">
						<ul id="gtco-portfolio-list">
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/lobby.png);" modal-src="images/lobby.png"> 
								<a href="#" class="color-1">
									<div class="case-studies-summary">
										<h2>Lobby</h2>
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/coffee.png);" modal-src="images/coffee.png">
								<a href="#" class="color-2">
									<div class="case-studies-summary">
										<h2>Bar e café</h2>
									</div>
								</a>
							</li>


							<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/restaurant.png);" modal-src="images/restaurant.png">
								<a href="#" class="color-3">
									<div class="case-studies-summary">
										<h2>Restaurante</h2>
									</div>
								</a>
							</li>
							<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url('images/party_room.png');" modal-src="images/party_room.png">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<h2>Salão de Festas</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/sauna.png);" modal-src="images/sauna.png"> 
								<a href="#" class="color-5">
									<div class="case-studies-summary">
										<h2>Sauna</h2>
									</div>
								</a>
							</li>
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/academy.png);" modal-src="images/academy.png">
								<a href="#" class="color-6">
									<div class="case-studies-summary">
										<h2>Academia</h2>
									</div>
								</a>
							</li>

							<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/rooftop_in.png);" modal-src="images/rooftop_in.png">
								<a href="#" class="color-7">
									<div class="case-studies-summary">
										<h2>Sala de Massagem</h2>
									</div>
								</a>
							</li>
							<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url('images/rooftop_hall.png');" modal-src="images/rooftop_hall.png">
								<a href="#" class="color-8">
									<div class="case-studies-summary">
										<h2>RoofTop</h2>
									</div>
								</a>
							</li>
                            <li class="animate-box fadeIn animated-fast" data-animate-effect="fadeIn" style="width: 100%;">
                                <iframe src="https://www.youtube.com/embed/9XIpszyiCq0?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" style="
                                    width: 100vmin;
                                    height: 100%;
                                    margin: auto;
                                    display: block;
                                "></iframe>
							</li>
						</ul>		
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-products" class="scrollspy">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Localização</h2>
						<p>Você será proprietário do 1º empreendimento do Rio Grande do Sul com o conceito ABSOLUTO. Venha nos conhecer na Rua Senhor dos Passos, 154, no Centro Histórico de Porto Alegre.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-xs-12">
						<img style="width: 100%;" src="images/map.png" alt="Localização AION">
					</div>
					<div class="col-xs-12 center" style="margin-top: 40px;">
						<a a-event="click,redirect,external,Maps" href="https://www.google.com/maps/place/R.+Sr.+dos+Passos,+154+-+Centro+Hist%C3%B3rico,+Porto+Alegre+-+RS,+90010-210/" target="_blank">
							<button class="btn btn-primary btn-lg">Ver no mapa</button>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-news" class="scrollspy">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Notícias</h2>
						<p>Saiba o que os veículos de notícias estão falando sobre o investimento.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-xs-12 center" style="margin-top: 40px;">
						<p>Antigo Plazinha terá novo empreendimento de R$ 55 milhões.<br>Hotel foi fechado em 2015.</p>
						<a href="https://gauchazh.clicrbs.com.br/colunistas/giane-guerra/noticia/2018/10/antigo-plazinha-tera-novo-empreendimento-de-r-55-milhoes-cjn4ta74y049101pib7018dka.html" class="btn btn-primary btn-lg">Acessar gauchazh.clicrbs.com.br</a>
					</div>
					<div class="col-xs-12 center" style="margin-top: 40px;">
						<p>Porto Alegre: Plazinha da lugar a empreendimento com 204 unidades entre apartamentos, studios e lofts. CommandInvest Incorporadora aposta na revitalização do Centro da Capital e investe 55 milhões de reais no projeto.</p>
						<a href="http://felipevieira.com.br/site/aion-absoluto-empreendimento-com-conceito-unico-no-centro-de-porto-alegre/" class="btn btn-primary btn-lg">Acessar felipevieira.com.br</a>
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-subscribe" class="scrollspy">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Entre em Contato</h2>
						<p>Está interessado? Ligue para (51) 3328.0083 e fale com um de nossos analistas financeiros
						ou envie-nos uma mensagem e entraremos em contato.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<form id="contactForm" action="" method="post">
							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="name">Nome</label>
									<input name="name" type="text" id="name" class="form-control" placeholder="Nome" required pattern="[A-ẑ ]{2,100}">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="phone">Telefone</label>
									<input name="phone" type="tel" id="phone" class="form-control" placeholder="Telefone" pattern="^[0-9\(\)\-. ]{8,17}$">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="email">Email</label>
									<input name="email" type="text" id="email" class="form-control" placeholder="Email" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="message">Mensagem</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Mensagem" required></textarea>
								</div>
							</div>

							<div class="form-group">
								<input name="submit" type="submit" value="Enviar Mensagem" class="btn btn-primary btn-lg">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-p b-md">
					<div>
						<img class="col-xs-12 col-md-3" src="./images/logo_preto_fundo_transparente.png" alt="Logo CommandInvest preto">
					</div>
					
					<div class="col-xs-12 col-md-4">
						<div class="gtco-widget">
							<p class="col-xs-12">
								A CommandInvest atua como incorporadora e construtora, além da gestão de projetos destinados a investidores.
							</p>
						</div>
					</div>

					<div class="col-xs-12 col-md-5">
						<div class="gtco-widget">
							<ul class="gtco-quick-contact">
								<li><a a-event="click,contact,call,(51) 3328-0083" href="tel://555133280083"><i class="icon-phone"></i> (51) 3328.0083</a></li>
								<li><a a-event="click,contact,mail,contato@commandinvest.com" href="mailto://contato@commandinvest.com"><i class="icon-mail2"></i> contato@commandinvest.com</a></li>
								<li><a a-event="click,redirect,external,Maps" href="https://www.google.com/maps/dir//Av.+Carlos+Gomes,+700+-+511+-+Auxiliadora,+Porto+Alegre+-+RS,+90480-001/" target="_blank"><i class="icon-location-pin"></i> Av. Carlos Gomes, 700 sala 511 Porto Alegre - RS</a></li>
								<li>
									<ul class="gtco-social-icons">
										<!--li><a a-event="click,redirect,social_media,Facebook" target="_blank" href="https://pt-br.facebook.com/commandinvest/"><i class="icon-facebook"></i></a></li-->
										<li><a a-event="click,redirect,social_media,LinkedIn" target="_blank" href="https://linkedin.com/company/commandinvestoficial"><i class="icon-linkedin"></i></a></li>
										<li><a a-event="click,redirect,social_media,Skype" target="_blank" href="https://join.skype.com/invite/IJoG0amfds68"><i class="icon-skype"></i></a></li>
										<!--li><a a-event="click,redirect,social_media,Twitter" target="_blank" href="https://twitter.com/commandinvest"><i class="icon-twitter"></i> </a></li-->
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<hr>

				<div class="row copyright">
					<div class="col-xs-12">
						<div class="text-center">
							<small class="block">CommandInvest © 2018. Todos os direitos reservados.</small> 
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#page" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Mansory -->
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

    <script>
        $(document).on("scroll",function(){
            if($(document).scrollTop() > 0){
                $('nav').removeClass("large");
            } else{
                $('nav').addClass("large");
            }
		});

		$('a[href^="#"]').on('click',function (e) {
			e.preventDefault();

			var target = this.hash;
			var $target = $(target);

			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 900, 'swing');
		});

        $(window).bind('scroll', function() {
            var currentTop = $(window).scrollTop();
            var elems = $('.scrollspy');
            elems.each(function(index){
                var elemTop 	= $(this).offset().top;
                var elemBottom 	= elemTop + $(this).height();
                if(currentTop >= elemTop && currentTop <= elemBottom){
                    var id 		= $(this).attr('id');
                    var navElem = $('a[href="#' + id+ '"]');
                    navElem.parent().addClass('active').siblings().removeClass( 'active' );
                }
            })
        });

		for (element of document.querySelectorAll('[a-event]')) {
			const config = element.getAttribute('a-event').split(',');

			$(element).on(config[0], () => 
				gtag('event', config[1], {
					'event_category' : config[2],
					'event_label': config[3]
				})
			);
		}

		$('[modal-src]').click(function() {
			$('#modalImage img')[0].src = this.getAttribute('modal-src');
			$('#modalImage').css('display', 'block');
		});

		$('#modalImage img').click(function() {
			$('#modalImage').css('display', 'none');
		});

		const $grid = $('#gtco-features .row:nth-child(2)').masonry({
			transitionDuration: '0.8s'
		});
		let status = false;
		function showHide(element) {
			status = !status;
			$('.showHide').css('display', status ? 'block' : 'none');
			element.innerHTML = status ? 'Ver Menos' : 'Ver Mais';
			$grid.masonry('layout');
		}

		$('#downloadForm').on('submit', function(e) {
			e.preventDefault();

			let xhr = new XMLHttpRequest();  
			xhr.open("POST", 'api.php?action=download', true);
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhr.responseType = "blob";
			xhr.onload = function() {
				let link = document.createElement('a');
				link.href = URL.createObjectURL(xhr.response);
				link.download = "AION Absoluto.pdf";
				link.click();

				gtag('event', 'contact', {
					'event_category' : 'download',
					'event_label': 'send'
				});

			}
			xhr.send(`&name=${$('#downloadForm [name="name"]').val()}&phone=${$('#downloadForm [name="phone"]').val()}&email=${$('#downloadForm [name="email"]').val()}`);
			$('#modalPDF').css('display', 'none');
			alert('Fazendo download... Aguarde um instante.');
		});

		$('#contactForm').on('submit', function(e) {
			e.preventDefault();

			gtag('event', 'contact', {
				'event_category' : 'message',
				'event_label': 'send'
			});

			$.ajax({
				url: 'api.php?action=contact',
  				method: 'POST',
				data: {
					name: $('#contactForm [name="name"]').val(),
					phone: $('#contactForm [name="phone"]').val(),
					email: $('#contactForm [name="email"]').val(),
					message: $('#contactForm [name="message"]').val()
				}
			})
			.done(function(data) {
				alert(data);
			});
		});
	</script>
	</body>
</html>
