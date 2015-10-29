$(function(){
	$('#slides1').bxSlider({
		prev_image: '',
		next_image: '',
		wrapper_class: 'slides1_wrap',
		margin: 0,
		auto: true,
		auto_controls: false,
		stop_text: 'Pause',             
        start_text: 'Resume', 
		speed: 800,
		pager: false,
		pause: 8000
	});
});