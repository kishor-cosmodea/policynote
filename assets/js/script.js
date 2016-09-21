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
		if($('#amount2').val() == "0") {
			$('.range-submit').css( "border", "2px solid #ff0000" );
		} else {
			$('.main-text').fadeOut( "hide" );
			$('.car-quote').fadeIn( "show" );
		}
	});

	$("#get-car-quote").click(function(e) {
		e.preventDefault();
		var flag = true;
		var carModel  = jQuery.trim($('#car-model').val());
		var selFuel   = jQuery.trim($('.sel-fuel').val());
		var selVar    = jQuery.trim($('.sel-var').val());
		var carRegyr  = jQuery.trim($('#carregyr').val());
		var carYear   = jQuery.trim($('.car-year').val());
		var polStat   = jQuery.trim($('.polstat').val());
		var claimStat   = jQuery.trim($('.claimstat').val());
		var ncbPolicy   = jQuery.trim($('.ncbpolicy').val());

		if(carModel == "") {
			$('#car-model').css( "border", "4px solid #ff0000" );
			flag = false;
		} else {
			$('#car-model').css( "border", "4px solid #8db0db" );
		}

		if(selFuel == "") {
			$('.sel-fuel').css( "border", "4px solid #ff0000" );
			flag = false;
		} else {
			$('.sel-fuel').css( "border", "4px solid #8db0db" );
		}

		if(selVar == "") {	
			$('.sel-var').css( "border", "4px solid #ff0000" );
			flag = false;
		} else {
			$('.sel-var').css( "border", "4px solid #8db0db" );
		}

		var regnum = jQuery.trim(($('#carregyr').val()));
		var regPattern = /^[A-Za-z]{2}[0-9]{2}(?:[A-Za-z]{2})?(?:[A-Za-z]*)?[0-9]{1,4}$/g; //Regex for MH12ST1122
		//if(carRegyr == "") {
		if(!(regPattern.test(regnum)) || regnum == "") {
			$('#carregyr').css( "border", "4px solid #ff0000" );
			flag = false;
		} else {
			$('#carregyr').css( "border", "4px solid #8db0db" );
		}

		if(carYear == "") {
			$('.car-year').css( "border", "4px solid #ff0000" );
			flag = false;
		} else {
			$('.car-year').css( "border", "4px solid #8db0db" );
		}

		if(polStat == "") {
			$('.polstat').css( "border", "4px solid #ff0000" );
			flag = false;
		} else {
			$('.polstat').css( "border", "4px solid #8db0db" );
		}

		if(carYear == "idv_2015") {
			if(claimStat == "") {
				$('.claimstat').css( "border", "4px solid #ff0000" );
				flag = false;
			} else {
				$('.claimstat').css( "border", "4px solid #8db0db" );
			}

			if(claimStat == "No") {
				if(ncbPolicy == "") {
					$('.ncbpolicy').css( "border", "4px solid #ff0000" );
					flag = false;
				} else {
					$('.ncbpolicy').css( "border", "4px solid #8db0db" );
				}
			}
		} else {
			$('.claimstat').css( "border", "4px solid #8db0db" );
	  }
			

		if(flag == true) {
			//console.log("flag true");
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
		$('#car-idv').val("0");
		$('.claimstat').hide();
		$('.in-cs .incon').css("display","none");
		$('.ncbpolicy').hide();
		$('.in-ncb .incon').css("display","none");
	});

	//Image slider
	var currentIndex = 0,
	  items = $('.slider div'),
	  itemAmt = items.length;

	function cycleItems() {
	  var item = $('.slider div').eq(currentIndex);
	  items.hide();
	  item.css('display','inline-block');
	}

	var autoSlide = setInterval(function() {
	  currentIndex += 1;
	  if (currentIndex > itemAmt - 1) {
	    currentIndex = 0;
	  }
	  cycleItems();
	}, 3000);


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
					url: "http://54.69.133.16:8080/webapp/api/business/getVehicleDetailsByMakeId/" + $("#car-model").val(),
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
			$('.in-cs .incon').css("display","none");
			$('.ncbpolicy').hide();
			$('.in-ncb .incon').css("display","none");
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
					$('.in-cs .incon').css("display","inline-block");
					$('.claimstat').css( "border", "4px solid #8db0db" );
				}	else {
					$('.claimstat').hide();
					$('.in-cs .incon').css("display","none");
					$('.ncbpolicy').hide();
					$('.in-ncb .incon').css("display","none");
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
					$('.in-ncb .incon').css("display","inline-block");
					$('.ncbpolicy').css( "border", "4px solid #8db0db" );
				}	else {
					$('.ncbpolicy').hide();
					$('.in-ncb .incon').css("display","none");
				}
			});


  //Range slider
  $(function() {

  	//slider single
		var stepSlider = document.getElementById('slider-step');

		noUiSlider.create(stepSlider, {
			start: [ 5000 ],
			step: 5000,
			range: {
				'min': [ 5000 ],
				'max': [ 500000 ]
			}
		});
    
    var stepSliderValueElement = document.getElementById('slider-step-value');
		stepSlider.noUiSlider.on('update', function( values, handle ) {
			stepSliderValueElement.innerHTML = parseInt(values[handle]);
			document.getElementById("amount2").value = parseInt(values[handle]);
		});

		//slider range
    // $( "#slider-range" ).slider({
    //   range: true,
    //   min: 0,
    //   max: 500000,
    //   values: [ 0, 30000 ],
    //   slide: function( event, ui ) {
    //     $( "#amount" ).html( "<i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + ui.values[ 0 ] + "  to  <i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + ui.values[ 1 ] );
				// $( "#amount1" ).val(ui.values[ 0 ]);
				// $( "#amount2" ).val(ui.values[ 1 ]);
    //   }
    // });
    //  $( "#amount" ).html( "<i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + $( "#slider-range" ).slider( "values", 0 ) +
    //   "  to  <i class='fa fa-inr fa-lg' aria-hidden='true'></i> " + $( "#slider-range" ).slider( "values", 1 ) );
  
  });

//$( "#slider-range + span" ).hide();
$('#slider-range span:first', this).hide();

	//Update additional functionality
		$("#update-add").on('click', function() {

				$('.load-up').show();
				$('.car-policy-plan').empty();

	      var uregnum = $('.car-rnum').text();
	      var umake = $('.car-name').text();

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
	        regNumber: uregnum,
	        regDate: unregyr,
	        make: umake,
	        model: unmod,
	        variant: unvari,
	        ncbPolicy: uncb,
	        claimStatus: uclaim,
	        idv: uidv,
	        insurancePerecentage: uinsper,
	        addonType: uaddon
	      };
	      //console.log(data);

				$.ajax({
				    type: "POST",
				    url: "get-additional.php",
				    data:{
				    	data : data
				    },
				    success: function(data) {
				        //console.log(data);
				        updateadd(data);
				    }
				});
		});


	//Assign updated premium data in compare page
	function updateadd (data) {
		//console.log(data);
		// 	data.sort(function(a, b) {
      	// return +a.finalPremium > +b.finalPremium ? 1 : -1;
		// });
		// console.log(data);
		function numberWithCommas(x) {
    	return x.toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
		}
		var i = 1;
		$.each(JSON.parse(data), function (index, element) {
			//console.log(data);

			var v_pound = element.finalPremium;
			var amount = v_pound;
			var finalNum = Math.round(amount);
			var finalPrem = numberWithCommas(finalNum);

			$(".car-policy-plan").append("<div class='car-cmp-parent' id='" + i +"'><p><img class='get-logo' src='assets/images/loader.gif' alt='policy-logo'><span class='car-amt car-cmp' id='cn"+ i +"'>" + element.companyName + "</span></p><p class='car-premium'><i class='fa fa-inr'></i> <span class='car-amt' id='cp"+ i +"'>" +   finalPrem +  "</span></p><p><button value='" + i + "' class='car-buy buynow'>Buy Now</button></p></div>");
			i++;
			$('.load-up').hide();
		});
		policylogo();
		$(".car-plan span").empty();
		var obj = eval('(' + data + ')');

		var objCount = 0;
		for(_obj in obj) objCount++;
		//alert(objCount);
		$(".car-plan span").html("Showing results from " + objCount + " insurers");
	}


  //Assign car insurance company logo
  var $parent = $('.car-policy-plan');

  function policylogo() {
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
  };


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

	
	$("#sub-email").on('click', function() {
		var uemail = jQuery.trim($(".sub").val());
		var emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; //Regex for test@test.com
		if(!(emailPattern.test(uemail)) || uemail == "") {
			$('.sub').css( "border", "1px solid #ff0000" );
		} else {
			$('.sub').css( "border", "1px solid #8db0db" );

			$.post('subscribe-email.php',
			'val=' + uemail,
			function (data) {
      	alert("Thank you");
      	window.location.replace("index.php");
   		});
		}
	});

//Buy policy
	// $("#get-policy").on('click', function() {
	// 	$("#myModal").show();
	// });
	
	$("#get-policy").on('click', function(e) {

		e.preventDefault();
		var flag = true;

		var firstName = jQuery.trim($(".bfname").val());
		var lastName = jQuery.trim($(".blname").val());
		var email = jQuery.trim($(".bemail").val());
		var mobile = jQuery.trim($(".bmobile").val());
		var dmy = jQuery.trim($("#date1").val());
		var alphaChar = /^[a-zA-Z]*$/;
		var emailPat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; //Regex for test@test.com
		var numChar = /[0-9]{10}$/;
		var dmyMatch = /(0[1-9]|[1-2][0-9]|3[0-1])(\/)(0[1-9]|1[0-2])(\/)[0-9]{4}$/;

		if(!(alphaChar.test(firstName)) || firstName == "") {
			$('.bfname').css( "border", "1px solid #ff0000" );
			flag = false;
		} else {
			$('.bfname').css( "border", "1px solid #8db0db" );
		}

		if(!(alphaChar.test(lastName)) || lastName == "") {
			$('.blname').css( "border", "1px solid #ff0000" );
			flag = false;
		} else {
			$('.blname').css( "border", "1px solid #8db0db" );
		}

		if(!(emailPat.test(email)) || email == "") {
			$('.bemail').css( "border", "1px solid #ff0000" );
			flag = false;
		} else {
			$('.bemail').css( "border", "1px solid #8db0db" );
		}

		if(!(numChar.test(mobile)) || mobile == "") {
			$('.bmobile').css( "border", "1px solid #ff0000" );
			flag = false;
		} else {
			$('.bmobile').css( "border", "1px solid #8db0db" );
		}

		if( dmy == "" || !(dmyMatch.test(dmy)) ) {
			$('#date1').css( "border", "1px solid #ff0000" );
			flag = false;
		} else {
			$('#date1').css( "border", "1px solid #8db0db" );
		}

		if(flag == true) {
			$("#myModal").show();
			//console.log("true flag");
		} else {
			$("#myModal").hide();
			//console.log("flag flag");
		}

	});


});


//Redirect user to homepage on click of confirm
$(document).ready(function() {

$("#policyconfirm").on("click", function () {
			//console.log("in pol conf");
			var firstName = jQuery.trim($(".bfname").val());
			var lastName = jQuery.trim($(".blname").val());
			var email = jQuery.trim($(".bemail").val());
			var mobile = jQuery.trim($(".bmobile").val());
			var dmy = jQuery.trim($("#date1").val());

			var policyStartDate = dmy;

			var policyCompany = jQuery.trim($(".cpolicy").text());
			var premiumAmount = jQuery.trim($(".cpre").text().replace(/,/g, ""));
			var make = jQuery.trim($(".cmodel").text());

			var cmodel = jQuery.trim($(".cvari").text());
			var smodel = cmodel.split(')');
			//console.log(smodel);
			var splimo = smodel[0];
			var ftype = splimo.split('(');
			var nftype = jQuery.trim(ftype[1]);
			//console.log(nftype);
			var somod = smodel[1];
			var spomod = somod.split('-');
			//console.log(spomod);
			var nspmodel = jQuery.trim(spomod[0]);
			//console.log(nspmodel);
			var nspvari = jQuery.trim(spomod[1]);
			if(nspvari == "") {
				nspvari = "-";
			}
			//console.log(nspvari);

			var model = nspmodel;
			var variant = nspvari;
			var fuelType = nftype;
			var idv = jQuery.trim($(".cidv").text().replace(/,/g, ""));

			var year = jQuery.trim($(".cnregyr").text());

			var addOnType = jQuery.trim($(".caddon").text());
		 	if(addOnType == "- Depreciation") {
		 	  	addOnType = "5";
		    } else if(addOnType == "- Depreciation, Consumables") {
		    	addOnType = "4";
		    } else if(addOnType == "- Depreciation, Tyre, Consumables") {
		    	addOnType = "3";
		    } else if(addOnType == "- Depreciation, Tyre, Consumables, Hydrostatic Lock") {
		    	addOnType = "2";
		    } else if(addOnType == "- Depreciation, Tyre, Consumables, Hydrostatic Lock  with Return to Invoice") {
		    	addOnType = "1";
		    } else {
		    	console.log("No addon selected");
		    }

	    var data = {
				firstName: firstName,
		    lastName: lastName,
		    email: email,
		    mobile: mobile,
		    policyStartDate: policyStartDate,
		    policyCompany: policyCompany,
		    premiumAmount: premiumAmount,
		    make: make,
		    model: nspmodel,
		    variant: variant,
		    fuelType: fuelType,
		    idv: idv,
		    year: year,
		    addOnType: addOnType
	    }
	    //console.log(data);

					$.ajax({
				    type: "POST",
				    url: "get-policy.php",
				    data:{
				    	data : data
				    },
				    success: function(data) {
				    	//console.log("Succeessfully sent");
				    	window.location.replace("index.php");
				    }
					});
});

	$("#redirback").on("click", function () {
		$("#myModal").hide();
	});

	//Testimonial slider
	$("#owl-demo").owlCarousel({
	 
	navigation : false, // Show next and prev buttons
	autoPlay: true,
	slideSpeed : 300,
	paginationSpeed : 400,
	items : 1, 
	itemsDesktop : false,
	itemsDesktopSmall : false,
	itemsTablet: false,
	itemsMobile : false,
	stopOnHover :	true
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

