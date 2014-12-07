<?php include('titles.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?> | Kung Fu Essentials | Seattle, WA</title>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/image-swap.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<script type="text/javascript" src="js/faq.js"></script>
<script type="text/javascript">
$(document).ready(function(){
//$('.gallery img:gt(0)').hide();
 //setInterval(function(){
      //$('.gallery img:first-of-type').fadeOut()
         //.next('img').fadeIn()
         //.end().appendTo('.gallery');}, 
      //3000);
 $('#gallery a').hide();
 slideshow();
});
function slideshow() {
 var current = $('#gallery .show');
 var next =	current.next().length ? current.next() : current.parent().children(':first');
 current.hide().removeClass('show');
 next.fadeIn().addClass('show');
 setTimeout(slideshow,3000);
}
</script>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<div class="utilities-wrapper">
<div class="utilities">
<ul>
<li><a href="sign-in.php">Sign In</a></li>
<li><a href="sign-in.php">My Accout</a></li>
<li><a href="support.php">Support</a></li>
<li><a href="">Live Chat</a></li>
</ul>
</div><!--.utilities-->
</div><!--.utilities-wrapper-->

<div class="header-wrapper">
<header>
<a href="index.php"><img src="images/logo.png" alt="Kung Fu Essentials" class="logo" /></a>

<form action="" method="">
<input type="text" value="Search" />
<input type="image" src="images/search-icon.png" alt="search" />
</form>

<a href="shopping-cart.php"><img src="images/shopping-cart.png" alt="shopping cart" class="shopping-cart"/></a>

</header><!--.header-->
</div><!--.header-wrapper-->

<div class="nav-wrapper">
<nav>
<ul>
<li><a href="weapons.php">Weapons</a></li>
<li><a href="training.php">Training</a></li>
<li><a href="apparel.php">Apparel</a></li>
<li><a href="track-order.php">Track Order</a></li>
<li><a href="news.php">News</a></li>
</ul>
</nav><!--.nav-->
</div><!--.nav-wrapper-->

<div class="content-wrapper">
<section class="content">
