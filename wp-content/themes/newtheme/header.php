<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name') ?> <? wp_title();?></title>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- jQuery End -->

	<!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Bootstrap End-->

  <!-- Font Awesome -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Font Awesome End -->

	<!-- Stylesheet for this theme -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!-- Stylesheet for this theme End -->

	<script>
	$(document).ready(function(){

		// Настройка для верхнего меню
    $(window).scroll(function(){
			if($(this).scrollTop()>60){
				$("nav.navbar").addClass("navbar-white");
				$("a.navbar-brand img").attr('src','<?php bloginfo('template_url'); ?>/img/logo.png');
			}else{
				$("nav.navbar").removeClass("navbar-white");
				$("a.navbar-brand img").attr('src','<?php bloginfo('template_url'); ?>/img/logo-white.png');
			}
		});

	});
	</script>
  <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-md fixed-top">
  <div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
	    <i class="fas fa-bars"></i>
	  </button>
    <a href="/" class="navbar-brand"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" alt=""></a>
    <div class="phone d-md-none">
    	<i class="fas fa-phone"></i>
    </div>
    <div class="collapse navbar-collapse" id="navbarMain">
      <?php wp_nav_menu(array(
                        'theme_location' => 'header_menu',
                        'menu_class'     => 'navbar-nav ml-auto',
                        'container'      => false
                      )); ?>
    </div>
  </div>
</nav>
