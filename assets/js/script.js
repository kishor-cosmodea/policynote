/*
 *  Author: Me
 *
 */


// Window load functions
$(window).load(function() {

 	  var pathname = window.location.pathname; // Returns path only
		// var url      = window.location.href;     // Returns full URL

		// alert(pathname);

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
		
		var pos_car_chk = pathname.search("health-checkout.php");

		if(pos_car_chk == 12) {
			$('#nav-health').addClass('active');
		}

		var pos_about = pathname.search("about-us.php");

		if(pos_about == 12) {
			$('#nav-about').addClass('active');
		}

		var pos_about = pathname.search("contact-us.php");

		if(pos_about == 12) {
			$('#nav-contact').addClass('active');	
		}

	});


// Document ready functions
$(document).ready(function(){
	//alert("hi");

});


// Hide input placeholder on focus event
$('input[placeholder]').on('focus', function () {
	var $this = $(this);
	$this.data('placeholder', $this.prop('placeholder')).removeAttr('placeholder')
}).on('blur', function () {
	var $this = $(this);
	$this.prop('placeholder', $this.data('placeholder'));
});


//Car and health insurance buttons
$('.car-re-add button, .health-item button').on("click", function () {

	if ( $(this).hasClass( "act" ) ) {
		$(this).removeClass('act');
	} else {
		$(this).addClass('act');
	}

});


//Health insurance gender buttons
$('.health-g-item button').on("click", function () {

	if ( $("button").hasClass( 'act' ) ) {
		console.log("if");
		$(this).removeClass('act');
	} else {
		console.log("el");
		$(this).addClass('act');
	}

});


//input mobile validation
    var inputMobile = [];
    $(function() {
      $(".mobile").each(function(i) {
        inputMobile[i]=this.defaultValue;
         $(this).data("idx",i); // save this field's index to access later
      });
      $(".mobile").on("keyup", function (e) {
        var $field = $(this),
            val=this.value,
            $thisIndex=parseInt($field.data("idx"),10); // retrieve the index
//        window.console && console.log($field.is(":invalid"));
          //  $field.is(":invalid") is for Safari, it must be the last to not error in IE8
        if (this.validity && this.validity.badInput || isNaN(val) || $field.is(":invalid") ) {
            this.value = inputMobile[$thisIndex];
            return;
        } 
        if (val.length > Number($field.attr("maxlength"))) {
          val=val.slice(0, 10);
          $field.val(val);
        }
        inputMobile[$thisIndex]=val;
      });      
    });
