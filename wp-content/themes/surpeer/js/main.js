
$(function(){
		
		$('.toggle-menu').click(function(){
			$('.menu ul').slideToggle();
		})
 		$(window).on('scroll',function(){
 			let t = $(this).scrollTop();
 			let h = $('#header,#back-top'); 
 			
 			if(t > 75){
 				h.addClass('fixed');
			}else{
 				h.removeClass('fixed');
			}	
			
		})	
		$('#back-top').click(function(){
			$('html,body').animate({scrollTop:'0px'},'slow');
		});	
	
		$('.carousel').carousel();
		$("#news-slider").owlCarousel({
			loop: true,
			margin: 30,
			nav: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 3
				}
			}
		});
})