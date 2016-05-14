<?php
$description="";
$pagetitle="";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="main-content">
		<div class="main-text">
				<h2>Need a Car Quote?<span> It only takes 30 seconds</span></h2>
			<div>
				<p>Choose your monthly premium budget<p id="amount"></p></p>

			  <div id="slider-range"></div>

			  <form method="post" action="car-insurance.php">
			    <input type="hidden" name="amtstart" id="amount1" value="0">
			    <input type="hidden" name="amtend" id="amount2" value="25000">
			    <button class="range-submit" title="Submit">Submit</button>
			  </form>
			</div>
			
		</div>
	</div>
	<div class="middle-content">
		<div class="list-insurance">
			<div>
				<div class="ins-head ins-how">
					<h2>How it works</h2>
				</div>
				<div class="ins-img">
					<img src="assets/images/how-it-works.png" alt="Ins">
					<!-- <span>Give us your car details</span>
					<span>Select from wide array of affordable options</span>
					<span>Fill in your personal details</span>
					<span>Our Executive will contact you at the earliest</span> -->
				</div>
			</div>

			<div class="sketch-cont cf">
				<div class="car-block">
					<h3>What is Car Insurance?</h3>
					<i class="fa fa-car fa-5x wow bounceIn text-primary" style="visibility: visible; animation-name: bounceIn;"></i>
					<p>Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance</p>
				</div>
				<div class="health-block">
					<h3>Why Car Insurance?</h3>
					<i class="fa fa-car fa-5x wow bounceIn text-primary" style="visibility: visible; animation-name: bounceIn;"></i>
					<p>Find the best match health insurance, Find the best match health insurance, Find the best match health insurance</p>
				</div>
			</div>

			<div class="main-testi">
				<h2>Policynote has done a great job. I renewed my car policy in 10 minutes. It’s quite incredible.</h2>
				<span>- Jack Son</span>
			</div>
			<div class="car-bg-lay">
				<div class="ins-head">
					<h2>More reasons...</h2>
				</div>
				<div class="ins-thoug">
					<p>
						<img src="assets/images/support.png" alt="comma">
						<span>24x7 Support</span>
					</p>
					<p>
						<img src="assets/images/note.png" alt="comma">
						<span>Hassle Free Process</span>
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
