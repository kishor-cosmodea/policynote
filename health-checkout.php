<?php
$description="";
$pagetitle="Health Checkout |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="wrapper">
		<div class="health-profile-content">
			<div class="health-chk-text">
				<h2>Health Insurance Checkout</h2>
			</div>
			<div class="health-checkout">
				<div class="health-ch-data">
					<h3>Health Details</h3>
				</div>
				<div class="health-ch-ins">
					<img src="assets/images/apollo.png" alt="policy-logo">
					<span class="health-ct-amt">Care NCB Super</span>
					<span>Cover Amount : 1,00,000</span>
					<span class="health-ct-amt"><i class="fa fa-inr"></i> 2,283</span>
				</div>
			</div>
			<div class="health-chout-data">

				<div class="health-chout-plan">
					<p>Book your policy in simple steps</p>
					<div class="health-chout-prop">
						<p>1. Proposer</p>
					</div>
					<div class="health-chout-user">
						<button>Self</button>
						<input type="text" name="fname" placeholder="First Name">
						<input type="text" name="lname" placeholder="Last Name">
						<p><input type="text" name="email" placeholder="Email ID">
							<input type="text" name="mobile" placeholder="Mobile No."></p>
						</div>
					</div>

					<div class="health-chout-plan">
						<div class="health-chout-prop">
							<p>2. Insured Members</p>
						</div>
						<div class="health-chout-user">
							<span>Self</span>
							<input id="fname" type="text" name="fname" placeholder="First Name">
							<input type="text" name="lname" placeholder="Last Name">
							<p class="he-inp">
								<span>Date of Birth</span>
								<input id="dd" type="text" name="dd" placeholder="DD">
								<input id="mm" type="text" name="mm" placeholder="MM">
								<input id="yyyy" type="text" name="yyyy" placeholder="YYYY">
							</p>
						</div>
					</div>

					<div class="health-chout-plan">
						<div class="health-chout-prop">
							<p>3. Medical History</p>
						</div>
						<div class="health-chout-user">
							<span>Have you or any other member(s) proposed to be insured under this policy have ever suffered from any disease.</span>
							<p class="health-rb">
								<input type="radio" name="dise" value="no" checked>No
								<input type="radio" name="dise" value="yes">Yes
							</p>
						</div>
					</div>

					<div class="health-chout-plan">
						<div class="health-chout-prop">
							<p>4. Mailing Address</p>
						</div>
						<div class="health-chout-user">
							<span>Address</span>
							<textarea rows="4" cols="50" placeholder="Address"></textarea>
							<p class="health-chout-buy"><button>Confirm Purchase</button></p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Content ends here -->

	<?php include("footer.php"); ?>
