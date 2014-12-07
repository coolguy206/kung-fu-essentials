<?php include('header2.php'); ?>

<h1><?php echo $title; ?></h1>

<div class="check-out-nav"><a href="guest.php">Shipping</a> &#10137; <a href="billing.php">Billing</a> &#10137; <a href="review.php" class="active">Review</a> &#10137; Place Order</div>
<div class="box300">
<h3>Shipping Address</h3>
<p>
David Thanphilom
<address>
1234 5th Ave.<br>
Seattle, WA 98109
</address>
<a href="guest.php">Change</a>
<p>

<h3>Contact Info</h3>
<p>
Email: david@david.com<br>
Phone: (206)555-1234<br>
<a href="billing.php">Change</a>
</p>
</div><!--.box300-->

<div class="box300">
<h3>Billing Info</h3>
<p>
Visa ending in 1234
<a href="billing.php">Change</a>
</p>

<h3>Billing Address</h3>
<p>
David Thanphilom
<address>
1234 5th Ave.<br>
Seattle, WA 98109
</address>
<a href="billing.php">Change</a>
</p>
</div><!--.box300-->

<div class="box300B">
<h2>Your Order</h2>
<img src="images/kung-fu-girl-horse-stance.jpg" alt="wushu girl">
<h3>Wushu Uniform</h3>
<p>
Qty. 1<br/>
Price: $45.99<br />
Subtotal: $45.99<br />
Tax: $4.59<br/>
Shipping: Free<br />
Total: $50.58
</p>
<br>
<p>
<a href="confirmation.php" class="add-button">Place your order</a><br>
<br>
<br>
<a href="billing.php" class="add-button">Back</a>

<a href="" id="cancel" class="add-button">Cancel</a>
</p>
</div><!--.box300-->




<?php include('footer2.php'); ?>