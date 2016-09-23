$(function(){
    $(".action").typed({
        strings: ["searching now!", "applying now!", "winning now!"],
        typeSpeed: 100,
        startDelay: 300,
        loop: true,
        backSpeed: 100,
    });
    
    $("#fb_login").click(function() {
		OAuth.popup('facebook', {state: state_token}).done(function(result) {
			console.log(result.code);
			$.post('auth/oauth.php', {code: result.code}).done(function (data, status) {
				if (data.error)
				{
					shakeModal_FB();
				}
				else
				{
					window.location.replace(data.url);
				}
			});
		}).fail(function(err) {
			shakeModal_FB();
		});
	
	});
});
