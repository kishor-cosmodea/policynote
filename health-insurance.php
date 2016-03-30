<?php
$description="";
$pagetitle="Health Insurance |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="health-content">
		<div class="health-quote">
			<div class="health-get">
				<h2>Get Health Insurance <span>It only takes 30 seconds</span></h2>
				<p>
					<select name="ins-for" class="ins-for">
						<option value="Insurance For">Insurance For</option>
						<option value="Self">Self</option>
						<option value="Spouse">Spouse</option>
						<option value="Father">Father</option>
						<option value="Mother">Mother</option>
						<option value="Son">Son</option>
						<option value="Daughter">Daughter</option>
					</select>

					<select name="gender" class="gender">
						<option value="Gender">Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</p>
				<p>
					<input type="text" name="health-age" maxlength="2" placeholder="Age">
					<input class="health-pin" type="text" name="health-pin" placeholder="Pincode" maxlength="6">
					<!-- <p><span><i class="fa fa-plus-circle fa-lg"></i> Add more members</span></p> -->
				</p>
				<p class="health-sub-btn">
					<button class="btn-quote"><a href="health-compare.php">Get Quotes</a></button>
				</p>
			</div>
		</div>
	</div>
	<div class="middle-content">
		<div class="list-insurance">
			<div>
				<div class="ins-head ins-how">
					<h2>How it Works</h2>
				</div>
				<div class="ins-img">
					<img src="assets/images/how-it-works.png" alt="Ins">
					<span>Give us your car details</span>
					<span>Select from wide array of affordable options</span>
					<span>Fill in your personal details</span>
					<span>Our Executive will contact you at the earliest</span>
				</div>
			</div>

			<div class="sketch-cont cf">
				<div class="car-block">
					<h3>Car Insurance</h3>
					<i class="fa fa-car fa-5x wow bounceIn text-primary" style="visibility: visible; animation-name: bounceIn;"></i>
					<p>Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance</p>
				</div>
				<div class="health-block">
					<h3>Health Insurance</h3>
					<i class="fa fa-heart-o fa-5x wow bounceIn text-primary" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
					<p>Find the best match health insurance, Find the best match health insurance, Find the best match health insurance</p>
				</div>
			</div>

			<div class="main-testi">
				<h2>Policynote has done a great job. I renewed my car policy in 10 minutes. It’s quite incredible.</h2>
				<span>- Jack Son</span>
			</div>
			<div class="car-bg-lay">
				<div class="ins-head">
					<h2>Insurance Thoughts</h2>
				</div>
				<div class="ins-thoug">
					<p>
						<img src="assets/images/comma.png" alt="comma">
						Policynote has managed to do what no one else has. Buying insurance has never been this easy. Policynote has managed to do what no one else has. Buying insurance has never been this easy.
					</p>
					<p>
						<img src="assets/images/comma.png" alt="comma">
						Policynote has managed to do what no one else has. Buying insurance has never been this easy. Policynote has managed to do what no one else has. Buying insurance has never been this easy.
					</p>
				</div>
			</div>
			<div class="ins-gq">
					<h2>Get a quote from more than 20 companies</h2>
			</div>
		</div>
	</div>
			</div>
			<!-- Content ends here -->

			<?php include("footer.php"); ?>
