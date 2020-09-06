(function($){

	setTimeout(function(){
		smoothScroll.init({
			speed: 800,
			easing: 'easeInOutCubic',
			offset: 0
		});

	// TRANSFORM


	// PIE
		var chart = c3.generate({
			bindto: '#pie-chart',
		    data: {
		        columns: [
		            ['Laptops', 8],
		            ['Furniture', 17],
		            ['Mobiles', 5],
		            ['Watch', 32],
		        ],
		        type : 'pie',
		        colors: {
	           		Laptops: '#ffc107',
	           		Furniture: '#ff4081',
	           		Mobiles: '#313447',
	           		Watch: '#1266F1'
	         	}
		    }
		});
		var chart = c3.generate({
			bindto: '#pie-chart1',
		    data: {
		        columns: [
		            ['Start', 8],
		            ['Runing', 17],
		            ['Pending', 5],
		            ['Close', 32],
		        ],
		        type : 'pie',
		        colors: {
	           		Start: '#ffc107',
	           		Runing: '#ff4081',
	           		Pending: '#313447',
	           		Close: '#1266F1'
	         	}
		    }
		});

	// DONUT
		
		
	}, 100);

})(jQuery);