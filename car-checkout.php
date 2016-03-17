<?php
$description="";
$pagetitle="Car Checkout |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="wrapper">
		<div class="car-profile-content">
			<div class="car-chk-text">
				<h2>Car Insurance Checkout</h2>
			</div>
			<div class="car-checkout">
				<div class="car-ch-data">
					<h3>Car Details</h3>
				</div>
				<div class="car-ch-ins">
					<img src="assets/images/sbi.png" alt="policy-logo">
					<span class="car-ct-amt">2016 Maruti Swift Dzire</span>
					<span>ZXI 1197cc</span>
					<span>Petrol</span>
					<span class="car-ct-amt"><i class="fa fa-inr"></i> 8,222</span>
				</div>
				<p>Policy Cover Summary</p>
				<div class="car-ch-idv">
					<h3>Insured Declared Value:</h3>
					<span>Car:</span><span class="idv-right"><i class="fa fa-inr"></i> 3,66,789</span>
				</div>
				<div class="car-ch-add">
					<h3>Add Ons</h3>
					<span>No Add Ons supported.</span>
				</div>
				<div class="car-ch-dis">
					<h3>Discounts</h3>
					<span>No additional discounts applicable.</span>
				</div>
			</div>
			<div class="car-chout-data">

				<div class="car-chout-plan">
					<p><span>Important</span> : Refer to your RC book and current policy copy to provide accurate data.</p>
					<div class="car-chout-prop">
						<p>1. Proposer</p>
					</div>
					<div class="car-chout-user">
						<select name="chk-mr" class="chk-mr">
							<option value="mr">Mr</option>
							<option value="mrs">Mrs</option>
							<option value="ms">Ms</option>
						</select>
						<input type="text" name="fname" placeholder="First Name">
						<input type="text" name="lname" placeholder="Last Name">
						<p><input type="text" name="email" placeholder="Email">
							<input class="mobile" type="number" name="mobile" placeholder="Mobile" maxlength="10"></p>
						</div>
					</div>

					<div class="car-chout-plan">
						<div class="car-chout-prop">
							<p>2. Verify critical information</p>
						</div>
						<div class="car-chout-user">
							<span>When do you want to start the policy?</span>
							<p class="ch-inp"><input id="dd" type="text" name="dd" placeholder="DD" maxlength="2">
								<input id="mm" type="text" name="mm" placeholder="MM" maxlength="2">
								<input id="yyyy" type="text" name="yyyy" placeholder="YYYY" maxlength="4"></p>
							</div>
						</div>

						<div class="car-chout-plan">
							<div class="car-chout-prop">
								<p>3. Payment Option</p>
							</div>
							<div class="car-chout-user">
								<span>Buy at Home</span>
								<span>facilitator will assist on phone & in-person</span>
								<p class="car-chout-buy"><button>Confirm</button></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- Content ends here -->

		<?php include("footer.php"); ?>
