(function() {
	function ChangeBackground() {
		var now = new Date();
		var current_hours = now.getHours();

		if (window.location.pathname === "/") {
			if (current_hours >= 0 && current_hours < 3) {
				$('.greating').html('<div style="color:#fff">It\'s now mid night! Have a nice day!</div>');
			} else if (current_hours > 3 && current_hours < 6) {
				$('.greating').html('<div style="color:#fff">It\'s now very early! Good Morning!</div>');
			} else if (current_hours > 6 && current_hours < 12) {
				$('.greating').html('<div style="color:#fff">Good Morning! How are you?</div>');
			} else if (current_hours > 12 && current_hours < 15) {
				$('.greating').html('<div style="color:#fff">Good After Noon! Hope you are happy :)</div>');
			} else if (current_hours > 15 && current_hours < 18) {
				$('.greating').html('<div style="color:#fff">Good Evening! Near time for go back?</div>');
			} else if (current_hours > 18 && current_hours < 24) {
				$('.greating').html('<div style="color:#fff">Good Night! Have a nice dream!</div>');
			};
		};
	}

	//Add Background Color on CSS
	if (window.location.pathname === "/about") {
		$('body').css("background", "url('http://static.pexels.com/wp-content/uploads/2014/05/apple-bag-collaboration-154-522x350.jpg') no-repeat center center fixed");
		$('body').css("background-size","cover");
		$('body').css("color", "#fff");
	};

	ChangeBackground();
})();