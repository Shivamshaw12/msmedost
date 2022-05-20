(function ($) {
	

	

	"use strict";

	// Window Resize Mobile Menu Fix
	mobileNav();

	


	// Scroll animation init
	window.sr = new scrollReveal();
	

	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation
	$('a[href*=\\#]:not([href=\\#])').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				var width = $(window).width();
				if(width < 991) {
					$('.menu-trigger').removeClass('active');
					$('.header-area .nav').slideUp(200);	
				}				
				$('html,body').animate({
					scrollTop: (target.offset().top) - 130
				}, 700);
				return false;
			}
		}
	});

	$(document).ready(function () {
	    $(document).on("scroll", onScroll);
	    
	    //smoothscroll
	    $('a[href^="#"]').on('click', function (e) {
	        e.preventDefault();
	        $(document).off("scroll");
	        
	        $('a').each(function () {
	            $(this).removeClass('active');
	        })
	        $(this).addClass('active');
	      
	        var target = this.hash,
	        menu = target;
	       	var target = $(this.hash);
	        $('html, body').stop().animate({
	            scrollTop: (target.offset().top) - 130
	        }, 500, 'swing', function () {
	            window.location.hash = target;
	            $(document).on("scroll", onScroll);
	        });
	    });
	});

	function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    $('.nav a').each(function () {
	        var currLink = $(this);
	        var refElement = $(currLink.attr("href"));
	        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
	            $('.nav ul li a').removeClass("active");
	            currLink.addClass("active");
	        }
	        else{
	            currLink.removeClass("active");
	        }
	    });
	}


	// Home seperator
	if($('.home-seperator').length) {
		$('.home-seperator .left-item, .home-seperator .right-item').imgfix();
	}


	// Home number counterup
	if($('.count-item').length){
		$('.count-item strong').counterUp({
			delay: 10,
			time: 1000
		});
	}


	// Page loading animation
	// $(window).on('load', function() {
	// 	if($('.cover').length){
	// 		$('.cover').parallax({
	// 			imageSrc: $('.cover').data('image'),
	// 			zIndex: '1'
	// 		});
	// 	}

	// 	$("#preloader").animate({
	// 		'opacity': '0'
	// 	}, 600, function(){
	// 		setTimeout(function(){
	// 			$("#preloader").css("visibility", "hidden").fadeOut();
	// 		}, 300);
	// 	});
	// });


	// Window Resize Mobile Menu Fix
	$(window).on('resize', function() {
		mobileNav();
	});


	// Window Resize Mobile Menu Fix
	function mobileNav() {
		var width = $(window).width();
		$('.submenu').on('click', function() {
			if(width < 992) {
				$('.submenu ul').removeClass('active');
				$(this).find('ul').toggleClass('active');
			}
		});
	}


})(window.jQuery);




//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}




function yesnoCheck(that) {
    if (that.value == "kolkata") {
        document.getElementsByClassName("add")[0].style.display = "block";
		document.getElementsByClassName("add")[1].style.display = "block";
		document.getElementsByClassName("add")[2].style.display = "block";
		document.getElementsByClassName("add")[3].style.display = "block";
		document.getElementById("other").style.display = "none";
		document.getElementsByClassName("btnshow1")[0].style.display = "block";
    } else if (that.value == "other"){
        document.getElementById("other").style.display = "block";
		document.getElementsByClassName("add")[0].style.display = "none";
		document.getElementsByClassName("add")[1].style.display = "none";
		document.getElementsByClassName("add")[2].style.display = "none";
		document.getElementsByClassName("add")[3].style.display = "none";
		document.getElementsByClassName("btnshow1")[0].style.display = "block";
    }
	else if (that.value == "select"){
        document.getElementById("other").style.display = "none";
		document.getElementsByClassName("add")[0].style.display = "none";
		document.getElementsByClassName("add")[1].style.display = "none";
		document.getElementsByClassName("add")[2].style.display = "none";
		document.getElementsByClassName("add")[3].style.display = "none";
		document.getElementsByClassName("btnshow1")[0].style.display = "block";
    }
}


function yesnoCheck1(that) {
    if (that.value == "rcs") {
        document.getElementsByClassName("category")[0].style.display = "block";
		document.getElementsByClassName("category")[1].style.display = "none";
		document.getElementsByClassName("category")[2].style.display = "none";
		document.getElementsByClassName("category")[3].style.display = "none";
		document.getElementsByClassName("category")[4].style.display = "none";
		
    } else if (that.value == "bds"){
        document.getElementsByClassName("category")[0].style.display = "none";
		document.getElementsByClassName("category")[1].style.display = "block";
		document.getElementsByClassName("category")[2].style.display = "none";
		document.getElementsByClassName("category")[3].style.display = "none";
		document.getElementsByClassName("category")[4].style.display = "none";
    }
	else if (that.value == "ms"){
        document.getElementsByClassName("category")[0].style.display = "none";
		document.getElementsByClassName("category")[1].style.display = "none";
		document.getElementsByClassName("category")[2].style.display = "block";
		document.getElementsByClassName("category")[3].style.display = "none";
		document.getElementsByClassName("category")[4].style.display = "none";
    }
	else if (that.value == "cs"){
        
		document.getElementsByClassName("category")[0].style.display = "none";
		document.getElementsByClassName("category")[1].style.display = "none";
		document.getElementsByClassName("category")[2].style.display = "none";
		document.getElementsByClassName("category")[3].style.display = "block";
		document.getElementsByClassName("category")[4].style.display = "none";
    }
	else if (that.value == "other"){
        document.getElementsByClassName("category")[0].style.display = "none";
		document.getElementsByClassName("category")[1].style.display = "none";
		document.getElementsByClassName("category")[2].style.display = "none";
		document.getElementsByClassName("category")[3].style.display = "none";
		document.getElementsByClassName("category")[4].style.display = "block";
    }
	else if (that.value == "select"){
        document.getElementsByClassName("category")[0].style.display = "none";
		document.getElementsByClassName("category")[1].style.display = "none";
		document.getElementsByClassName("category")[2].style.display = "none";
		document.getElementsByClassName("category")[3].style.display = "none";
		document.getElementsByClassName("category")[4].style.display = "none";
    }
}

function call() {
    
        document.getElementsByClassName("call")[0].style.display = "block";
		document.getElementsByClassName("call")[1].style.display = "block";
		document.getElementsByClassName("call")[2].style.display = "block";
		document.getElementsByClassName("call")[3].style.display = "block";
		document.getElementsByClassName("btnshow")[0].style.display = "block";

		document.getElementsByClassName("btnshow1")[0].style.display = "none";

		document.getElementsByClassName("book1")[0].style.display = "none";
		document.getElementsByClassName("book1")[1].style.display = "none";
		document.getElementsByClassName("book1")[2].style.display = "none";
		document.getElementsByClassName("book1")[3].style.display = "none";
		document.getElementsByClassName("book1")[4].style.display = "none";
		document.getElementsByClassName("book1")[5].style.display = "none";
		document.getElementsByClassName("book1")[6].style.display = "none";
    
        
    
}

function book1() {
    
	document.getElementsByClassName("book1")[0].style.display = "block";
	document.getElementsByClassName("book1")[1].style.display = "block";
	document.getElementsByClassName("book1")[2].style.display = "block";
	document.getElementsByClassName("book1")[3].style.display = "block";
	document.getElementsByClassName("book1")[4].style.display = "block";

	document.getElementsByClassName("btnshow1")[0].style.display = "block";

	document.getElementsByClassName("btnshow")[0].style.display = "none";


	document.getElementsByClassName("call")[0].style.display = "none";
	document.getElementsByClassName("call")[1].style.display = "none";
	document.getElementsByClassName("call")[2].style.display = "none";
	document.getElementsByClassName("call")[3].style.display = "none";

	

}


function login() {
    
		window.location = "http://www.google.com"; 
	
}








