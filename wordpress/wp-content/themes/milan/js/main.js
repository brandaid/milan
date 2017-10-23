$(document).ready(function() {

	//PRELOADER

	window.onload = function(){
		$("#loader").fadeOut(350,function(){$(this).remove()});
	};

	// TOGGLE

	$('#showRightPush').click(function(){
        $(this).toggleClass('toggle-on');
    });

    $('div.navigation').addClass('cf');

	//NAVBAR

	var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
		showRightPush = document.getElementById( 'showRightPush' ),
		body = document.body;
	showRightPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'cbp-spmenu-push-toleft' );
		classie.toggle( menuRight, 'cbp-spmenu-open' );
		disableOther( 'showRightPush' );
	};

	function disableOther( button ) {
		if( button !== 'showRightPush' ) {
			classie.toggle( showRightPush, 'disabled' );
		}
	}

	$(function() {
		$('#menu-mobile, #menu-desktop').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8
		});
	});

	// OWL COROUSEL

	$('.owl-testimonials').owlCarousel({
	    animateOut: 'fadeOut',
	    autoplay: true,
	    animateIn: 'fadeIn',
	    items:1,
	    autoHeight: false,
	    nav: true,
	    navText: "",
	    loop: true,
	    margin:0,
	    stagePadding:0,
	    smartSpeed:450
	});

	//SCROLL ANIMADO

	var $root = $('html, body');
	$('a').click(function() {
	    var href = $.attr(this, 'href');
	    $root.animate({
	        scrollTop: $(href).offset().top
	    }, 1000, function () {
	        window.location.hash = href;
	    });
	    return false;
	});


});
