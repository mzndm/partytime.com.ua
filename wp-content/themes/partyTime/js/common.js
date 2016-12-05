// Nice click uppergallery slider

(function() {
	[].slice.call(document.querySelectorAll('.menu-gallery')).forEach(function(menu) {
		var menuItems = menu.querySelectorAll('.menu__link'),
			setCurrent = function(ev) {
				ev.preventDefault();

				var item = ev.target.parentNode; // li

				// return if already current
				if (classie.has(item, 'menu__item--current')) {
					return false;
				}
				// remove current
				classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
				// set current
				classie.add(item, 'menu__item--current');
			};

		[].slice.call(menuItems).forEach(function(el) {
			el.addEventListener('click', setCurrent);
		});
	});

	[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
		link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
		new Clipboard(link);
		link.addEventListener('click', function() {
			classie.add(link, 'link-copy--animate');
			setTimeout(function() {
				classie.remove(link, 'link-copy--animate');
			}, 300);
		});
	});
})(window);

// Swyper gallery

$(function(){

	var owlCarosele = $('.owl-carousel');
  owlCarosele.owlCarousel({
      navigation: true, // Show next and prev buttons
			// pagination: true,
      slideSpeed: 300,
      paginationSpeed: 400,
    	singleItem: true,
			navigationText: [
      "<div class='slider__buttons-owl-left'></div>",
      "<div class='slider__buttons-owl-right'></div>"
      ],

			afterInit: customPager,
			afterUpdate: customPager
  });

	function customPager() {
			var owlP = $(".owl-pagination");
			var list = $(".menu__list .menu__item ");
			var listA = list.find("a");

			listA.on("click", function(e){owlCarosele.data('owlCarousel').goTo($(this).parent().index());});
}


$("#video").owlCarousel({
	items : 1,
	itemsDesktop : [567,1]
});

//start service slider
	// $("service_slider").owlCarousel({
	// 	items : 1,
	// 	itemsDesktop : [1400 ,1]
	// });


// Height gallery

	var viewPort = $(window).width();
	var heightGalSlider = viewPort/2.43;

	$(".owl-item").css("height", heightGalSlider);
	$(".owl__item-first-rect-vertical").css("height", heightGalSlider);


//start gallery reQuire

	var carousel = $("#carousel__require").featureCarousel({
		// include options like this:
		// (use quotes only for string values, and no trailing comma after last option)
		// option: value,
		// option: value
		carouselSpeed: 2000,
		// autoPlay: 2000,
		pauseOnHover: true,
		largeFeatureWidth: 1,
		largeFeatureHeight: 1,
		smallFeatureWidth: 0.8,
		smallFeatureHeight: 0.8,
		trackerIndividual: false,
		trackerSummation: false,
		// smallFeatureOffset: 50,
		captionBelow: true
	});
});

// start btn

function accordeon(){
	var standartHeight = 122;
	var btnAcord = $(".wrap__item-btn");
	var wrapCont = $(".wrap__item-text-content");
	var wrapHeight = parseInt(wrapCont.css("height"));

	if(wrapHeight >= standartHeight){
		btnAcord.show();
		btnAcord.on("click", function(){
			wrapCont.toggleClass("wrap__item-text-height")
		});
	}
}
accordeon();

function scrollTop(){
	$("#scrollTop").on("click", function(){
		$("html, body")
		.animate({scrollTop:0},1500);
	})
}
scrollTop()


// Services Tabs
function tabs(){
	var tablinks = $(".tabs-servis__item__links");
  var tabContent = $(".tabs-servis__item");

  tablinks.on("click", function(e){
    e.preventDefault()
    tablinks.removeClass("active");
    $(this).addClass("active");

// console.log($(this).index())
    tabContent.children("div").removeClass("active");
    tabContent.children("div:nth-child("+ ($(this).index() + 1) +")").addClass("active");
  })
};
tabs();

function modal(){
	var modalLink = $(".tabs-servis__item__consist__banner__readmorePaket");
	var modalWindwow = $(".modal-window");

	var modalBg = $(".modal-window__bg");
	var modalClose = $(".modal-window__container__close");

		function open(){
			modalLink.on("click", function(){
				modalWindwow.fadeToggle();
			})
		}

		function close(){
		modalBg.on("click", function(){
			modalWindwow.fadeToggle();
		})
		modalClose.on("click", function(){
			modalWindwow.hide();
		})
	}

	open();
	close();
};

modal();

//custom code - start

$(".menu-top_list-white-Border a").addClass("open_modal");
// modal vindows - start
    /* зaсунем срaзу все элементы в переменные, чтoбы скрипту не прихoдилoсь их кaждый рaз искaть при кликaх */
    var overlay = $('#overlay'); // пoдлoжкa, дoлжнa быть oднa нa стрaнице
    var open_modal = $('.open_modal'); // все ссылки, кoтoрые будут oткрывaть oкнa
    var close = $('.modal_close, #overlay'); // все, чтo зaкрывaет мoдaльнoе oкнo, т.е. крестик и oверлэй-пoдлoжкa
    var modal = $('.modal_div'); // все скрытые мoдaльные oкнa


     open_modal.click( function(event){ // лoвим клик пo ссылке с клaссoм open_modal
         event.preventDefault(); // вырубaем стaндaртнoе пoведение
         var div = $(this).attr('href'); // вoзьмем стрoку с селектoрoм у кликнутoй ссылки
         overlay.fadeIn(400, //пoкaзывaем oверлэй
             function(){ // пoсле oкoнчaния пoкaзывaния oверлэя
                 $(div) // берем стрoку с селектoрoм и делaем из нее jquery oбъект
                     .css('display', 'block')
                     .animate({opacity: 1, }, 200); // плaвнo пoкaзывaем
         });
     });

     close.click( function(){ // лoвим клик пo крестику или oверлэю
            modal // все мoдaльные oкнa
             .animate({opacity: 0, top: '32%'}, 200, // плaвнo прячем
                 function(){ // пoсле этoгo
                     $(this).css('display', 'none');
                     overlay.fadeOut(400); // прячем пoдлoжку
                 }
             );
     });
// finish

// parse url and choose active tab - start
var urls = [
	["yubilei-kompanii", "letniy-korporativ", "novogodniy-korporativ", "komandoobrazovatelnie-programmu"],
	["svadba", "organizaciya-dnya-rozhdeniya", "vipusknoy-vecher"],
	["provedenie-presentaciy", "organizaciya-konferenciy", "vistavki", "organizaciya-forumov", "organizaciya-krugluh-stolov", "otkritie-torgovih-tochek"],
	["organizaciya-koncertov", "organizaciya-festivaley", "gorodskie-prazdniki", "reklamnie-akcii", "vechernie-baly", "aukciony"]
];

for (var x = 0; x < urls.length; x++) {
	for (var y = 0; y < urls[x].length; y++) {
		if (window.location.href.indexOf(urls[x][y]) > -1) {
			$(".menu__item--current").removeClass("menu__item--current");
 			$(".menu__item").eq(x).addClass("menu__item--current");

			var imageWidth = parseInt($(".gallery .owl-item").css("width"),10);
			var translate3d = "translate3d(-" + imageWidth * x + "px, 0px, 0px)";
			$(".gallery .owl-wrapper").css("transform", translate3d);
		}
	}
}
// finish


// hide seo content section before footer

var urls1 = [ "vistavki", "organizaciya-forumov", "krugluh-stolov", "torgovih-tochek", "festivaley",
						  "gorodskie", "reklamnie-akcii", "vechernie-baly", "aukciony", "vipusknoy-vecher"
						];
for (var x = 0; x < urls1.length; x++) {
	if (window.location.href.indexOf(urls1[x]) > -1) {
		$('section.wrap').css('display', 'none');
	}
}

$(document).ready(function() {
	$(".owl-page").on("classChange", function() {
		var i = $(this).index();
		$(".menu__item--current").removeClass("menu__item--current");
		$(".menu__item").eq(i).addClass("menu__item--current");
	});
//finish

$("#owl2").data('owlCarousel').reinit({
 	singleItem: false,
    items: 4,
    autoPlay: 2000
});

$("#owl3").data('owlCarousel').reinit({
 	singleItem: false,
    items: 6,
    autoPlay: 2000
});

});
