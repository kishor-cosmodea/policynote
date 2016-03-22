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
				<span>Health</span> <!-- <a href="health-insurance.php" title="Modify Details"><i class="fa fa-cog"></i>Modify Details</a> -->
			</div>
			<div class="health-refine">
				<div class="health-re-data">
					<h3>MODIFY COVER</h3>
					<div>
						<select name="cov">
							<option value="Upto 2 Lacs">Upto 2 Lacs</option>
							<option value="2 Lacs to 2.5 Lacs">2 Lacs to 2.5 Lacs</option>
							<option value="3 Lacs to 3.5 Lacs">3 Lacs to 3.5 Lacs</option>
							<option value="4 Lacs to 4.5 Lacs">4 Lacs to 4.5 Lacs</option>
							<option value="5 Lacs to 5.5 Lacs">5 Lacs to 5.5 Lacs</option>
						</select>
					</div>
				</div>
				<div class="health-re-data">
					<h3>PREMIUM</h3>
					<div>
						<select name="cov">
							<option value="less than 2000">less than 2000</option>
							<option value="less than 3000">less than 3000</option>
							<option value="less than 4000">less than 4000</option>
						</select>
					</div>
				</div>
				<div class="health-re-data">
					<h3>ROOM RENT LIMIT</h3>
					<div>
						<p><input type="radio" name="rr" value="NoLimit">No Limit</p>
						<p><input type="radio" name="rr" value="AtLeast">At least private room</p>
					</div>
				</div>
				<div class="health-re-data">
					<h3>COPAY</h3>
					<div>
						<p class="health-rm">
							<input type="checkbox" name="nc" value="NoLimit">No copay
						</p>
					</div>
				</div>
				<div class="health-re-data">
					<h3>PREFERRED BRANDS</h3>
					<div>
						<p class="health-rm">
							<span><input type="checkbox" name="am" value="Apollo Munich">Apollo Munich</span>
							<span><input type="checkbox" name="lt" value="L&T">L&T</span>
							<span><input type="checkbox" name="ba" value="Bajaj Allianz">Bajaj Allianz</span>
							<span><input type="checkbox" name="rl" value="Religare">Religare</span>
							<span><input type="checkbox" name="ba" value="Bharti AXA">Bharti AXA</span>
						</p>
					</div>
				</div>
				<button class="ref-submit">Update</button>
			</div>
			<div class="health-wrap-plan">
				<div class="health-plan">
					<span>Matching Plans</span>
					<div>
						<span class="health-sort">Sort By:</span>
						<select name="hel-price" class="hel-price">
							<option value="price">Price</option>
							<option value="match">Match</option>
						</select>
					</div>
				</div>
				<div class="health-result-data">
					<div class="health-policy-plan">
						<div class="health-pla-cont">
							<p>
								<img src="assets/images/apollo.png" alt="policy-logo">
							</p>
							<p class="health-premium">
								<span class="health-low">Lowest Price</span>
								<span class="health-amt"><i class="fa fa-inr"></i> 2,123</span>
							</p>
							<p>
								<button class="health-buy"><a href="health-checkout.php">Buy Now</a></button>
							</p>
						</div>
						<div class="health-cov-cont">
							<p>
								<span class="health-cov">Covered Amount</span>
								<span><i class="fa fa-inr"></i> 3 Lakhs</span>
							</p>
							<p>
								<span class="health-cov">Key Benefits</span>
								<span>Critical Illness</span>
								<span>Organ Donor Expenses</span>
							</p>
							<p>
								<span class="health-cov">Claims</span>
								<span>Processed in 30 days</span>
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
