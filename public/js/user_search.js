$(function () {
  $('.dli-chevron-down').click(function () {
    $('.search_conditions_inner').slideToggle();
  });

  $('.subject_select_arrow').click(function () {
    $('.subject_inner').slideToggle();
  });

  $('.subject_select_arrow').click(function(){
		$(this).toggleClass('selected');
		$(this).next().slideToggle();
	});
});
