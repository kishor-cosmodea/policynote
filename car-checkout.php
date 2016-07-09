<?php
	$description="";
	$pagetitle="Car Checkout |";
	include("header.php");
?>

<script type="text/javascript">
    $(function () {
        if ($.cookie("cpolicy") != null && $.cookie("cpre") != null && $.cookie("cmodel") != null && $.cookie("cvari") != null && $.cookie("cnregyr") != null && $.cookie("cidv") != null) {

            $(".cpolicy").html($.cookie("cpolicy"));
            $(".cpre").html($.cookie("cpre"));
            $(".cmodel").html($.cookie("cmodel"));
            $(".cvari").html($.cookie("cvari"));
            $(".cnregyr").html($.cookie("cnregyr"));
            $(".cidv").html($.cookie("cidv"));
            $(".caddon").html($.cookie("caddon"));
            $(".cinsper").html($.cookie("cinsper"));
            $(".cpolicon").attr('src', $.cookie("cpolicon"));

            $.removeCookie("cpolicy");
            $.removeCookie("cpre");
            $.removeCookie("cmodel");
            $.removeCookie("cvari");
            $.removeCookie("cnregyr");
            $.removeCookie("cidv");
            $.removeCookie("caddon");
            $.removeCookie("cinsper");
            $.removeCookie("cpolicon");
        } else {
	        	//console.log("error");
	          window.location.replace("index.php");
        	}
    });
</script>

<!-- Content starts here-->
<div class="container">
	<div class="wrapper car-chk-cont">
		<div class="car-profile-content">
			<div class="car-chk-text">
				<span onclick="goBack()"><i class="fa fa-arrow-circle-left fa-lg"></i> Back to Results</span>
			</div>
			<div class="car-checkout">
				<div class="car-ch-ins">
					<img class="cpolicon" src="assets/images/loader.gif" alt="policy-logo">
					<span class="cpolicy"></span>
					<span class="car-ct-amt cmodel"></span>
					<span class="cvari"></span>
					<span class="car-ct-amt"><i class="fa fa-inr"></i> <span class="cpre"></span></span>
				</div>
				<div class="car-ch-idv">
					<h3>Insured Declared Value:</h3>
					<span>Year: </span><span class="cnregyr"></span><span class="idv-right"><i class="fa fa-inr"></i> <span class="cidv"></span></span>
				</div>
				<div class="car-ch-add">
					<h3>Addon</h3>
					<span>Addon applicable</span>
					<span class="caddon"></span>
				</div>
				<div class="car-ch-dis">
					<h3>Insurance Percentage</h3>
					<span>Percentage applicable</span>
					<span class="cinsper"></span>
				</div>
			</div>
			<div class="car-chout-data">

				<div class="car-chout-plan">
					<div class="car-chout-prop">
						<span>1</span> <p>Contact Details</p>
					</div>
					<div class="car-chout-user">
						<input class="bfname" type="text" name="fname" placeholder="First Name">
						<input class="blname" type="text" name="lname" placeholder="Last Name">
						<p>
							<input class="bemail" type="text" name="email" placeholder="Email">
							<input class="bmobile" type="text" name="mobile" placeholder="Mobile" maxlength="10">
						</p>
						</div>
					</div>

					<div class="car-chout-plan">
						<div class="car-chout-prop">
							<span>2</span> <p>Policy Details</p>
						</div>
						<div class="car-chout-user">
							<span>When do you want to start the policy?</span>
							<p class="ch-inp">
								<input id="dd" type="text" name="dd" placeholder="DD" maxlength="2">
								<input id="mm" type="text" name="mm" placeholder="MM" maxlength="2">
								<input id="yyyy" type="text" name="yyyy" placeholder="YYYY" maxlength="4">
							</p>
							</div>
						</div>

						<div class="car-chout-plan">
							<div class="car-chout-prop">
								<span>3</span> <p>Get Policy</p>
							</div>
							<div class="car-chout-user">
								<span>Buy at Home</span>
								<span>facilitator will assist on phone & in-person</span>
								<p class="car-chout-buy"><button id="get-policy">Confirm</button></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- Content ends here -->

		<?php include("footer.php"); ?>
