<?php
$description="";
$pagetitle="Health Checkout |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="wrapper health-chk-cont">
		<div class="health-profile-content">
			<div class="health-chk-text">
				<span onclick="goBack()"><i class="fa fa-arrow-circle-left fa-lg"></i> Back to Results</span>
			</div>
			<div class="health-checkout">
				<div class="health-ch-ins">
					<img src="assets/images/apollo.png" alt="policy-logo">
					<span class="health-ct-amt"><i class="fa fa-inr"></i> 2,283</span>
					<span class="health-ct-amt">Care NCB Super</span>
				</div>
				<div class="health-ch-cm">
					<h3>Cover Amount</h3>
					<span>Health:</span><span class="cov-right"><i class="fa fa-inr"></i> 1,00,000</span>
				</div>
			</div>
			<div class="health-chout-data">

				<div class="health-chout-plan">
					<div class="health-chout-prop">
						<span>1</span> <p>Proposer Details</p>
					</div>
					<div class="health-chout-user">
						<input type="text" name="fname" placeholder="First Name">
						<input type="text" name="lname" placeholder="Last Name">
						<p><input type="text" name="email" placeholder="Email">
							<input class="mobile" type="number" name="mobile" placeholder="Mobile" maxlength="10"></p>
						</div>
					</div>

					<div class="health-chout-plan">
						<div class="health-chout-prop">
							<span>2</span> <p>Insured Members</p>
						</div>
						<div class="health-chout-user">
							<span>Self</span>
							<input id="fname" type="text" name="fname" placeholder="First Name">
							<input id="lname" type="text" name="lname" placeholder="Last Name">
							<p class="he-inp">
								<span>Date of Birth</span>
								<input id="dd" type="text" name="dd" placeholder="DD" maxlength="2">
								<input id="mm" type="text" name="mm" placeholder="MM" maxlength="2">
								<input id="yyyy" type="text" name="yyyy" placeholder="YYYY" maxlength="4">
							</p>
						</div>
					</div>

					<div class="health-chout-plan">
						<div class="health-chout-prop">
							<span>3</span> <p>Medical History</p>
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
							<span>4</span> <p>Contact Details</p>
						</div>
						<div class="health-chout-user">
							<span>Address</span>
							<textarea rows="4" cols="50" placeholder="Address" maxlength="250"></textarea>
							<p class="health-chout-buy"><button>Confirm</button></p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Content ends here -->

	<?php include("footer.php"); ?>
