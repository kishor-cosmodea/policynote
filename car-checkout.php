<?php
$description="";
$pagetitle="Car Compare |";
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
					<span>2016 Maruti Swift Dzire</span>
					<span>VXI(1197cc Petrol)</span>
					<span>Rs. 8,222</span>
				</div>
				<p>Policy Cover Summary</p>
				<div class="car-ch-idv">
					<span>Insured Declared Value (IDV)</span>
					<span>Car:</span><span>Rs. 3,66,789</span>
				</div>
				<div class="car-ch-add">
					<span>Add Ons</span>
					<span>No Add Ons supported.</span>
				</div>
				<div class="car-ch-dis">
					<span>Discounts</span>
					<span>No additional discounts applicable.</span>
				</div>
			</div>
			<div class="car-result-data">

				<div class="car-policy-plan">
					<p>Important: Please keep your policy documents ready to provide accurate data</p>
					<div>
						<p>1. Proposer</p>
					</div>
					<div>
						<button>Mr</button>
						<input type="text" name="fname" placeholder="First Name">
						<input type="text" name="lname" placeholder="Last Name">
						<input type="text" name="email" placeholder="Email ID">
						<input type="text" name="mobile" placeholder="Mobile No.">
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Content ends here -->

<?php include("footer.php"); ?>
