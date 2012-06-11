$(function() {
	$('#main_menu ul').hide();
	$('a[href^=#]').click(function (e) {
		e.preventDefault();
		$('#main_menu ul').animate({height: 'hide'}, 300);
		$(this).next('ul:hidden').animate({height: 'show'}, 800, 'swing');
		$(this).parents('ul').show();
	});
});