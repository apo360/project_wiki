jQuery(document).ready(function($) {
/*----------------------------------------------------*/
/*	Accordion
/*----------------------------------------------------*/
	(function() {

		var $container = $('.acc-container'),
			$trigger   = $('.acc-trigger');

		
		$trigger.next().hide();
		//$trigger.first().addClass('inactive').next().show();
		
		var fullWidth = $container.outerWidth(true);
		$trigger.css('width', '100%');
		$container.css('width', '100%');
		
		$trigger.on('click', function(e) {
			if( $(this).next().is(':hidden') ) {
				//$trigger.removeClass('active').next().slideUp(300);
				$(this).toggleClass('active').next().slideDown(300);
			}
			else{
				$(this).removeClass('active').next().slideUp(300);
				//$(this).next().css("background","../images/accordion_plus_ico.png");
								
								
				//$(this).attr("src", "../images/accordion_plus_ico.png");

				//$container.hide();
				//$trigger.removeClass('active').next().slideUp(300);

				//$(this).toggleClass('hidden').next().slideDown(300);
			}
			e.preventDefault();
		});

		// Resize
		$(window).on('resize', function() {
			fullWidth = $container.outerWidth(true)
			$trigger.css('width', $trigger.parent().width() );
			$container.css('width', $container.parent().width() );
		});

	})();

	
/*----------------------------------------------------*/
/*	Tabs
/*----------------------------------------------------*/

	(function() {

		var $tabsNav    = $('.tabs-nav'),
			$tabsNavLis = $tabsNav.children('li'),
			$tabContent = $('.tab-content');

		$tabsNav.each(function() {
			var $this = $(this);

			$this.next().children('.tab-content').stop(true,true).hide()
												 .first().show();

			$this.children('li').first().addClass('active').stop(true,true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);

			$this.siblings().removeClass('active').end()
				 .addClass('active');
			
			$this.parent().next().children('.tab-content').stop(true,true).hide()
														  .siblings( $this.find('a').attr('href') ).fadeIn();

			e.preventDefault();
		});

	})();
	
	
/* End Document */
});