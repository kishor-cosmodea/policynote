<?php
$description="";
$pagetitle="Car Compare |";
include("header.php");
?>

<?php

	$carreg =  $_POST['carreg'];
	$year =  $_POST['year'];
	$carname = $_POST['carname'];
	$variant = $_POST['variant'];
	$fueltype = $_POST['fueltype'];
	$claimStatus = $_POST['claimStatus'];
	$idv = $_POST['caridv'];

	// if($_POST['claimStatus'] == "") {
	// 	$ncb = 0;
	// 	$claimStatus = "No";
	// }
	// echo $ncb;
	// echo $claimStatus;

  //echo $variant;
	$splitted = explode("-",$variant);
	//echo $splitted;
	$model = trim($splitted[0]);
	$vari = trim($splitted[1]);

	if($vari == "") {
		$vari = "-";
	}

	if($claimStatus == "Yes") {
		$ncb = 0;
		$claimstat = "Yes";
		//echo $ncb;
		//echo $claimstat;
	} else {
		$ncb = $_POST['ncbPolicy'];

		if($ncb == "") {
			$ncb = 0;
		}
		$claimstat = "No";
		//echo $int;
		//echo $claimstat;
	}

	$intval = (int)$ncb;

	//echo $carreg;
	//echo $year;
	//echo $carname;
	//echo $model;
	//echo $int;
	//echo $claimStatus;


	$data = array(
	  "regNumber" => $carreg,
	  "regDate"=> $year,
	  "make"=> $carname,
	  "model"=> $model,
	  "variant"=> $vari,
	  "ncbPolicy"=> $intval,
	  "claimStatus"=> $claimstat,
	  "idv"=> $idv,
	  "insurancePerecentage"=>"0",
	  "addon"=> 0,
	  "premium"=> 0,
	  "electronic"=>""
	);

	$url_send ="http://52.32.253.76:8080/webapp/api/business/getFinalPremium";

	$str_data = json_encode($data);

	//echo $str_data;
	//print_r($str_data);
	//var_dump($str_data);

	function sendPostData($url, $post) {
	  $ch = curl_init($url);
	  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
	  curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	  $result = curl_exec($ch);
	  curl_close($ch);
	  $json = json_decode($result, true);
	  return $json;
	}
	
	//echo " " . sendPostData($url_send, $str_data);
	$resp = sendPostData($url_send, $str_data);
	
	//echo $resp;
	//var_dump($resp);
	//print_r($resp);
?>


<!-- Content starts here-->
<div class="container">
	<div class="car-sel-info">
		<div>
			<p>SHOWING RESULTS FOR</p>
			<span class="car-name"><?php echo $carname; ?></span>
			<span class="car-vari"><?php echo "( " . $fueltype . " )    "; echo $variant; ?></span>
			<span ><?php echo $carreg; ?></span>
		</div>
		<div>
			<p>IDV</p>
			<span class="car-idv">Insured Declared Value (IDV)</span>
			<span class="idvamt"><i class="fa fa-inr"></i> <?php echo number_format($idv); ?></span>
			<span>(The IDV is based on your car registration year)</span>
		</div>
		<div>
			<p>POLICY DETAILS</p>
			<span class="reg-yr">Registration Year ......................... <?php $spliyear = explode("_",$year); $newyr = $spliyear[1]; echo $newyr; ?></span>
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
							<span><input type="checkbox" name="insper" value="Insurance Perecentage">Insurance Perecentage</span>
							<span><input type="checkbox" name="addon" value="addon">Addon</span>
							<span><input type="checkbox" name="premium" value="premium">Premium</span>
							<span><input type="checkbox" name="electronic" value="electronic">Electronic</span>
						</p>
					</div>
				</div>
				<button class="ref-submit">Update</button>
			</div>
			<div class="car-wrap-plan">
				<div class="car-plan">
					<span>Showing results from <?php echo count($resp); ?> insurers</span>
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
						<?php
							$i = 1;
							foreach ($resp as $data) {
								echo "<div id='". $i ."'>
									<p>
										<img src='assets/images/loader.gif' alt='policy-logo'>
										<span class='car-amt' id='cn". $i ."'>" . $data['companyName'] .  "</span>
									</p>
									<p class='car-premium'>

		              <i class='fa fa-inr'></i> <span class='car-amt' id='cp". $i ."'>" . number_format($data['finalPremium']) .  "</span>

									</p>
									<p>
										<button value='". $i ."' class='car-buy buynow'>Buy Now</button>
									</p>
								</div>";
								$i++;
							}
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

<?php include("footer.php"); ?>
