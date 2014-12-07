<?php

$page = basename($_SERVER['SCRIPT_NAME']);


switch($page) {
/* Home Page */

case 'index.php':

$title = 'Home';

break;
/* About Pages */

case 'about.php':

$title = 'About';

break;

case 'guest.php':

$title = 'Guest Checkout';

break;

case 'sign-in.php':

$title = 'Sign In';

break;

case 'create-account.php':

$title = 'Create Profile';

break;

case 'billing.php':

$title = 'Billing';

break;

case 'shopping-cart.php':

$title = 'Your Shopping Cart';

break;

case 'support.php':

$title = 'Support';

break;

case 'confirmation.php':

$title = 'Confirmation';

break;

case 'review.php':

$title = 'Review your order';

break;

case 'return.php':

$title = 'Return Policy';

break;

case 'exchanges.php':

$title = 'Exchanges';

break;

case 'affiliate.php':

$title = 'Affiliate Program';

break;

case 'sponsor.php':

$title = 'Sponsor Program';

break;

case 'faq.php':

$title = 'FAQ';

break;

case 'sitemap.php':

$title = 'Sitemap';

break;

case 'contact.php':

$title = 'Contact';

break;

case 'apparel.php':

$title = 'Apparel';

break;

case 'uniforms.php':

$title = 'Uniforms';

break;

case 'shoes.php':

$title = 'Shoes';

break;

case 'product-details.php':

$title = 'Wushu Uniform';

break;

case 'weapons.php':

$title = 'Weapons';

break;


case 'long-weapons.php':

$title = 'Long Weapons';

break;

case 'flexible-weapons.php':

$title = 'Flexible Weapons';

break;

case 'double-weapons.php':

$title = 'Double Weapons';

break;

case 'swords-weapons.php':

$title = 'Swords';

break;

case 'training.php':

$title = 'Training';

break;

case 'sparring.php':

$title = 'Sparring';

break;

case 'equipment.php':

$title = 'Equipment';

break;

case 'ointments.php':

$title = 'Ointments';

break;

case 'track-order.php':

$title = 'Track Order';

break;

case 'news.php':

$title = 'News';

break;

}

?>