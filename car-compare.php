<?php
$description="";
$pagetitle="Car Compare |";
include("header.php");
?>

<?php

	$range1 =  $_POST['amtstart'];
	$range2 =  $_POST['amtend'];


	if($year =  $_POST['year'] == "idv_2016") {
		//echo "if";
		$carreg =  $_POST['carreg'];
		$year =  $_POST['year'];
		$carname = $_POST['carname'];
		$variant = $_POST['variant'];
		$fueltype = $_POST['fueltype'];
		$idv = $_POST['caridv'];
		$addonType = 5;
		$insPer = 60;

	  //echo $variant;
		$splitted = explode("-",$variant);
		//echo $splitted;
		$model = trim($splitted[0]);
		$vari = trim($splitted[1]);

		if($vari == "") {
			$vari = "-";
		}

		$claimstat = "Yes";
		(int)$ncb = 0;

		//echo $carreg; //echo $year; //echo $carname; //echo $model;
	  //echo $vari; //echo $ncb; //echo $claimstat; //echo $idv;
	  //echo $addonType; //echo $insPer;

		$data = array(
	  "regNumber" => $carreg,
	  "regDate"=> $year,
	  "make"=> $carname,
	  "model"=> $model,
	  "variant"=> $vari,
	  "ncbPolicy"=> $ncb,
	  "claimStatus"=> $claimstat,
	  "idv"=> $idv,
	  "insurancePerecentage"=> $insPer,
	  "addonType"=> $addonType
	);

	$url_send ="http://52.32.253.76:8080/webapp/api/business/getFinalPremium";

	$str_data = json_encode($data);

	//print_r($str_data);

	function sendPostData($url, $post) {
	  $ch = curl_init($url);
	  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
	  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	  $result = curl_exec($ch);
	  curl_close($ch);
	  $json = json_decode($result, true);
	  return $json;
	}
	//echo " " . sendPostData($url_send, $str_data);
	$resp = sendPostData($url_send, $str_data);

	} else {
		//echo "el";
		$carreg =  $_POST['carreg'];
		$year =  $_POST['year'];
		$carname = $_POST['carname'];
		$variant = $_POST['variant'];
		$fueltype = $_POST['fueltype'];
		$claimStatus = $_POST['claimStatus'];
		$idv = $_POST['caridv'];
		$addonType = 5;
		$insPer = 60;

	  //echo $variant;
		$splitted = explode("-",$variant);
		//echo $splitted;
		$model = trim($splitted[0]);
		$vari = trim($splitted[1]);

		if($vari == "") {
			$vari = "-";
		}

		if($claimStatus == "Yes") {
			(int)$ncb = 0;
			$claimstat = "Yes";
			//echo $ncb;
			//echo $claimstat;
		} else {
			$ncb = $_POST['ncbPolicy'];

			if($ncb == "") {
				(int)$ncb = 0;
			}
			$claimstat = "No";
			//echo $int;
			//echo $claimstat;
		}

		//echo $carreg; //echo $year; //echo $carname; //echo $model;
	  //echo $vari; //echo $ncb; //echo $claimstat; //echo $idv;
	  //echo $addonType; //echo $insPer;
	
		$data = array(
		  "regNumber" => $carreg,
		  "regDate"=> $year,
		  "make"=> $carname,
		  "model"=> $model,
		  "variant"=> $vari,
		  "ncbPolicy"=> $ncb,
		  "claimStatus"=> $claimstat,
		  "idv"=> $idv,
		  "insurancePerecentage"=> $insPer,
		  "addonType"=> $addonType
		);

		$url_send ="http://52.32.253.76:8080/webapp/api/business/getFinalPremium";

		$str_data = json_encode($data);

		//print_r($str_data);

		function sendPostData($url, $post) {
		  $ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		  $result = curl_exec($ch);
		  curl_close($ch);
		  $json = json_decode($result, true);
		  return $json;
		}
		//echo " " . sendPostData($url_send, $str_data);
		$resp = sendPostData($url_send, $str_data);
	}

?>

<!-- Content starts here-->
<div class="container">
	<div class="car-sel-info">
		<div>
			<p>SHOWING RESULTS FOR</p>
			<span class="car-name"><?php echo $carname; ?></span>
			<span class="car-vari"><?php echo "( " . $fueltype . " )    "; echo $variant; ?></span>
			<span class="car-rnum"><?php echo $carreg; ?></span>
			<span class="car-hvar" style="display:none;"><?php echo $variant; ?></span>
		</div>
		<div>
			<p>IDV</p>
			<span class="car-idv">Insured Declared Value (IDV)</span>
			<span class="idvamt"><i class="fa fa-inr"></i> <?php echo number_format($idv); ?></span>
			<span>(The IDV is based on your car manufacturing year)</span>
			<input id="ncbval" type="hidden" name="ncbval" value="<?php echo $ncb ?>"/>
			<input id="claimval" type="hidden" name="claimval" value="<?php echo $claimstat ?>"/>
		</div>
		<div>
			<p>POLICY DETAILS</p>
			<span class="reg-yr">Manufacturing Year ......................... <?php $spliyear = explode("_",$year); $newyr = $spliyear[1]; echo $newyr; ?></span>
			<span>Policy start date .......................... <?php $date_format = 'jS F Y'; $tomorrow = strtotime('+1 day'); echo date($date_format, $tomorrow); ?>
			</span>
		</div>
	</div>
	<div class="wrapper">
		<div class="car-profile-content">

			<div class="car-profile-text">
				<span>Car</span> <!-- <a href="car-insurance.php" title="Modify Details"><i class="fa fa-cog"></i>Modify Details</a> -->
			</div>
			<div class="car-refine">
				<div class="car-re-data">
					<h3>Additional</h3>
					<div>
						<p>
							<span>Add on</span>
							<select name="addon" class="addon">
             		<option disabled>Add on</option>
             		<option value="5" selected>Depreciation</option>
             		<option value="4">Depreciation, Consumables</option>
             		<option value="3">Depreciation, Tyre, Consumables</option>
             		<option value="2">Depreciation, Tyre, Consumables, Hydrostatic Lock</option>
             		<option value="1">Depreciation, Tyre, Consumables, Hydrostatic Lock  with Return to Invoice</option>
          		</select>

							<span>Insurance Perecentage</span>
							<select name="insper" class="insper">
             		<option disabled>Insurance Percentage</option>
             		<option value="60" selected>60</option>
             		<option value="0">0</option>
             		<option value="10">10</option>
             		<option value="20">20</option>
             		<option value="30">30</option>
             		<option value="40">40</option>
             		<option value="50">50</option>
             		<option value="70">70</option>
             		<option value="80">80</option>
             		<option value="90">90</option>
								<option value="100">100</option>
          		</select>
						</p>
					</div>
				</div>
				<button id="update-add" class="ref-submit">Update</button>
			</div>
			<div class="car-wrap-plan">
				<div class="car-plan">
					<span>Showing results from <?php echo count($resp); ?> insurers</span>
					<!-- <div>
						<span class="car-sort">Sort By:</span>
						<select name="car-price" class="car-price">
							<option value="0">Match</option>
							<option value="1">Price</option>
						</select>
					</div> -->
				</div>
				<div class="car-result-data">
					<img class="load-up" src='assets/images/loader-up.gif' alt='policy-logo'>
					<div class="car-policy-plan">
						<?php
							if($resp){
								usort($resp, function($a, $b) {
	    						return $a['finalPremium'] - $b['finalPremium'];
								});
								//print_r($resp);
								$i = 1;
								$flg = true;
								foreach ($resp as $data) {
									if($flg) {
										if($range2 < $data['finalPremium']) {
											echo "<span class='more-policy'>We have more policies for you, outside provided budget</span>";
											$flg = false;
										}
									}
									echo "<div class='car-cmp-parent' id='". $i ."'>
										<p>
											<img class='get-logo' src='assets/images/loader.gif' alt='policy-logo'>
											<span class='car-amt car-cmp' id='cn". $i ."'>" . $data['companyName'] .  "</span>
										</p>
										<p class='car-premium'>
			              	<i class='fa fa-inr'></i> <span class='car-amt' id='cp". $i ."'>" . number_format($data['finalPremium']) . "</span>
										</p>
										<p>
											<button value='". $i ."' class='car-buy buynow'>Buy Now</button>
										</p>
									</div>";
									$i++;
								}
							}
							// else {
							// 	echo "<script type='text/javascript'> window.location.replace('index.php'); <script>";
							// }
						?>
<!-- 						<div class="car-idv-cont">
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
						</div> -->
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Content ends here -->

<script type="text/javascript">
 //Assign car insurance company logo
  var $parent = $('.car-policy-plan');

  $(function plogo() {
    $('.car-policy-plan .car-cmp').each( function () {
      var getcmp = $(this).text();
      //console.log(getcmp);

      if(getcmp.match(/Bajaj/g)) {
     	  //console.log("baj");
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/bajaj.jpg");
      } else if(getcmp.match(/Tata/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/tata-aig.jpg");
      } else if(getcmp.match(/Future/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/future-gen.png");
      } else if(getcmp.match(/Royal/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/royal-sundaram.jpg");
      } else if(getcmp.match(/Liberty/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/liberty-videocon.png");
      } else if(getcmp.match(/Oriental/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/oriental.png");
      } else if(getcmp.match(/Bharti/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/bharti.png");
      } else if(getcmp.match(/HDFC/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/hdfc-ergo.jpg");
      } else if(getcmp.match(/ICICI/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/icici-lombard.png");
      } else if(getcmp.match(/IFFCO/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/iffco-tokio.png");
      } else if(getcmp.match(/L&T/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/lnt.png");
      } else if(getcmp.match(/Universal/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/universal-motor.png");
      } else if(getcmp.match(/Agriculture/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/aic.png");
      } else if(getcmp.match(/Apollo/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/apollo.png");
      } else if(getcmp.match(/Cholamandalam/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/chola-ms.png");
      } else if(getcmp.match(/Cigna/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/cigna.png");
      } else if(getcmp.match(/Export/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/ecgc.jpg");
      } else if(getcmp.match(/Magma/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/magma.png");
      } else if(getcmp.match(/Max/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/max-bupa.jpg");
      } else if(getcmp.match(/National/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/national.jpg");
      } else if(getcmp.match(/Raheja/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/raheja.gif");
      } else if(getcmp.match(/Reliance/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/reliance.png");
      } else if(getcmp.match(/Religare/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/religare.gif");
      } else if(getcmp.match(/SBI/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/sbi.png");
      } else if(getcmp.match(/Shriram/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/shriram.jpg");
      } else if(getcmp.match(/Star/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/star.png");
      } else if(getcmp.match(/The New India/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/the-new-india.jpg");
      } else if(getcmp.match(/United/g)) {
     		$(this).parent().find("img").attr("src", "assets/images/ins-comp/united-india.jpg");
      } else {
      	//console.log("el");
      	$(this).parent().find("img").css('width', 'auto');
		  	$(this).parent().find("img").attr('src', 'assets/images/loader.gif');
      }
    });
  });

	//Default state of select box
	$('select[name^="addon"] option:selected').attr("selected",null);
	//$('select[name^="addon"] option[value="5"]').attr("selected","selected");
	$('select[name^="insper"] option:selected').attr("selected",null);
	//$('select[name^="insper"] option[value="60"]').attr("selected","selected");

</script>

<?php include("footer.php"); ?>
