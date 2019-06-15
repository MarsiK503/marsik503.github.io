Overlay = (function() {
	
  var mill = {};
  
  mill.init = function() {
    
    $('.js-btn-overlay').on('click', function(e) {
  	 
      e.preventDefault();

      var trigger = $(e.target),
      	  target = e.target.hash,
          action = mill[trigger.attr('data-action')];
      
      if (action) action(target);

    });
  
  };
  
  mill.open = function(target) {
    
    target = $(target);
  
  	target.addClass('-active');
  	target.attr('data-animation', 'in');
    
  };
  
  mill.close = function(target) {
  	
    target = $(target);
  
  	target.removeClass('-active');
  	target.attr('data-animation', 'out');
    
  };
  
  mill.toggle = function(target) {
  
  	target = $(target);
  	
    if (target.hasClass('-active')) {
    	mill.close(target);
    }
    else {
    	mill.open(target);
		}
    
  };
  
  return mill;
  
})();

//

Overlay.init();