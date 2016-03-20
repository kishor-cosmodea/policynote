<?php
$description="";
$pagetitle="Car Insurance |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="car-content">
		<div class="car-quote">
      <div class="car-get cf">
        <h2>Need a Car Quote? <span>It only takes 30 seconds</span></h2>
        <div class="car-fis-ul">
          <p>
           <input type="text" class="car-mod span3" name="car-mod" data-provide="typeahead" data-items="4"
           data-source="[&quot;Audi A3&quot;,&quot;Audi A4&quot;,&quot;Audi A6&quot;
           ,&quot;Audi A7&quot;,&quot;Audi A8&quot;,&quot;Audi C7&quot;,&quot;Audi Q3&quot;
           ,&quot;Audi Q5&quot;,&quot;Audi Q7&quot;,&quot;Audi Q7&quot;,&quot;Audi R8&quot;
           ,&quot;Audi RS5&quot;,&quot;Audi RS 6 Avant&quot;,&quot;Audi RS7&quot;,&quot;Audi S4&quot;
           ,&quot;Audi S6&quot;,&quot;Audi TT Coupe&quot;
           ]" placeholder="Car Model">

           <select class="car-sel" name="Manufacturing Year">
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
         </p>
       </div>
       <div class="car-sec-ul">
        <p>
          <select name="Variant" class="sel-var">
           <option value="variant">Variant</option>
           <option value="tsi">TSI</option>
           <option value="vdi">VDI</option>
           <option value="vdi">ZDI</option>
         </select>

         <input type="text" class="car-mod span3 car-sel" name="car-mod" data-provide="typeahead" data-items="4"
         data-source="[&quot;MH-01-Mumbai Central- Location- Tardeo&quot;,&quot;MH-02-Andheri (mumbai Western Suburbs)&quot;,&quot;MH-03-Mumbai, (east), Wadala&quot;
         ,&quot;MH-04-Thane&quot;,&quot;MH-05-Kalyan&quot;,&quot;2011&quot;,&quot;2010&quot;
         ,&quot;2009&quot;,&quot;2008&quot;,&quot;2007&quot;,&quot;2006&quot;
         ]" placeholder="RTO">

         <select name="SelPolStat">
          <option value="buynew">Policy Status</option>
          <option value="buynew">Buy New</option>
          <option value="renew">Renew</option>
        </select>
      </p>
    </div>
    <div class="car-sub-btn">
      <button class="btn-quote"><a href="car-compare.php">Get Quotes</a></button>
    </div>
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
      <div>

      </div>
    </div>
    <div>
      <div class="ins-head">
        <h2>Get a quote from more than 100 companies</h2>
      </div>
      <div class="ins-img">
        <img src="assets/images/insurance-comp.jpg" alt="Ins">
      </div>
    </div>

    <div class="car-spl-data cf">
      <div class="spl-one-cont">
        <p><img src="assets/images/dummy-200x200-Rope.jpg" alt="car"></p>
        <div class="car-tech">
          <h2>Lorem Ipsum is simply dummy text of the printing</h2>
          <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
          </div>
        </div>

        <div class="spl-one-cont">
          <div class="car-left">
            <h2>Lorem Ipsum is simply dummy text of the printing</h2>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
            </div>
            <p><img src="assets/images/dummy-200x200-Rope.jpg" alt="car"></p>
          </div>

          <div class="spl-one-cont">
            <p><img src="assets/images/dummy-200x200-Rope.jpg" alt="car"></p>
            <div class="car-tech">
              <h2>Lorem Ipsum is simply dummy text of the printing</h2>
              <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
              </div>
            </div>
          </div>

          <div class="sketch-cont cf">
            <div class="car-block">
              <h3>Car Insurance</h3>
              <!-- <i class="fa fa-car fa-5x wow bounceIn text-primary" style="visibility: visible; animation-name: bounceIn;"></i> -->
              <img src="assets/images/sketch-car.png" alt="car">
              <p>Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance</p>
            </div>
            <div class="health-block">
              <h3>Health Insurance</h3>
              <!-- <i class="fa fa-heart-o fa-5x wow bounceIn text-primary" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i> -->
              <img src="assets/images/sketch-health.png" alt="health">
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
        </div>
      </div>
    </div>
    <!-- Content ends here -->

    <?php include("footer.php"); ?>
