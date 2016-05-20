<?php
$description="";
$pagetitle="Car Checkout |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="wrapper car-chk-cont">
		<div class="car-profile-content">
			<div class="car-chk-text">
				<span onclick="goBack()"><i class="fa fa-arrow-circle-left fa-lg"></i> Back to Results</span>
			</div>
			<div class="car-checkout">
				<div class="car-ch-ins">
					<img src="assets/images/sbi.png" alt="policy-logo">
					<span class="car-ct-amt"><i class="fa fa-inr"></i> 8,222</span>
					<span class="car-ct-amt"><?php echo $_POST['carname']; ?></span>
					<span>ZXI 1197cc</span>
					<span>Petrol</span>

				</div>
				<div class="car-ch-idv">
					<h3>Insured Declared Value:</h3>
					<span>Car:</span><span class="idv-right"><i class="fa fa-inr"></i> 3,66,789</span>
				</div>
				<div class="car-ch-add">
					<h3>Additional</h3>
					<span>No aditional covers supported</span>
				</div>
				<div class="car-ch-dis">
					<h3>Discounts</h3>
					<span>No discounts applicable</span>
				</div>
			</div>
			<div class="car-chout-data">

				<div class="car-chout-plan">
					<div class="car-chout-prop">
						<span>1</span> <p>Contact Details</p>
					</div>
					<div class="car-chout-user">
						<input type="text" name="fname" placeholder="First Name">
						<input type="text" name="lname" placeholder="Last Name">
						<p><input type="text" name="email" placeholder="Email">
							<input class="mobile" type="number" name="mobile" placeholder="Mobile" maxlength="10"></p>
						</div>
					</div>

					<div class="car-chout-plan">
						<div class="car-chout-prop">
							<span>2</span> <p>Policy Details</p>
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
								<span>3</span> <p>Get Policy</p>
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
