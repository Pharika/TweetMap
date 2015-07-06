//************WOWTIP****************//
//Author Name: Kamalendu Garai     //
//kamalendugarai.wordpress.com    //
(function($){
	$.fn.extend({
		wowtip:function(options){
			var defaults = {theme:"black"};
			var options = $.extend({}, defaults, options);
			
			return this.each(function(){
				$this = $(this);
				var final_theme = options.theme;
				var add = '<div id="wow_tip"><div>';
				
				$this.bind({
					mouseenter:function(){
						$title = $(this).attr('title');
						$(this).attr('title','');						
						$(add).appendTo('body').html($title).fadeIn(400);
						
						switch (final_theme){
						case 'black': $('#wow_tip').css('background-color','#222');
						break;
						case 'orange': $('#wow_tip').css('background-color','#F60');
						break;
					}
						
					},
					mouseleave:function(){
						$('#wow_tip').remove();
						$(this).attr('title',$title);						

					},
					mousemove:function(evt){
						xPos = evt.pageX;
						yPos = evt.pageY;
						$('#wow_tip').css('left',xPos+=25);
						$('#wow_tip').css('top',yPos-=25);
					}
				});
				
			});
		}
	});
})(jQuery);