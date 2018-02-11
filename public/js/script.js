$(document).ready(function(){
	var button = $('.toggle_nav'),
		menu = $('.menuList');
	button.click(function(){
		if(menu.hasClass('animate')) {
			menu.removeClass('animate');
		}
		else {
			menu.addClass('animate');
		}
	});

	var a = $('.menuList li a');
	a.click(function(e){
		var id = $(this).data('name');
		if (id === 'reserv' || id === 'about') {
			e.preventDefault();
		};
		menu.removeClass('animate');

		a.removeClass('active');
		$(this).addClass('active');
		if ($('#' + id).hasClass('flip')) {
			$(this).removeClass('active');
		};
		$('#' + id).toggleClass('flip').siblings().removeClass('flip');
	});


	// about
	var lang = $('.language').children('li');
	lang.click(function(){
		var name = $(this).attr('class');

		$('.about_col:visible').fadeOut('fast', function(){
			$('#' + name).fadeIn();
		});
	});


	// reservation
	var dt = $('.select dt'),
		dd = $('.select dd'),
		option = $('select').find('option');
	dt.click(function(){
		dd.slideToggle();

		var i = $(this).find('i');
		if (i.hasClass('fa fa-angle-right')) {
			i.removeClass('fa fa-angle-right').addClass('fa fa-angle-down')
		}
		else if(i.hasClass('fa fa-angle-down')) {
			i.removeClass('fa fa-angle-down').addClass('fa fa-angle-right');
		}
	});
	dd.click(function(){
		dd.slideUp();

		var idx = $(this).index();
		option.eq(idx - 1).prop('selected', true);
		var text = $('select').find('option:selected').text();
		$('dt span').text(text);
		var i = $(this).parent().children('dt').find('i')
		i.removeClass('fa fa-angle-down').addClass('fa fa-angle-right');

	});

	// dollar toggling
	var dollar = $('.price span');

	dollar.click(function(){
		$(this).parent().animate({'width': 250});
	});


    $( "#datepicker" ).datepicker();
    $('.clockpicker').clockpicker();
  
});