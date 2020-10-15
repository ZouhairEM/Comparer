	$(document).ready(function(){
		redirectChanges();
		checkCount();
	});
	
var vergelijk = [];

	$('.filterHamburger').on('click', function() {
			$(this).toggleClass('active');
			$('.filters').toggleClass('active');
			$('body').toggleClass('active');
		});
		$('.filterHamburger').click(function() {
			if ($(this).find("i").hasClass("fa-filter")) {
				$(this).find("i").addClass("fa-times");
				$(this).find("i").removeClass("fa-filter");
			} else {
				$(this).find("i").addClass("fa-filter");
				$(this).find("i").removeClass("fa-times");
			}
		});
		
		$('.compareCounter').html("0" + "x");
		var count = 0;
		
		$('.visitBtn').on('click', function(e) {
			
				$(this).parent().parent().addClass('active'); 
				
			if(!$(this).hasClass('active')){
				
				$(this).addClass('active');
				if($(this).hasClass('visitBtn')){
					$(this).html("<p>ADDED<i aria-hidden=\"true\" class=\"fa fa-caret-right\"></i></p>");
						
				}
			
				$(this).parent().parent().find($('.gymInfoContainer')).find($('.compareBox')).find('.fa.fa-close').addClass('active');
			} else {
				$(this).removeClass('active');
				$(this).parent().parent().removeClass('active'); 
				
				if($(this).hasClass('visitBtn')){
					$(this).html("<p>VERGELIJK<i aria-hidden=\"true\" class=\"fa fa-caret-right\"></i></p>"); 
				
				}
				$(this).parent().parent().find($('.gymInfoContainer')).find($('.compareBox')).find('.fa.fa-close').removeClass('active'); //viknknop
			}

				if ($('.gymCardContainer.active').length >= 4) {
					$('.gymCardsContainer').children().not($('.gymCardContainer.active')).find('.compareBox').css({
						"-moz-transform": "scale(0.00)",
						"-webkit-transform": "scale(0.00)",
						"-o-transform": "scale(0.00)",
						"-ms-transform": "scale(0.00)",
						"-webkit-transform": "scale(0.00)",
						"transform": "scale(0.00)",
						"-webkit-transition": "transform 1s ease-in-out",
						"-moz-transition": "transform 1s ease-in-out",
						"-ms-transition": "transform 1s ease-in-out"
					});
				} else {
					$('.gymCardsContainer').children().not($('.gymCardContainer.active')).find('.compareBox').css({
						"-moz-transform": "scale(1.00)",
						"-webkit-transform": "scale(1.00)",
						"-o-transform": "scale(1.00)",
						"-ms-transform": "scale(1.00)",
						"-webkit-transform": "scale(1.00)",
						"transform": "scale(1.00)",
						"-webkit-transition": "transform 0.5s ease-in-out",
						"-moz-transition": "transform 0.5s ease-in-out",
						"-ms-transition": "transform 0.5s ease-in-out"
					});
				}
	
			checkCount();
				$('.compareCounter').html($('.gymCardsContainer').find('.gymCardContainer.active').length + "x");
		});
		
		$( ".compareBox" ).on( "click", function() {
			$(this).parent().parent().find('.gymIconsContainer').find('.visitBtn').trigger('click');
		});
		
		var panel = $(this).next();
		for (var i = 0; i < $('.accordion').length; i++) {
			$('.accordion')[i].onclick = function() {
				var panel = this.nextElementSibling;
				$(this).toggleClass("active");
				if (panel.style.maxHeight) {
					panel.style.maxHeight = null;
				} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
				}
			}
		}
		$('#facForm input').on('click', function() {
			var filterValue = $(this).data('filter');
			var gyms = $('.gymCardsContainer').find('.gymCardContainer .gymIconsContainer [data-facility="' + filterValue + '"].active');
			var gymsHidden = $('.gymCardsContainer').children().not(gyms.parentsUntil('.gymCardsContainer'));
			if ($(this).is(':checked')) {
				gymsHidden.fadeOut(500, function() {
					if (!$('.gymCardContainer').is(':visible')) {
						alertCheck(1);
					}
				});
			} else {
				gymsHidden.fadeIn(500, function() {
					gyms.parent().parent().parent().parent().first().first().css({
						"margin-top": "-10px",
					});
					if ($('.gymCardContainer').is(':visible')) {
						alertCheck(0);
					}
				});
			}
		});
		$('#extForm input').click(function() {
			var extValue = $(this).data('filter');
			var gyms = $('.gymCardsContainer').find(' [data-extra="' + extValue + '"]');
			var gymsHidden = $('.gymCardsContainer').children().not(gyms.parentsUntil('.gymCardsContainer'));
			if ($(this).is(':checked')) {
				gymsHidden.fadeOut(500, function() {
					if (!$('.gymCardContainer').is(':visible')) {
						alertCheck(1);
					}
				});
			} else {
				gymsHidden.fadeIn(500, function() {
					gyms.parent().parent().parent().parent().first().first().css({
						"margin-top": "-10px",
					});
					if ($('.gymCardContainer').is(':visible')) {
						alertCheck(0);
					}
				});
			}
		});
		
		$('#appForm input').click(function() {
			var appValue = $(this).data('filter');
			var gyms = $('.gymCardsContainer').find(' [data-apparaat="' + appValue + '"]');
			var gymsHidden = $('.gymCardsContainer').children().not(gyms.parentsUntil('.gymCardsContainer'));
			if ($(this).is(':checked')) {
				gymsHidden.fadeOut(500, function() {
					if (!$('.gymCardContainer').is(':visible')) {
						alertCheck(1);
					}
				});
			} else {
				gymsHidden.fadeIn(500, function() {
					gyms.parent().parent().parent().parent().first().first().css({
						"margin-top": "-10px",
					});
					if ($('.gymCardContainer').is(':visible')) {
						alertCheck(0);
					}
				});
			}
		});
		
		$('#locForm input').click(function() {
			var locValue = $(this).data('filter');
			var gyms = $('.gymCardsContainer').find(' [data-locatie="' + locValue + '"]');
			var gymsHidden = $('.gymCardsContainer').children().not(gyms.parentsUntil('.gymCardsContainer'));
			if ($(this).is(':checked')) {
				gymsHidden.fadeOut(500, function() {
					if (!$('.gymCardContainer').is(':visible')) {
						alertCheck(1);
					}
				});
			} else {
				gymsHidden.fadeIn(500, function() {
					gyms.parent().parent().parent().parent().first().first().css({
						"margin-top": "-10px",
					});
					if ($('.gymCardContainer').is(':visible')) {
						alertCheck(0);
					}
				});
			}
		});
		
		$('#ratForm input').click(function() {
			$('.gymCardContainer').show();
			var ratingrange = $(this).data('ratingrange');
			var selected = $('.gymCardsContainer').find('[data-ratingrange="' + ratingrange + '"]').parentsUntil('.gymCardsContainer');
			$('.gymCardsContainer').find('.gymCardContainer').not($(selected)).fadeOut(100);
		});

		function alertCheck(sw) {
			switch (sw) {
				case 0:
					$(".alertMsg1").fadeOut(10);
					break;
				case 1:
					$(".alertMsg1").fadeIn(10);
					break;
			}
		}
		
		$('.compareMsg, .compareMsgButton').click(function() {
			if ($('.gyms').find($(".gymCardContainer.active")).length == 2) {
				
				
				$('.gymCardContainer.active').each(function() {
					vergelijk.push($(this).attr('vergelijkid'));
					localStorage.setItem('key', JSON.stringify(vergelijk));
				})

				window.location.href = 'direct.php';


// $.ajax({
//    type:'POST',
//    url:'direct.php',
//    data:{ vergelijk: vergelijk},
//    success:function(msg)
// 	{
// 		window.location.href = 'direct.php';
// 		$('.result').append(data);
// }

// });


				// window.location.replace($('base').attr('href') + "direct.php");
				// $.ajax({
				// 	type: 'POST',
				// 	dataType: "json",
				// 	url: $('base').attr('href') + 'direct.php',
				// 	data: {
				// 		vergelijk: vergelijk
				// 	},
				// 	success: function(msg) {
				// 		window.location.replace($('base').attr('href') + "direct.php");
				// 	}
				// });	
			}
		});
		
		if ($('.gymCardContainer').is(':visible')) {} else {
			$('.alertMsg1').fadeOut(250);
			$('input:checkbox:checked').prop('checked', false);
			if ($(".compareMsg, .compareMsgButton").hasClass('active')) {
				$('.compareMsg, .compareMsgButton').removeClass('active');
				$('.gymCardsContainer').children().fadeIn(500, function() {
					$('.gymCardsContainer').children().not($(".alertMsg1")).css({
						'display': 'block',
						'opacity': '1'
					});
				});
			}
			$('.gymCardsContainer').children().not($(".alertMsg1")).css({
				'display': 'block',
				'opacity': '1'
			});
			
			if ($('.gyms').find($(".gymCardContainer.active")).length !== 0) {
				$('.gyms').find($(".gymCardContainer.active")).removeClass('active');
				$('.gyms').find($(".fa.fa-close.active")).removeClass('active');
			};
		}
		
		$('.allGymsBtn').click(function() {
			$(".alertMsg1").fadeOut(250);
			$('input:checkbox:checked').prop('checked', false);
			if ($(".compareMsg, .compareMsgButton").hasClass('active')) {
				$('.compareMsg, .compareMsgButton').removeClass('active');
				$('.gymCardsContainer').children().not($(".alertMsg1")).fadeIn(500, function() {
					$('.gymCardsContainer').children().css({
						'display': 'block',
						'opacity': '1'
					});
				});
			}
			$('.gymCardsContainer').children().not($(".alertMsg1")).css({
				'display': 'block',
				'opacity': '1'
			});
		});
		
		$(window).scroll(function() {
			if ($(window).scrollTop() > 280) {
				$('.relative-layer').addClass('relative-layercss');
				$('.compareDiv').addClass('compareDiv-fixed');
				$('.compareMsgButton').addClass('compareMsgButton-fixed');
				$('.boxLine').css('display', 'none');
			}
			if ($(window).scrollTop() < 281) {
				$('.relative-layer').removeClass('relative-layercss');
				$('.compareDiv').removeClass('compareDiv-fixed');
				$('.compareMsgButton').removeClass('compareMsgButton-fixed');
				$('.boxLine').css('display', 'block');
			}
		});
		$('input.strict').on('change', function() {
			$('input.strict').not(this).prop('checked', false);
		});
		
		$(".directExtras").find(".directExtra:gt(8)").remove();

		function redirectChanges(){
			$('.gymCardContainer ').each(function(){
				
				
				if($(this).hasClass('active')){

					$(this).find('.visitBtn').html("<p>ADDED<i aria-hidden=\"true\" class=\"fa fa-caret-right\"></i></p>");
					
					$(this).find('.visitBtn').addClass('active');
				
					$(this).find($('.compareBox')).find('.fa.fa-close').addClass('active');
					$('.compareCounter').html($('.gymCardsContainer').find('.gymCardContainer.active').length + "x");
					
				}
			});
		}
		
		function checkCount(){
			
			if($('.gymCardContainer.active').length < 3){
				
				if($('.gymCardContainer.active').length == 2){
				
					$('.compareTitle').html('<p>Compare</p><p>gyms</p><p>now</p>')
					$('.compareMsgButton').addClass('active');
				} else{
					$('.compareMsgButton').removeClass('active');
					$('.compareTitle').html('<p>Select</p><p> 2 seperate</p><p>gyms</p>')
				}
			}
		if($('.gymCardContainer.active').length >= 2){
				$('.visitBtn').each(function(){
	
					if(!$(this).hasClass('active')){
						$(this).addClass('inactive');
					}
				})
			}else{
				$('.visitBtn').each(function(){
	
					if($(this).hasClass('inactive')){
						$(this).removeClass('inactive');
					}
				})
			}
			
		}
		
		$( ".ratingChild1" ).parent().on( "click", function() {$('#rating1').trigger('click'); });
		$( ".ratingChild2" ).parent().on( "click", function() {$('#rating2').trigger('click'); });
		$( ".ratingChild3" ).parent().on( "click", function() {$('#rating3').trigger('click'); });
		$( ".ratingChild4" ).parent().on( "click", function() {$('#rating4').trigger('click'); });
		$( ".ratingChild5" ).parent().on( "click", function() {$('#rating5').trigger('click'); });
