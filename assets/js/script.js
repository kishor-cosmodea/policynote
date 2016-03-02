/*
 *  Author: Me
 *
 */


// Window load functions
$(window).load(function() {

 	  var pathname = window.location.pathname; // Returns path only
		// var url      = window.location.href;     // Returns full URL

		var pos_home = pathname.search("index.php");

		if(pos_home == 12) {
			$('#nav-home').addClass('active');
		}

		var pos_car = pathname.search("car-insurance.php");

		if(pos_car == 12) {
			$('#nav-car').addClass('active');
		}

		var pos_car_comp = pathname.search("car-compare.php");

		if(pos_car_comp == 12) {
			$('#nav-car').addClass('active');
		}

		var pos_car_chk = pathname.search("car-checkout.php");

		if(pos_car_chk == 12) {
			$('#nav-car').addClass('active');
		}

		var pos_health = pathname.search("health-insurance.php");

		if(pos_health == 12) {
			$('#nav-health').addClass('active');	
		}

		var pos_health_comp = pathname.search("health-compare.php");

		if(pos_health_comp == 12) {
			$('#nav-health').addClass('active');	
		}
		
		var pos_about = pathname.search("about-us.php");

		if(pos_about == 12) {
			$('#nav-about').addClass('active');	
		}

	});
