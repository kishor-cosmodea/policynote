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

					<label>Car model is</label>
					<input type="text" class="car-mod span3" name="car-mod" data-provide="typeahead" data-items="4"
					data-source="[&quot;Audi A3&quot;,&quot;Audi A4&quot;,&quot;Audi A6&quot;
					,&quot;Audi A7&quot;,&quot;Audi A8&quot;,&quot;Audi C7&quot;,&quot;Audi Q3&quot;
					,&quot;Audi Q5&quot;,&quot;Audi Q7&quot;,&quot;Audi Q7&quot;,&quot;Audi R8&quot;
					,&quot;Audi RS5&quot;,&quot;Audi RS 6 Avant&quot;,&quot;Audi RS7&quot;,&quot;Audi S4&quot;
					,&quot;Audi S6&quot;,&quot;Audi TT Coupe&quot;
					]" placeholder="eg. Audi A3">

					<select name="Manufacturing Year">
						<option value="year">Manufacturing Year</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2015">2014</option>
						<option value="2015">2013</option>
						<option value="2015">2012</option>
						<option value="2015">2011</option>
						<option value="2016">2010</option>
						<option value="2015">2009</option>
						<option value="2015">2008</option>
						<option value="2015">2007</option>
						<option value="2015">2006</option>
						<option value="2015">2005</option>
						<option value="2016">2004</option>
						<option value="2015">2003</option>
						<option value="2015">2002</option>
						<option value="2015">2001</option>
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

					<label>Registration location (RTO)</label>
					<input type="text" class="car-mod span3" name="car-mod" data-provide="typeahead" data-items="4"
					data-source="[&quot;MH-01-Mumbai Central- Location- Tardeo&quot;,&quot;MH-02-Andheri (mumbai Western Suburbs)&quot;,&quot;MH-03-Mumbai, (east), Wadala&quot;
					,&quot;MH-04-Thane&quot;,&quot;MH-05-Kalyan&quot;,&quot;2011&quot;,&quot;2010&quot;
					,&quot;2009&quot;,&quot;2008&quot;,&quot;2007&quot;,&quot;2006&quot;
					]" placeholder="eg. MH-01 or Mumbai">

					<p>
						<label>Policy status    </label>
						<select name="SelPolStat">
							<option value="buynew">Buy New</option>
							<option value="renew">Renew</option>
						</select>
					</p>
				</div>
				<div class="car-re-add">
					<span>Add Ons</span>
					<button>Zero Depriciation</button>
					<button>Engine Protect</button>
					<button>NCB Protect</button>
				</div>
				<div class="car-re-dis">
					<span>Discounts</span>
					<select name="Voluntary Deductible">
						<option value="Voluntary Deductible">Voluntary Deductible</option>
						<option value="2,500">2,500</option>
						<option value="5,000">5,000</option>
						<option value="7,500">7,500</option>
						<option value="15,000">15,000</option>
					</select>
				</div>
				<button class="ref-submit">Submit</button>
			</div>
			<div class="car-wrap-plan">
				<div class="car-plan">
					<span>Policy Plans</span>
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
								<span>Add Ons</span>
								<span>-</span>
							</p>
							<p>
								<span>Discounts</span>
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
