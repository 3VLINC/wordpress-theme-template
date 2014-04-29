//Add last child selector to ie 7 and 8 

jQuery(document).ready(

	function($)
	{

		init();
		function init() {
		    if (/msie [1-8]{1}[^0-9]/.test(navigator.userAgent.toLowerCase())) {
		        $('*:last-child').addClass('last-child');
		    }
		}
	}

);