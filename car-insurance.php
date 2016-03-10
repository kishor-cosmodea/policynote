<?php
$description="";
$pagetitle="Car Insurance |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="car-content">
		<div class="car-text">
			<h2>Get Insurance for your Car</h2>
		</div>
		<div class="car-quote">
			<div class="car-get">
				<ul>
					<li><label>Car Model is     </label><input class="car-mod" type="text" name="car-mod"></li>
					<li>
						<select name="Manufacturing Year">
							<option value="year">Manufacturing Year</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2015">2014</option>
							<option value="2015">2013</option>
							<option value="2015">2012</option>
							<option value="2015">2011</option>
						</select>
						<select name="Fuel Type" class="sel-fuel">
							<option value="fueltype">Fuel Type</option>
							<option value="petrol">Petrol</option>
							<option value="diesel">Diesel</option>
						</select>
						<select name="Variant" class="sel-var">
							<option value="variant">Variant</option>
							<option value="tsi">TSI</option>
							<option value="vdi">VDI</option>
							<option value="vdi">ZDI</option>
						</select>
					</li>
					<li>
						<label>Registration (RTO)     </label>
						<select name="SelRtoCode" class="sel-rto">
							<option value="mh-01">MH-01-Mumbai Central- Location- Tardeo</option>
							<option value="mh-02">MH-02-Andheri (mumbai Western Suburbs)</option>
							<option value="mh-03">MH-03-Mumbai, (east), Wadala</option>
							<option value="mh-04">MH-04-Thane</option>
							<option value="mh-05">MH-05-Kalyan</option>
						</select>
					</li>
					<li>
						<label>Policy Status     </label>
						<select name="SelPolStat">
							<option value="buynew">Buy New</option>
							<option value="renew">Renew</option>
						</select>
					</li>
				</ul>
				<button class="btn-quote"><a href="car-compare.php">Get Quotes</a></button>
			</div>
		</div>
	</div>
	<div class="middle-content">
		<div class="list-insurance">
			<div class="ins-head">
				<h2>Get a quote from more than 100 companies</h2>
			</div>
			<div class="ins-img">
				<img src="assets/images/insurance-comp.jpg" alt="Ins">
			</div>

			<div class="car-spl-data cf">
				<div class="spl-one-cont">
					<p><img src="assets/images/dummy-200x200-Rope.jpg" alt="car"></p>
					<p class="car-tech">
						<span>Lorem Ipsum is simply dummy text of the printing</span>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
				</div>

				<div class="spl-one-cont">
					<p class="car-left">
						<span>Lorem Ipsum is simply dummy text of the printing</span>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
					<p><img src="assets/images/dummy-200x200-Rope.jpg" alt="car"></p>
				</div>

				<div class="spl-one-cont">
					<p><img src="assets/images/dummy-200x200-Rope.jpg" alt="car"></p>
					<p class="car-tech">
						<span>Lorem Ipsum is simply dummy text of the printing</span>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
				</div>
			</div>

			<div class="sketch-cont">
				<div>
					<img src="assets/images/sketch-car.png" alt="car">
					<h3>Car Insurance</h3>
					<p>Compare and save upto 60% on car insurance</p>
				</div>
				<div>
					<img src="assets/images/sketch-health.png" alt="health">
					<h3>Health Insurance</h3>
					<p>Find the best match health insurance</p>
				</div>
			</div>

			<div class="main-testi">
				<h2>“Policynote has done a great job. I renewed my car policy in 10 minutes. It’s quite incredible.”</h2>
				<span>- Jack Son</span>
			</div>
			<div class="car-bg-lay">
				<div class="ins-head">
					<h2>INSURANCE THOUGHTS</h2>
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
<!-- 			<div class="easy-save">
				<div class="easy-wrap">
					<p>
						<img src="assets/images/easy.png" alt="easy">
						<span>SECURE</span>
					</p>
					<p>
						<img src="assets/images/simple.png" alt="simple">
						<span>EASY</span>
					</p>
					<p>
						<img src="assets/images/save.png" alt="save">
						<span>SAVE</span>
					</p>
					<p>
						<img src="assets/images/quick.png" alt="quick">
						<span>QUICK</span>
					</p>
				</div>
			</div> -->
		</div>
	</div>
</div>
<!-- Content ends here -->

<?php include("footer.php"); ?>
