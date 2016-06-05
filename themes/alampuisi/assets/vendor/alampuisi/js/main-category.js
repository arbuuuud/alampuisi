jQuery(document).ready(function($){
	var offset = 300,
		offset_opacity = 1200,
		scroll_top_duration = 700,
		$back_to_top = $('.cd-top');

	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ?  menuScrollUp():menuScrollDown(); 

		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});
	function menuScrollUp(){
		$back_to_top.addClass('cd-is-visible');
		$('#menuforscroll').removeClass('hidden');
		$('#menuhomeforscroll').addClass('hidden');

	}
	function menuScrollDown(){
		$back_to_top.removeClass('cd-is-visible cd-fade-out');
		$('#menuforscroll').addClass('hidden');
		$('#menuhomeforscroll').removeClass('hidden')
	}

	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
});

jQuery(document).ready(function() {
	$('.language-flag a').tooltip({
		placement: 'bottom'
	});
});

jQuery(document).ready(function(){
	$(".sellang").click(function () {
		var datalang = $(this).attr("data-lang");
		var pathname = window.location.pathname;
		$.ajax({
			type: "POST",
			url: "./",
			data: "lang=" + datalang,
			cache: false,
			success: function(){
				window.location.href = pathname;
			}
		});
	});
});

jQuery(document).ready(function($){
	var winWidth = $(window).width();
	var winHeight = $(window).height();

	if (winWidth > 767 && winWidth < 1024) {
		slideHeight = parseInt(winHeight) / 2;
	} else {
		slideHeight = winHeight;
	}

	$('.big-img').css({
		'height': slideHeight*2/3,
	});
});

jQuery(function ($) {
	var menu = $('.rm-nav').rMenu({
		minWidth: '1025px',
		transitionSpeed: 300,
		//jqueryEasing: 'swing',
		//css3Easing: 'ease',
		//toggleBtnBool: true,
		//toggleSel: '.rm-toggle',
		//menuSel: 'ul',
		//menuItemsSel: 'li',
		//animateBool: false,
		//accelerateBool: true,
		//setupCallback: false,
		//tabindexStart: 5,
		//developmentMode: false
	});
});

jQuery(document).ready(function($){
	var winWidth = $(window).width();
	if (winWidth > 767) {
		$('.header-menu').scrollToFixed({
			preFixed: function() { $(this).css('background-color', '#4f402f'); },
			postFixed: function() { $(this).css('background-color', 'rgba(79, 64, 47, 0.8)'); }
		});
	}
});

jQuery(document).ready(function($){
	$('.chosen-select').chosen({
		disable_search:true,
		width:'100%'
	});

	$(".input-datepicker").datepicker({
		weekStart: 1,
		autoclose: true,
		startDate: '1d'
	});
	
	$('.timepicker').timepicker({
		showMeridian: false
	});
});

jQuery(document).ready(function($){
	$("a[rel^='prettyPhoto']").prettyPhoto({
		show_title: true,
		deeplinking: false,
		theme: 'dark_square',
		social_tools: ''
	});
});

jQuery(document).ready(function($){
	var homeslide = $("#home-slide-box");
	homeslide.owlCarousel({
		navigation : false,
		pagination: false,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem: true,
		responsive: true,
		autoPlay: true
	});

	$(".home-slide-left").click(function(){
		homeslide.trigger('owl.prev');
	})

	$(".home-slide-right").click(function(){
		homeslide.trigger('owl.next');
	})
});

jQuery(document).ready(function($){
	var homespecialoffers = $("#home-special-offers-box");
	homespecialoffers.owlCarousel({
		navigation : false,
		pagination: false,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem: false,
		responsive: true,
		items: '3'
	});

	$(".home-special-offers-left").click(function(){
		homespecialoffers.trigger('owl.prev');
	})

	$(".home-special-offers-right").click(function(){
		homespecialoffers.trigger('owl.next');
	})
});

jQuery(document).ready(function($){
	$("#btn-show-book").on('click', function(){
		$("#box-form-book").toggleClass('hidden-xs');
	});
});

jQuery(document).ready(function($){
	$('#imageGallery').lightSlider({
		gallery: true,
		item: 1,
		loop: true,
		thumbItem: 4,
		slideMargin: 0,
		enableDrag: true,
		autoWidth: false,
		thumbMargin: 15,
		currentPagerPosition: 'middle'
	});  
});

jQuery(document).ready(function($){
	$('.main-content-enquire input[type="radio"][name="transportcheck"]').change(function() {
		if ($(this).val() == 'transportcheck1') {
            $(".iftrasporton").addClass('hidden');
        }
        else if ($(this).val() == 'transportcheck2') {
            $(".iftrasporton").removeClass('hidden');
        }
	});
});

jQuery(document).ready(function($){
	$.ajax({
		url:'http://api.geonames.org/countryInfoJSON?username=dwirasurvivor',
		dataType:'JSON',
		success:function(data){
			$("#country").html('');
			$.each(data.geonames, function(key, val){
				$("#country").append('<option value="' + val.countryName + '" data-id="' + val.geonameId + '">' + val.countryName + '</option>');
			})
		},
		error:function(){
			$("#country").html('<option value="">Please Choose</option>');
		}
	});
});

jQuery(document).ready(function($){
	$("#country").on('change', function(){
		$select = $('#state');
		$statesel = $(this).find('option:selected').data('id');
		$.ajax({
			url:'http://api.geonames.org/childrenJSON?geonameId='+$statesel+'&username=dwirasurvivor',
			dataType:'JSON',
			success:function(data){
				$select.html('');
				$.each(data.geonames, function(key, val){
					$select.append('<option value="' + val.name + '" data-id="' + val.geonameId + '">' + val.name + '</option>');
				})
			},
			error:function(){
				$select.html('<option value="">Please Choose</option>');
			}
		});
	});
});

jQuery(document).ready(function($){
	$("#state").on('change', function(){
		$select = $('#region');
		$regsel = $(this).find('option:selected').data('id');
		$.ajax({
			url:'http://api.geonames.org/childrenJSON?geonameId='+$regsel+'&username=dwirasurvivor',
			dataType:'JSON',
			success:function(data){
				$select.html('');
				$.each(data.geonames, function(key, val){
					$select.append('<option value="' + val.name + '" data-id="' + val.geonameId + '">' + val.name + '</option>');
				})
			},
			error:function(){
				$select.html('<option value="">Please Choose</option>');
			}
		});
	});
});