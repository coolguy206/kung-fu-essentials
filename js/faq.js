$(document).ready(function(){
$('ul.faq li p').hide();
$('ul.faq li').click(function(){
$(this).addClass('active');
$('.active p').slideToggle();
$(this).removeClass('active');
});
});