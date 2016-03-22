<?php
$description="";
$pagetitle="Car Compare |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="car-sel-info">
		<div>
			<p>SHOWING RESULTS FOR</p>
			<span class="car-name">Aston Martin DB9</span>
			<span>Coupe (5935 CC)</span>
			<span>MH-01 - Mumbai</span>
		</div>
		<div>
			<p>IDV</p>
			<span class="car-idv">Insured Declared Value (IDV)</span>
			<span>It has been set automatically to get you the best quotes from each insurer.</span>
		</div>
		<div>
			<p>POLICY DETAILS</p>
			<span>Manufacturing Date..................01-01-2016</span>
			<span>Policy start date............................01-04-2016</span>
		</div>
	</div>
	<div class="wrapper">
		<div class="car-profile-content">

			<div class="car-profile-text">
				<span>Car</span> <!-- <a href="car-insurance.php" title="Modify Details"><i class="fa fa-cog"></i>Modify Details</a> -->
			</div>
			<div class="car-refine">
				<div class="car-re-data">
					<h3>Zero Depreciation <i class="fa fa-plus-circle fa-lg"></i></h3>
					<div>
						<span>Do not pay anything from your pocket in case of a claim.</span>
					</div>
				</div>
				<div class="car-re-data">
					<h3>Discounts <i class="fa fa-plus-circle fa-lg"></i></h3>
					<div>
						<span>Save upto 40% on these quotes</span>
					</div>
				</div>
				<div class="car-re-data">
					<h3>Additional Covers</h3>
					<div>
						<p>
							<span><input type="checkbox" name="am" value="Invoice Cover">Invoice Cover</span>
							<span><input type="checkbox" name="lt" value="24x7 Roadside Assistance">24x7 Roadside Assistance</span>
							<span><input type="checkbox" name="ba" value="NCB Protection">NCB Protection</span>
							<span><input type="checkbox" name="rl" value="Passenger Cover">Passenger Cover</span>
							<span><input type="checkbox" name="ba" value="Engine Protector">Engine Protector</span>
						</p>
					</div>
				</div>
				<button class="ref-submit">Update</button>
			</div>
			<div class="car-wrap-plan">
				<div class="car-plan">
					<span>Showing results</span>
					<div>
						<span class="car-sort">Sort By:</span>
						<select name="car-price" class="car-price">
							<option value="price">Price</option>
							<option value="match">Match</option>
						</select>
					</div>
				</div>
				<div class="car-result-data">
					<div class="car-policy-plan">
						<div>
							<p>
								<img src="assets/images/sbi.png" alt="policy-logo">
							</p>
							<p class="car-premium">
								<span class="car-low">Lowest Price</span>		
								<span class="car-amt"><i class="fa fa-inr"></i> 10,123</span>
								<span class="car-det">Premium Details</span>
							</p>
							<p>
								<button class="car-buy"><a href="car-checkout.php">Buy Now</a></button>
							</p>
						</div>
						<div class="car-idv-cont">
							<p>
								<span class="car-idv">Insured Declared Value (IDV)</span>
								<span><i class="fa fa-inr"></i> 5,00,850</span>
							</p>
							<p>
								<span class="car-idv">Additional Covers</span>
								<span>NCB Protection</span>
							</p>
							<p>
								<span class="car-idv">Discounts</span>
								<span>-</span>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Content ends here -->

<?php include("footer.php"); ?>
