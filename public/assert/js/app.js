(function() {
	// Sing Up Modal
	$('#sign-up').on('click', function() {
		$('#register-modal').modal('show');
	});

	//Login Modal
	$('#login').on('click', function() {
		$('#login-modal').modal('show');
	});

	//About Modal
	$('#about').on('click', function() {
		$('#about-modal').modal('show');
	});

	//User
	$('#user-account').on('click', function() {
		$('#profile-modal').modal('show');
	});

})();