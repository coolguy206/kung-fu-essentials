<?php include('header2.php'); ?>

<div class="check-out-nav"><a href="guest.php">Shipping</a> &#10137; <a href="billing.php" class="active">Billing</a> &#10137; <a href="review.php">Review</a> &#10137; Place Order</div>
<div class="box620">
<h3>Billing Info</h3>

<form action="" method="">
<label>Card Type</label>
<select>
<option>Visa</option>
<option>Mastercard</option>
<option>Discovery</option>
<option>American Express</option>
</select>
<label>Card Number</label>
<input type="text"/>
<label>Expire Date</label>
<input type="text"/>
<label>Security Code</label>
<input type="text"/>
</form>

<h3>Billing Address</h3>

<form action="" method="">
<input type="checkbox"> Same as Shipping Address<br>
<label>First Name</label>
<input type="text"/>
<label>Last Name</label>
<input type="text"/>
<label>Address 1</label>
<input type="text"/>
<label>Address 2</label>
<input type="text"/>
<label>City</label>
<input type="text"/>
<label>State</label>
<input type="text"/>
<label>Zip Code</label>
<input type="text"/>
</form>

<h3>Contact Info</h3>

<form action="" method="">

<label>Email</label>
<input type="emai"/>
<label>Phone</label>
<input type="text"/>

<a href="guest.php" class="add-button">Back</a>

<a href="review.php" class="add-button">Continue</a>
</form>

</div><!--.box620-->

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
</div><!--.box300-->




<?php include('footer2.php'); ?>