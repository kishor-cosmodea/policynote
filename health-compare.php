<?php
$description="";
$pagetitle="Health Compare |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="wrapper">
		<div class="health-profile-content">
			<div class="health-profile-text">
				<h2>Buy Health Insurance</h2>
			</div>
			<div class="health-refine">
				<div class="health-re-data">
					<h3>Refine Search</h3>
					<p><span>Pin Code </span><input class="health-pin" type="text" name="health-pin"></p>
					<p><span>Insured for:</span></p>
					<button>Self</button>
					<button>Spouse</button>
					<button>Father</button>
					<button>Mother</button>
					<button>Son</button>
					<button>Daughter</button>
					<p><span>Insured member details are:</span></p>
					<p><span>Self :</span><input class="health-age" type="text" name="health-pin"><span>Years</span></p>
					<button>Male</button>
					<button>Female</button>
				</div>
				<button class="ref-submit">Submit</button>
			</div>
			<div class="health-result-data">
				<div class="health-plan">
					<span>Policy Plans</span>
					<div>
						<span class="health-sort">Sort By:</span>
						<select name="hel-price" class="hel-price">
							<option value="price">Price</option>
							<option value="match">Match</option>
						</select>
					</div>
				</div>

				<div class="health-policy-plan">
					<div class="health-pla-cont">
						<p>
							<img src="assets/images/apollo.png" alt="policy-logo">
						</p>
						<p class="health-premium">
							<span class="health-amt"><i class="fa fa-inr"></i> 2,123</span>
						</p>
						<p>
							<button class="health-buy"><a href="health-checkout.php">Buy</a></button>
						</p>
					</div>
					<div class="health-cov-cont">
						<div>
							<span class="health-cov">Covered Amount</span>
							<span><i class="fa fa-inr"></i> 3 Lakhs</span>
						</div>
						<div>
							<span class="health-cov">Key Benefits</span>
							<span>Critical Illness</span>
							<span>Organ Donor Expenses</span>
							<span>Maternity</span>
						</div>
						<div>
							<span class="health-cov">Claims</span>
							<span>Processed in 30 days</span>
						</div>
					</div>
				</div>

				<div class="health-policy-plan">
					<div class="health-pla-cont">
						<p>
							<img src="assets/images/apollo.png" alt="policy-logo">
						</p>
						<p class="health-premium">
							<span class="health-amt"><i class="fa fa-inr"></i> 2,123</span>
						</p>
						<p>
							<button class="health-buy"><a href="health-checkout.php">Buy</a></button>
						</p>
					</div>
					<div class="health-cov-cont">
						<div>
							<span class="health-cov">Covered Amount</span>
							<span><i class="fa fa-inr"></i> 3 Lakhs</span>
						</div>
						<div>
							<span class="health-cov">Key Benefits</span>
							<span>Critical Illness</span>
							<span>Organ Donor Expenses</span>
							<span>Maternity</span>
						</div>
						<div>
							<span class="health-cov">Claims</span>
							<span>Processed in 30 days</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Content ends here -->

<?php include("footer.php"); ?>
