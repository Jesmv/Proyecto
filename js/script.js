$(function() {
	$('.modal').modal();

	$('#user').blur(() => {

		var value = $('#user').val();

		if (value.match(/^[\w^\[\]\-,;:\\!¡¿?)(/&%$·"#@]{3,20}$/gi)) {

			$('#user').css({'color':'green'});
			$('#userSpan').css({'display':'none'});

		} else {

			$('#userSpan').css({'display':'inherit'});
		}
	});

	$('#email').blur(() => {

		var value = $('#email').val();

		if (value.match(/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/)) {

			$('#email').css({'color':'green'});
			$('#emailSpan').css({'display':'none'});

		} else {

			$('#emailSpan').css({'display':'inherit'});
		}
	});

	$('#password').blur(() => {

		var value = $('#password').val();

		if (value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/)) {

			$('#password').css({'color':'green'});
			$('#pasSpan').css({'display':'none'});

		} else {

			$('#pasSpan').css({'display':'inherit'});
		}
	});

	$('#password2').blur(() => {

		var value = $('#password2').val();
		var firstValue = $('#password').val();

		if (value === firstValue) {

			$('#password2').css({'color':'green'});
			$('#pas2Span').css({'display':'none'});

		} else {
			
			$('#pas2Span').css({'display':'inherit'});
		}
	});

});


