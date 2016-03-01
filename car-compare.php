<?php
$description="";
$pagetitle="Car Compare |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="wrapper">
		<div class="car-profile-content">
			<div class="car-profile-text">
				<h2>Buy Car Insurance</h2>
			</div>
			<div class="car-refine">
				<div class="car-re-data">
					<h3>Refine Search</h3>
					<button>Car Model</button>
					<button>Fuel Type</button>
					<button>Varient</button>
					<button>Registration Year</button>
					<button>Policy Status</button>
					<button>Registration RTO</button>
				</div>
				<div class="car-re-add">
					<span>Add Ons</span>
					<button>Zero Depriciation</button>
					<button>Engine Protect</button>
					<button>NCB Protect</button>
				</div>
				<div class="car-re-dis">
					<button>Discounts</button>
				</div>
				<button class="ref-submit">Submit</button>
			</div>
			<div class="car-result-data">
				<div class="car-plan">
					<span>Policy Plans</span>
					<div>
						<span class="car-sort">Sort By:</span>
						<span>Premium</span>
					</div>
				</div>

				<div class="car-policy-plan">
					<p>
						<img src="assets/images/sbi.png" alt="policy-logo">
						<span class="car-idv">Insured Declared Value (IDV)</span>
						<span>Rs. 5,00,850</span>
					</p>
					<p class="car-premium">
						<span class="car-amt">Rs. 10,123</span>
						<span class="car-det">Premium Details</span>
					</p>
					<p>
						<button class="car-buy">Buy</button>
					</p>
				</div>

				<div class="car-policy-plan">
					<p>
						<img src="assets/images/sbi.png" alt="policy-logo">
						<span class="car-idv">Insured Declared Value (IDV)</span>
						<span>Rs. 5,00,850</span>
					</p>
					<p class="car-premium">
						<span class="car-amt">Rs. 12,333</span>
						<span class="car-det">Premium Details</span>
					</p>
					<p>
						<button class="car-buy">Buy</button>
					</p>
				</div>

				<div class="car-policy-plan">
					<p>
						<img src="assets/images/sbi.png" alt="policy-logo">
						<span class="car-idv">Insured Declared Value (IDV)</span>
						<span>Rs. 5,00,850</span>
					</p>
					<p class="car-premium">
						<span class="car-amt">Rs. 15,563</span>
						<span class="car-det">Premium Details</span>
					</p>
					<p>
						<button class="car-buy">Buy</button>
					</p>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Content ends here -->

<?php include("footer.php"); ?>
