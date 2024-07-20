let headerHeight = $('.header').innerHeight();

$(document).ready(function () {

	$('.menu-toggle .icon-toggle').click(function () {
		$(this).toggleClass('active');
		$('.mobile-menu').slideToggle(100);
		return false;
	});

	$('.gallery-grid').each(function () {
		$(this).magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	});

	$(window).scroll(function () {
		$(this).scrollTop() > headerHeight
			? ($('.header').addClass('fixed'), $('body').css('padding-top', headerHeight + 'px'))
			: ($('.header').removeClass('fixed'), $('body').css('padding-top', '0'));
	});

	// // $(window).on("load scroll", function () {
	// var image = document.getElementsByClassName('experimental-bg');
	// new simpleParallax(image, {
	// 	// delay: .6,
	// 	// transition: 'cubic-bezier(0,0,0,1)',
	// 	scale: 1.2,
	// 	// });
	// })

	// $(window).on("load scroll", function () {
	// 	var parallaxElement = $(".experimental-bg"),
	// 		parallaxQuantity = parallaxElement.length;
	// 	window.requestAnimationFrame(function () {
	// 		for (var i = 0; i < parallaxQuantity; i++) {
	// 			var currentElement = parallaxElement.eq(i),
	// 				windowTop = $(window).scrollTop(),
	// 				elementTop = currentElement.offset().top,
	// 				elementHeight = currentElement.height(),
	// 				viewPortHeight = window.innerHeight * 1 - elementHeight * 0.01,
	// 				scrolled = windowTop - elementTop + viewPortHeight;
	// 			currentElement.css({
	// 				transform: "translate3d(0," + scrolled * -0.1 + "px, 0)"
	// 			});
	// 		}
	// 	});
	// });

});

const video = $('.video video');
const img = $('.video img');
$('.video').on('click', function () {
	if (video[0].paused) {
		video[0].play();
		img.addClass('playing');
	} else {
		video[0].pause();
		img.removeClass('playing');
	}
	console.log(video[0])
});


let sbProgressPage = {
	progressBar: function () {
		let progressWrap = document.querySelector('.progress-wrap');
		if (progressWrap != null) {
			let progressPath = document.querySelector('.progress-wrap path');
			let pathLength = progressPath.getTotalLength();
			let offset = 50;
			progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
			progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
			progressPath.style.strokeDashoffset = pathLength;
			progressPath.getBoundingClientRect();
			progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 200ms ease';
			['load', 'scroll'].forEach(function (event) {
				// window.addEventListener(e, mouseMoveHandler);
				window.addEventListener(event, function (event) {
					let scroll = document.body.scrollTop || document.documentElement.scrollTop;
					let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
					let progress = pathLength - (scroll * pathLength / height);
					progressPath.style.strokeDashoffset = progress;
					let scrollElementPos = document.body.scrollTop || document.documentElement.scrollTop;
					if (scrollElementPos >= offset) {
						progressWrap.classList.add("active-progress")
					} else {
						progressWrap.classList.remove("active-progress")
					}
				});
			});

			progressWrap.addEventListener('click', function (e) {
				$('body, html').animate({ scrollTop: 0 }, 500);
			});
		}
	}
}
sbProgressPage.progressBar();

var swiper = new Swiper("#menu-swiper", {
	slidesPerView: 1.5,
	spaceBetween: 34,
	freeMode: true,
	breakpoints: {
		310: {
			slidesPerView: 1.2,
			spaceBetween: 34,
		},
		375: {
			slidesPerView: 1.5,
			spaceBetween: 34,
		},
		480: {
			slidesPerView: 2.3,
			spaceBetween: 34,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 34,
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 34,
		},
	},
});

var swiper = new Swiper("#news-swiper", {
	slidesPerView: 1.5,
	spaceBetween: 34,
	freeMode: true,
	breakpoints: {
		310: {
			slidesPerView: 1.2,
			spaceBetween: 34,
		},
		375: {
			slidesPerView: 1.5,
			spaceBetween: 34,
		},
		480: {
			slidesPerView: 2.3,
			spaceBetween: 34,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 34,
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 34,
		},
	},
});


$(window).on('load resize', function () {
	if ($('#news-swiper2').length) {
		if ($(window).width() <= 993) {


			$('.news-page .news-grid').css('column-gap', '0')
			var asdasdasdas = new Swiper("#news-swiper2", {
				slidesPerView: 1.5,
				spaceBetween: 34,
				freeMode: true,
				breakpoints: {
					310: {
						slidesPerView: 1.2,
						spaceBetween: 34,
					},
					375: {
						slidesPerView: 1.5,
						spaceBetween: 34,
					},
					480: {
						slidesPerView: 2.3,
						spaceBetween: 34,
					},
					768: {
						slidesPerView: 3,
						spaceBetween: 34,
					},
					992: {
						slidesPerView: 4,
						spaceBetween: 34,
					},
				},
			});
		} else {
			if (asdasdasdas.data('swiper')) {
				asdasdasdas.data('swiper').destroy();
			}
		}
	}
});

var rellax = new Rellax('.rellax', {
	speed: 2,
	center: false,
	wrapper: null,
	round: true,
	vertical: true,
	horizontal: true
});

var swiper = new Swiper("#slider", {
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});

// AOS.init();

$.fn.isInViewport = function () {
	var elementTop = $(this).offset().top + 150;
	var elementBottom = elementTop + $(this).outerHeight() + 150;

	var viewportTop = $(window).scrollTop() - 150;
	var viewportBottom = viewportTop + $(window).height() - 150;

	return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('resize scroll', function () {
	$('.recommend__item').each(function () {
		if ($(this).isInViewport()) {
			$(this).addClass('stub')
		} else {
			$(this).removeClass('stub')
		}
	})
});