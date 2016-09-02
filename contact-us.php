<?php
$description="";
$pagetitle="About Us |";
include("header.php");
?>

	<div class="about-cont">
		<div class="wrap-cont">
			<div>
				<h2>Get in touch</h2>
			</div>
			<div class="about-street">
				<p>Policynote</p>
				<div><img src="assets/images/cont.png" alt="map" width="37" height="37"></div>
				<div><span>02, New Street,</span>
				<span>Star Villa,</span>
				<span>Mumbai-400001</span>
				</div>
				<p class="about-us">Write to us</p>
				<span><img src="assets/images/msg.png" alt="map" width="37" height="37"><a href="mail:support@policynote.com">support@policynote.com</a></span>
				<span><img src="assets/images/tele.png" alt="map" width="37" height="37"><a href="tel:022-22222222">022-22222222</a></span>
			</div>
			<div class="about-add">
				<!-- <img src="assets/images/about-map.png" alt="map"> -->
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:475px;width:491px;'><div id='gmap_canvas' style='height:475px;width:491px;'></div><div><small><a href="http://www.embedgooglemaps.com">Generate your Google map here, quick and easy!</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">freedirectorysubmissionsites.com is the most complete web directory list of 2016. Here you can find all directories that have high PR and are search engine friendly. Submitting a link to a link directory is a valuable SEO-strategy, even in 2016. You have to pay attention to the following: if the links you put on a directory are dofollow, otherwise they are of no value to your business.</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(19.2183307,72.97808970000006),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.2183307,72.97808970000006)});infowindow = new google.maps.InfoWindow({content:'<strong>Cosmodea Digital Services</strong><br>Thane, Maharashtra, India<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			</div>
		</div>
	</div>

<?php include("footer.php"); ?>

