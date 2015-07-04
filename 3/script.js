$(document).ready(function(){
	$('.tab__title a').on('click', function(){
		$('.tab__title').removeClass('tab__title--active');
		$(this).closest('.tab__title').addClass('tab__title--active');
		return false;
		//var target_id = $(this).attr('href');
		console.log('hey');
	});
})


