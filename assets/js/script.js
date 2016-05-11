/*
 *  Author: Me
 *
 */


// Window load functions
$(window).load(function() {

 	  var pathname = window.location.pathname; // Returns path only
		// var url      = window.location.href;     // Returns full URL

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
		$('.sel-fuel option, .sel-var option, .car-year option, .polstat option, .claimstat option, .ncbpolicy option').prop('selected', function () {
			return this.defaultSelected;
		});

	// $( ".car-year" ).on('click', function() {
	// 	$('.polstat option, .claimstat option, .ncbpolicy option').prop('selected', function () {
	// 		return this.defaultSelected;
	// });

		//Call to selected car brand
		if($("#car-model").val()) {
		$.ajax({
			method: "get",
			url: "http://52.32.253.76:8080/webapp/api/business/getVehicleDetailsByMakeId/" + $("#car-model").val(),
			dataType: 'json',
			success: function(data) {
    	//alert(data);
    	fueltype(data);
    	asignidv(data);
    	//console.log(JSON.stringify(data));
		},
		error: function() {
	      //alert("error");
	    }
	  });
		}
	});

	function fueltype (data) {
		$('.sel-fuel').on('change', function() {
			$('.sel-var').empty();
			$('.sel-var').append('<option value="" disabled selected>Variant</option>');
			var typefuel = $(this).val();
			//console.log(typefuel);
			if (typefuel) {
			//console.log("if");
				$.each(data, function (index, element) {
					//$('.sel-var').append('<option value="" disabled selected>Variant</option>');
					if (element.fuel_type == typefuel) {
						//console.log(typefuel);
						//console.log(element.fuel_type);
							//console.log("infill");
              $('.sel-var').append('<option>'+element.model_id.model_name +' - '+element.varient +'</option>');
            }
            //if (element.fuel_type == null) {
            	//console.log("no type");
            	//$('.sel-var').append('<option>'+element.model_id.model_name +' - '+element.varient +'</option>');
            //}
        });
			}
		});
	}


    //Get car brand name
    $("#car-model").change(function() {
    	$("#car-hide").val($("#car-model").find("option:selected").text());
  	});


    //Get car idv
    //$(".car-year").change(function() {
    	//console.log("ch");
    	//$("#car-idv").val($("#car-year").find("option:selected").text());
  	//});


//Car year functionality
	$('.polstat option.buynew').hide();
	$('.polstat option.renew').hide();

	$('.car-year').on('change', function() {
		var caryear = $(this).val();
		//console.log(caryear);
		if(caryear == "idv_2016") {
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


			function asignidv(data) {

			$('.car-year').on('change', function() {
				var caryr = $(this).val();
				var ncaryr = jQuery.trim(caryr);
				var fuel = $(".sel-fuel").val();
				var vari = $(".sel-var").val();
				var splivar = vari.split('-');
				//console.log(splivar);
				var nmodel = splivar[0];
				var nvari = splivar[1];
				var nnmodel = jQuery.trim(nmodel);
				var nnvari = jQuery.trim(nvari);
				if(nnvari == "") {
					var nnvari = "-";
				}
				//console.log(nnmodel);
				//console.log(nnvari);

				$.each(data, function (index, element) {
					//console.log(element.idv_data.idv_2016);
					//if (element.model_id.model_name == nnmodel && element.varient == nnvari && element.fuel_type == fuel && element.idv_data == ncaryr ) {
					//console.log(ncaryr);
					//console.log(element.idv_data);

					//if (element.idv_data == ncaryr) {
						//console.log("if");
						//console.log(element.idv_data);
						//$("#car-idv").val(element.idv_data.idv_2016);
					//} else {
						//console.log("el");
					//}

					var results = [];
					var searchField = element.idv_data;
					//console.log(searchField);
					var searchVal = ncaryr;
					//console.log(data.length);
					for (var i=0 ; i < data.length ; i++) {
					    if (data[i][searchField] == searchVal) {
					        results.push(data[i]);
					    }
					}
						console.log(results);

				});
			});
		}


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


  //Range slider
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 50000,
      values: [ 0, 5000 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "<i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + ui.values[ 0 ] + "  -  <i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + ui.values[ 1 ] );
				$( "#amount1" ).val(ui.values[ 0 ]);
				$( "#amount2" ).val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html( "<i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + $( "#slider-range" ).slider( "values", 0 ) +
     "  -  <i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + $( "#slider-range" ).slider( "values", 1 ) );
  });


});

