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

		// var pos_health = pathname.search("health-insurance.php");

		// if(pos_health == 12) {
		// 	$('#nav-health').addClass('active');	
		// }

		// var pos_health_comp = pathname.search("health-compare.php");

		// if(pos_health_comp == 12) {
		// 	$('#nav-health').addClass('active');	
		// }
		
		// var pos_car_chk = pathname.search("health-checkout.php");

		// if(pos_car_chk == 12) {
		// 	$('#nav-health').addClass('active');
		// }

		var pos_about = pathname.search("about-us.php");

		if(pos_about == 12) {
			$('#nav-about').addClass('active');
		}

		var pos_about = pathname.search("contact-us.php");

		if(pos_about == 12) {
			$('#nav-contact').addClass('active');	
		}

	});


// Hide input placeholder on focus event
$('input[placeholder]').on('focus', function () {
	var $this = $(this);
	$this.data('placeholder', $this.prop('placeholder')).removeAttr('placeholder');
}).on('blur', function () {
	var $this = $(this);
	$this.prop('placeholder', $this.data('placeholder'));
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



/*
	Document ready function
*/
$(document).ready(function() {

//Clear fuel type and variant
$( "#car-model" ).on('click', function() {
		$('.sel-fuel option, .sel-var option').prop('selected', function () {
			return this.defaultSelected;
		});


// $( ".car-year" ).on('click', function() {
// 		$('.polstat option, .claimstat option, .ncbpolicy option').prop('selected', function () {
// 			return this.defaultSelected;
// 		});


		//Call to selected car brand
		$.ajax({
			method: "get",
			url: "http://52.32.253.76:8080/webapp/api/business/getVehicleDetailsByMakeId/" + $("#car-model").val(),
			dataType: 'json',
			success: function(data) {
    	//alert(data);
    	fueltype(data);
    	//console.log(JSON.stringify(data));
		},
		error: function() {
	      //alert("error");
	    }
	  });

	});

	function fueltype (data) {
		$('.sel-fuel').on('change', function() {
			$('.sel-var').empty();
			var typefuel = $(this).val();
			//console.log(typefuel);
			if (typefuel) {
				$.each(data, function (index, element) {
					$('.sel-var').append('<option value="" disabled selected>Variant</option>');
					if (element.fuel_type == typefuel) {
              $('.sel-var').append('<option>'+element.model_id.model_name +' - '+element.varient +'</option>');
            }
        });
			}
		});
	}

    //Get car brand name
    $("#car-model").change(function(){
    	$("#car-hide").val($("#car-model").find("option:selected").text());
  	});

//Car year functionality
	$('.car-year').on('change', function() {
		var caryear = parseInt($(this).val());
		if(caryear == 2016) {
			//console.log(caryear);
			$('.polstat option.renew').hide();
			$('.polstat option.buynew').show();
			//$('.polstat').val("Buy New") = $("option:selected", this);
		} else {
			//console.log(caryear);
			$('.polstat option.buynew').hide();
			$('.polstat option.renew').show();
			//$('.polstat').val("Renew") = $("option:selected", this);
		}

	});


			$('.polstat').on('change', function() {
				//$('.claimstatr').empty();
				var ren = "Renew";

				if($(".polstat option:selected" ).val() == ren) {
					$('.claimstat').show();
				}	else {
					$('.claimstat').hide();
					$('.ncbpolicy').hide();
				}

			});


			$('.claimstat').on('change', function() {
				var claim = "No";
				if($(".claimstat option:selected" ).val() == claim) {
					$('.ncbpolicy').show();
				}	else {
					$('.ncbpolicy').hide();
				}
			});


//Get All Makes Model Variant Data
		$.ajax({
			method: "get",
			url: "http://52.32.253.76:8080/webapp/api/business/getAllMakesModelVariantData",
			dataType: 'json',
			success: function(data) {
    	//alert(data);
    	allmodeldata(data);
    	//console.log(JSON.stringify(data));
		},
		error: function() {
	      //alert("error");
	    }
	  });

  	function allmodeldata (data) {
	   	$.each(data, function (index, element) {
	   			//console.log(element.idv_2016);

      });
    }


});

