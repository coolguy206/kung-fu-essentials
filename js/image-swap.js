$(document).ready(function(){
$('img.facebook').hover(function(){
$(this).attr('src','images/facebook-icon-hover.png');
},function(){
$(this).attr('src','images/facebook-icon.png');
});
$('img.twitter').hover(function(){
$(this).attr('src','images/twitter-icon-hover.png');
},function(){
$(this).attr('src','images/twitter-icon.png');
});
$('img.youtube').hover(function(){
$(this).attr('src','images/youtube-icon-hover.png');
},function(){
$(this).attr('src','images/youtube-icon.png');
});
$('header input[type=image]').hover(function(){
$(this).attr('src','images/search-icon-hover.png');
},function(){
$(this).attr('src','images/search-icon.png');
});
$('img.shopping-cart').hover(function(){
$(this).attr('src','images/shopping-cart-hover.png');
},function(){
$(this).attr('src','images/shopping-cart.png');
});
$('img.thumb-nail-1').hover(function(){
$('div.container img').attr('src','images/kung-fu-girl-palm.jpg');
},function(){
$('div.container img').attr('src','images/kung-fu-girl-horse-stance.jpg');
});
$('img.thumb-nail-2').hover(function(){
$('div.container img').attr('src','images/kung-fu-girl-single-leg-crane.jpg');
},function(){
$('div.container img').attr('src','images/kung-fu-girl-horse-stance.jpg');
});
});