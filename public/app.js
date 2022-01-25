(function($) {
	'use strict';
	$('form > div > div').addClass('mt-2')
	$('form input').addClass('form-control')
	$('form select').addClass('form-control')
	$('form .btn').addClass('btn-primary mt-2')
	$('form[name="product"]').next().addClass('btn btn-danger mt-2')
	$('table a').addClass('btn btn-rounded btn-primary')
	$('.open-link').click(function(e){
		location.href = $(this).data('to')
	})
	$('.show a').after().addClass('btn btn-secondary')
	$('.table').next().addClass('btn btn-secondary')
})(jQuery)