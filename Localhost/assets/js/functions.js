;localFunctions = (function($) {

	/**
	 * INITIALISE
	 * ----------
	 *
	 * @return {undefined}
	 */
	(function init() {
		tabs();
		dsStoreHide();
		UrlExists();
	})();

	// Active tabs
	function tabs() {
		var path = window.location.pathname;
		$(".project-link[href*='"+path+"']").addClass("active");
	}

	// Hide the .DS_Store file in the listing
	function dsStoreHide() {
		$("a:contains('.DS_Store')").parent().hide();
	}

	// Look up for 404 pages
	function UrlExists(url, cb){
	    jQuery.ajax({
	        url:      url,
	        crossDomain : true,
	        dataType: 'text',
	        type:     'GET',
	        complete:  function(xhr){
	            if(typeof cb === 'function')
	               cb.apply(this, [xhr.status]);
	               console.log(url, xhr.status);
	               var pageStatus = xhr.status;
	        }
	    });
	}

	$('.readmeLink').each(function() {
		var linkPath = jQuery(this).attr('href');
		var linkBtn = jQuery(this);

		UrlExists(linkPath, function(pageStatus){
			if(pageStatus === 404){
		    	linkBtn.css('opacity', '0.5').removeAttr("href");;
			} else if(pageStatus === 403){
		    	linkBtn.css('opacity', '0.5').removeAttr("href");;
			}
		});

	});

	$('.githubLink').each(function() {
		var linkPath = jQuery(this).attr('href');
		var linkBtn = jQuery(this);

		UrlExists(linkPath, function(pageStatus){
			if(pageStatus === 404){
		    	linkBtn.css('opacity', '0.5').removeAttr("href");;
			} else if(pageStatus === 403){
		    	linkBtn.css('opacity', '0.5').removeAttr("href");;
			}
		});

	});




})(jQuery);