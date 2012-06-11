$(document).ready(function() {
	$('input:text').each(function() {
		$(this).addClass('default');
		$(this)
			.focus(function(){
				$(this).removeClass('default');
				if ($(this).val() == $(this).attr('defaultValue')) {
					$(this).val('');
				}
			})
			.blur(function(){
				if ($(this).val() == '') {
					$(this).val($(this).attr('defaultValue'));
					$(this).addClass('default');
				}
			})
	});
	$('form').submit(function(){
		$('input.default').each(function(){
			$(this).val('');
		})
	})
});