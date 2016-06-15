/*
 *  Author: Me
 *
 */

// Window load function
$(window).load(function() {

 	  var pathname = window.location.pathname; // Returns path only
		// var url      = window.location.href;     // Returns full URL
		
		var pos_car_ind = pathname.search("index.php");

		if(pos_car_ind == 1) {
			$('#nav-car').addClass('active');
		}

		var pos_car_comp = pathname.search("car-compare.php");

		if(pos_car_comp == 1) {
			$('#nav-car').addClass('active');
		}

		var pos_car_chk = pathname.search("car-checkout.php");

		if(pos_car_chk == 1) {
			$('#nav-car').addClass('active');
		}

		var pos_about = pathname.search("about-us.php");

		if(pos_about == 1) {
			$('#nav-about').addClass('active');
		}

		var pos_contact = pathname.search("contact-us.php");

		if(pos_contact == 1) {
			$('#nav-contact').addClass('active');
		}

});


// Document ready function
$(document).ready(function() {

	$(".range-submit").click(function(e) {
		e.preventDefault();
		if($('#amount1').val() == $('#amount2').val() || $('#amount2').val() == "0") {
			$('.range-submit').css( "border", "4px solid #ff0000" );
		} else {
			$('.main-text').fadeOut( "hide" );
			$('.car-quote').fadeIn( "show" );
		}
	});

	$("#get-car-quote").click(function(e) {
		e.preventDefault();

		var carModel  = jQuery.trim($('#car-model').val());
		var selFuel   = jQuery.trim($('.sel-fuel').val());
		var selVar    = jQuery.trim($('.sel-var').val());
		var carRegyr  = jQuery.trim($('#carregyr').val());
		var carYear   = jQuery.trim($('.car-year').val());
		var polStat   = jQuery.trim($('.polstat').val());

	if(carModel == "") {
		$('#car-model').css( "border", "4px solid #ff0000" );
	} else {
		$('#car-model').css( "border", "4px solid #70cbd2" );
	}

	if(selFuel == "") {
		$('.sel-fuel').css( "border", "4px solid #ff0000" );
	} else {
		$('.sel-fuel').css( "border", "4px solid #70cbd2" );
	}

	if(selVar == "") {	
		$('.sel-var').css( "border", "4px solid #ff0000" );
	} else {
		$('.sel-var').css( "border", "4px solid #70cbd2" );
	}

	var regnum = jQuery.trim(($('#carregyr').val()));
	var regPattern = /^[A-Za-z]{2}[0-9]{1,2}(?:[A-Za-z])?(?:[A-Za-z]*)?[0-9]{4}$/; //Regex for MH12ST1122
	//if(carRegyr == "") {
	if(!(regPattern.test(regnum)) || regnum == "") {
		$('#carregyr').css( "border", "4px solid #ff0000" );
	} else {
		$('#carregyr').css( "border", "4px solid #70cbd2" );
	}

	if(carYear == "") {
		$('.car-year').css( "border", "4px solid #ff0000" );
	} else {
		$('.car-year').css( "border", "4px solid #70cbd2" );
	}

	if(polStat == "") {
		$('.polstat').css( "border", "4px solid #ff0000" );
	} else {
		$('.polstat').css( "border", "4px solid #70cbd2" );
	}

	if(!(carModel == "") && !(selFuel == "") && !(selVar == "") && !(carRegyr == "") && !(carYear == "") && !(polStat == "")) {
		$( "#car-details" ).submit();
	}

	});


	$( "#car-model" ).on('click', function() {
		$('.loader').show();
		$('.sel-fuel').attr('disabled', 'disabled');
		$('.sel-var').empty();
		$('.sel-var').append('<option value="" disabled selected>Variant</option>');
		$('.sel-fuel option, .sel-var option, .car-year option, .polstat option, .claimstat option, .ncbpolicy option').prop('selected', function () {
			return this.defaultSelected;
		});
	});


	//Clear fuel type and variant
	$( "#car-model" ).on('change', function() {

			//Call to selected car brand
			if($("#car-model").val()) {
				//console.log("got val");
				$.post('get-vehicle.php',
					'val=' + $("#car-model").val(),
					function (data) {
      			//alert(data);
      			fueltype(data);
      			assignidv(data);
   				});

				/*$.ajax({
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
			  });*/
			}
	});

	//Assign variant
	function fueltype (data) {
		//console.log("in fuel asign");
		$('.loader').hide();
		$('.sel-fuel').removeAttr('disabled');
		$('.sel-fuel').on('change', function() {
			$('.sel-var').empty();
			$('.sel-var').append('<option value="" disabled selected>Variant</option>');
			var typefuel = $(this).val();
			//console.log(typefuel);
			if (typefuel) {
			//console.log("if");
				$.each(JSON.parse(data), function (index, element) {
					//$('.sel-var').append('<option value="" disabled selected>Variant</option>');
					if (element.fuel_type == typefuel) {
							//console.log("infill");
              $('.sel-var').append('<option>'+element.model_id.model_name +' - '+element.varient +'</option>');
            }

            //Assign variant in a ascending order
						var sortSelect = function (select, attr, order) {
						  if(attr === 'text') {
						    if(order === 'asc') {
						      $(select).html($(select).children('option').sort(function (x, y) {
						        return $(x).text().toUpperCase() < $(y).text().toUpperCase() ? -1 : 1;
						      }));
						      $(select).get(0).selectedIndex = 0;
						    }
						  }
						};
						sortSelect('.sel-var', 'text', 'asc');
        });
			}
		});
	}

	//Assign IDV
		function assignidv(data) {

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
					nnvari = "-";
				}
				//console.log(nnmodel + nnvari);

				$.each(JSON.parse(data), function (index, element) {

					if (element.model_id.model_name == nnmodel && element.varient == nnvari && element.fuel_type == fuel ) {
						
						if (ncaryr == "idv_2016") {
							//console.log(element.idv_data.idv_2016);
							$('#car-idv').val(element.idv_data.idv_2016);
						} else if (ncaryr == "idv_2015") {
							//console.log(element.idv_data.idv_2015);
							$('#car-idv').val(element.idv_data.idv_2015);
						} else if (ncaryr == "idv_2014") {
							//console.log(element.idv_data.idv_2014);
							$('#car-idv').val(element.idv_data.idv_2014);
						} else if (ncaryr == "idv_2013") {
							//console.log(element.idv_data.idv_2013);
							$('#car-idv').val(element.idv_data.idv_2013);
						} else if (ncaryr == "idv_2012") {
							//console.log(element.idv_data.idv_2012);
							$('#car-idv').val(element.idv_data.idv_2012);
						} else if (ncaryr == "idv_2011") {
							//console.log(element.idv_data.idv_2011);
							$('#car-idv').val(element.idv_data.idv_2011);
						} else if (ncaryr == "idv_2010") {
							//console.log(element.idv_data.idv_2010);
							$('#car-idv').val(element.idv_data.idv_2010);
						} else if (ncaryr == "idv_2009") {
							//console.log(element.idv_data.idv_2009);
							$('#car-idv').val(element.idv_data.idv_2009);
						} else if (ncaryr == "idv_2008") {
							//console.log(element.idv_data.idv_2008);
							$('#car-idv').val(element.idv_data.idv_2008);
						} else if (ncaryr == "idv_2007") {
							//console.log(element.idv_data.idv_2007);
							$('#car-idv').val(element.idv_data.idv_2007);
						} else {
							//console.log("else");
							$('#car-idv').val("0");
						}

					}

				});
			});
		}


    //Get car brand name
    $("#car-model").change(function() {
    	$("#car-hide").val($("#car-model").find("option:selected").text());
  	});

		//Clear the year and policy status
    $(".sel-var").change(function() {
    	$('.car-year option, .polstat option').prop('selected', function () {
			return this.defaultSelected;
			});
			$('#car-idv').val("0");
  	});

	//Car year functionality
	$('.polstat option.buynew').hide();
	$('.polstat option.renew').hide();

	$('.car-year').on('change', function() {

		$('.polstat option, .claimstat option, .ncbpolicy option').prop('selected', function () {
			return this.defaultSelected;
		});

		var caryear = $(this).val();
		//console.log(caryear);
		if(caryear == "idv_2016") {
			//console.log(caryear);
			$('.polstat option.renew').hide();
			$('.polstat option.buynew').show();
			$('.claimstat').hide();
			$('.ncbpolicy').hide();
			//$('.polstat').val("Buy New") = $("option:selected", this);
		} else {
			//console.log(caryear);
			$('.polstat option.buynew').hide();
			$('.polstat option.renew').show();
			//$('.polstat').val("Renew") = $("option:selected", this);
		}

	});

			//Policy status on change
			$('.polstat').on('change', function() {

				$('.claimstat option, .ncbpolicy option').prop('selected', function () {
					return this.defaultSelected;
				});
				//$('.claimstatr').empty();
				var ren = "Renew";

				if($(".polstat option:selected" ).val() == ren) {
					$('.claimstat').show();
				}	else {
					$('.claimstat').hide();
					$('.ncbpolicy').hide();
				}

			});

			//Claim status on change
			$('.claimstat').on('change', function() {
				$('.ncbpolicy option').prop('selected', function () {
					return this.defaultSelected;
				});
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
      max: 500000,
      values: [ 0, 30000 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "<i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + ui.values[ 0 ] + "  to  <i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + ui.values[ 1 ] );
				$( "#amount1" ).val(ui.values[ 0 ]);
				$( "#amount2" ).val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html( "<i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + $( "#slider-range" ).slider( "values", 0 ) +
     "  to  <i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + $( "#slider-range" ).slider( "values", 1 ) );
  });


  //Assign car insurance company logo
  var $parent = $('.car-policy-plan');

  $(function () {
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


	//Update additional functionality
		$("#update-add").on('click', function() {

			$('.load-up').show();
			$('.car-policy-plan').empty();

			var uregyr  = $('.reg-yr').text();
    	var uspliyr = uregyr.split('.');
			var unregyr = jQuery.trim(uspliyr[25]);
			//console.log(unregyr);

			var uvari   = $('.car-vari').text();
			var uvspliyr = uvari.split(')');
			//console.log(uvspliyr);
			var unspli = jQuery.trim(uvspliyr[1]);
			//console.log(unspli);
			var unmods = unspli.split('-');
			//console.log(unmods);
			var unmod = jQuery.trim(unmods[0]);
			//console.log(unmod);

			//var unvari = jQuery.trim(unmods[1]);
			if(jQuery.trim(unmods[1]) == "") {
				var unvari = "-";
				//console.log(unvari);
			} else {
				unvari = jQuery.trim(unmods[1]);
				//console.log(unvari);
			}
			var uncb = $('#ncbval').val();
			var uclaim = $('#claimval').val();
			//console.log(uncb + " " + uclaim);

			var uidv = jQuery.trim($('.idvamt').text().replace(/,/g, ""));
			//console.log(uidv);
			var  uinsper = $(".insper option:selected" ).val();
			var  uaddon = $(".addon option:selected" ).val();
			//console.log(uinsper + uaddon);
			var data = {
        regNumber: $('.car-rnum').text(),
        regDate: unregyr,
        make: $('.car-name').text(),
        model: unmod,
        variant: unvari,
        ncbPolicy: uncb,
        claimStatus: uclaim,
        idv: uidv,
        insurancePerecentage: uinsper,
        addonType: uaddon
      }
      console.log(data);
		  //console.log("on click");
			// $.post('get-additional.php',
			// 	'val=' + data,
			// 	function (data) {
   //    		alert(data);
   // 		  });

			$.ajax({
			    type: "POST",
			    url: "get-additional.php",
			    data:{
			    	data : data
			    },
			    //dataType: "json",
			    success: function(data) {
			        //alert(data);
			    }

			});

		});


	//Buy now
	$('.car-policy-plan').delegate('button.buynow', 'click', function() {

		var cval  = $(this).val();
		var nval  = $(this).closest("div").attr("id");

		var cpolicy = $('#cn' + nval).text();
    var cpre = $('#cp' + nval).text();

    var cmodel  = $('.car-name').text();
    var cvari   = $('.car-vari').text();
    var regyr  = $('.reg-yr').text();
    var spliyr = regyr.split('.');
		//console.log(spliyr);
		var cnregyr = jQuery.trim(spliyr[25]);
    var cidv    = $('.idvamt').text();

    var caddon = $(".addon option:selected" ).val();
	    if(caddon == 5) {
	    	caddon = " - Depreciation";
	    } else if(caddon == 4) {
	    	caddon = " - Depreciation, Consumables";
	    } else if(caddon == 3) {
	    	caddon = " - Depreciation, Tyre, Consumables";
	    } else if(caddon == 2) {
	    	caddon = " - Depreciation, Tyre, Consumables, Hydrostatic Lock";
	    } else if(caddon == 1) {
	    	caddon = " - Depreciation, Tyre, Consumables, Hydrostatic Lock  with Return to Invoice";
	    } else {
	    	console.log("No addon selected");
	    }

		var cinsper = $(".insper option:selected" ).val();
		var ncinsper = " - " + cinsper + " %";
		var cpolicon = $("#" + nval + " " + '.get-logo').attr('src');
    //console.log(cpolicy + cpre + cvari + cnregyr + cidv + caddon + cinsper + cpolicon);

    $.cookie("cpolicy", cpolicy);
    $.cookie("cpre", cpre);
    $.cookie("cmodel", cmodel);
    $.cookie("cvari", cvari);
    $.cookie("cnregyr", cnregyr);
    $.cookie("cidv", cidv);
    $.cookie("caddon", caddon);
    $.cookie("cinsper", ncinsper);
    $.cookie("cpolicon", cpolicon);

    window.location.href = "../../car-checkout.php";

	});

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
