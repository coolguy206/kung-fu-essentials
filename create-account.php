<?php include('header.php'); ?>
<h1><?php echo $title; ?></h1>

<div class="box620">

<form action="" method="">
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
<label>Birth date</label>
<input type="text"/>
<label>Gender</label>
<select>
<option>Male</option>
<option>Female</option>
</select>
<label>Phone</label>
<input type="text"/>
<label>Email</label>
<input type="email"/>
<label>Verify Email</label>
<input type="email"/>
<label>Password</label>
<input type="password"/>
<label>Verify Password</label>
<input type="password"/>

</form>
<a href="billing.php" class="add-button2">Create Account</a>

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




<?php include('footer.php'); ?>