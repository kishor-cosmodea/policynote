<?php
$description="";
$pagetitle="Home |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="main-content">
		<div class="main-text">
				<h2>Need a Car Insurance?<span> It only takes 30 seconds</span></h2>
			<div>
				<p>Choose your annual premium budget</p>
        <!-- <p id="amount"> -->
        <div id="slider-step"></div>
        <div>
          <i aria-hidden="true" class="fa fa-inr fa-lg"></i><span id="slider-step-value"></span>
			  <!-- <div id="slider-range"></div> -->
        </div>
			    <button class="range-submit" title="Submit">Submit</button>
			</div>

		</div>
				<div class="car-quote">
      <div class="car-get cf">
        <h2>Need a Car Insurance Quote? <span>It only takes 30 seconds</span></h2>
        <form name="form" action="car-compare.php" method="post" id="car-details">
          <!-- <input type="hidden" name="amtstart" id="amount1" value="0"> -->
          <input type="hidden" name="amtend" id="amount2" value="5000">
        <div class="car-fis-ul">

            <?php

              $url = "http://54.69.133.16:8080/webapp/api/business/getAllMakes";
              $ch = curl_init();

              // Disable SSL verification
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              // Will return the response, if false it print the response
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              // Set the url
              curl_setopt($ch, CURLOPT_URL,$url);
              // Execute
              $res = curl_exec($ch);
              // Closing
              curl_close($ch);

              $json = json_decode($res, true);
              //var_dump($json);
            ?>

           <select id="car-model" name="carmodel">
            <option  disabled selected>Car</option>
            <?php
              if($json) {
                foreach ($json as $data) {
                  echo  "<option value=" . $data['make_id'] . ">" . $data['name'] .  "</option>";
                }
              }
            ?>
          </select>
          
          <input type="hidden" name="carname" id="car-hide"/>
          <img class="loader" src='assets/images/loader1.gif' alt='policy-logo'>
          <select name="fueltype" class="sel-fuel" disabled="disabled">
             <option  disabled selected>Fuel Type</option>
             <option value="Petrol">Petrol</option>
             <option value="Diesel">Diesel</option>
             <option value="CNG">CNG</option>
             <option value="LPG">LPG</option>
          </select>

          <select name="variant" class="sel-var">
           <option  disabled selected>Variant</option>
          </select>

       </div>
       <div class="car-sec-ul">

        <input id="carregyr" type="text" name="carreg" placeholder="Registration Number" maxlength="10"/>
        <span style="position: absolute; left: 44px; top: 60px; color: #4d4d4d;">eg: MH01AA9999</span>

           <select name="year" class="car-year">
             <option  disabled selected>Manufacturing Year</option>
             <option value="idv_2016">2016</option>
             <option value="idv_2015">2015</option>
             <option value="idv_2014">2014</option>
             <option value="idv_2013">2013</option>
             <option value="idv_2012">2012</option>
             <option value="idv_2011">2011</option>
             <option value="idv_2010">2010</option>
             <option value="idv_2009">2009</option>
             <option value="idv_2008">2008</option>
             <option value="idv_2007">2007</option>
           </select>

           <input type="hidden" name="caridv" id="car-idv" value="0"/>

        <select name="policyStatus" class="polstat">
          <option  disabled selected>Policy Status</option>
          <option value="Buy New" class="buynew">Buy New</option>
          <option value="Renew" class="renew">Renew</option>
        </select>

        <div class="info-wrap in-cs">
        <select name="claimStatus" class="claimstat">
          <option  disabled selected>Claim Status</option>
          <option value="No">No</option>
          <option value="Yes">Yes</option>
        </select>
        <a href="#" class="incon hint--bottom hint--medium" aria-label="Filed claim in last year. If it is Yes then no NCB will be applied" ></a>
        </div>

        <div class="info-wrap in-ncb">
        <select name="ncbPolicy" class="ncbpolicy">
          <option  disabled selected>No Claim Bonus (NCB)</option>
          <option value="0">0%</option>
          <option value="20">20%</option>
          <option value="25">25%</option>
          <option value="35">35%</option>
          <option value="45">45%</option>
          <option value="50">50%</option>
        </select>
        <a href="#" class="incon hint--bottom hint--medium" aria-label="NCB discount, from 0 to 50%, is applied to your car premium depending on the number of continuous claim free years. Find it on your policy document." ></a>
        </div>

    </div>

    <div class="car-sub-btn">
      <button class="btn-quote" id="get-car-quote">Get Quotes</button>
    </div>
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
				<div class="ins-img slider">
					<div style="display: inline-block;"><img src="assets/images/simple.png" alt="Slider1"></div>
          <div><img src="assets/images/details.png" alt="Slider2"></div>
          <div><img src="assets/images/quotes.png" alt="Slider3"></div>
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
					<p>Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance</p>
				</div>
			</div>

			<div class="main-testi">
        <h2>You happy We happy</h2>
        <div id="owl-demo" class="owl-carousel owl-theme">
          <div class="item"><p><img src="assets/images/support.png" alt="testi">Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance how to</p><p>- Mr Jack Son</p></div>
          <div class="item"><p><img src="assets/images/support.png" alt="testi">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is show.</p><p>- Ms Dona Paula</p></div>
          <div class="item"><p><img src="assets/images/support.png" alt="testi">It is a long established fact that a reader will be distracted by the readable content is important.</p><p>- Mr Mick Mora</p></div>
        </div>
			</div>
<!-- 			<div class="car-bg-lay">
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
			</div> -->
			<div class="ins-gq">
					<h2>Get a quote from more than 20 companies</h2>
			</div>
		</div>
	</div>
</div>
<!-- Content ends here -->

<?php include("footer.php"); ?>
