jQuery(window).load(function(){
	jQuery('#container').masonry({ 
		singleMode: true,
  		isAnimated: !Modernizr.csstransitions
	}).imagesLoaded(function() {
  		jQuery('#container').masonry('reload');
  		
  	});
});
	
jQuery(window).resize(function(){
	jQuery('#container').masonry({ 
		singleMode: true,
  		isAnimated: !Modernizr.csstransitions
	}).imagesLoaded(function() {
  		jQuery('#container').masonry('reload');
  	});
});