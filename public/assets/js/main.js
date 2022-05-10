window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;
		function myFunction() {
		  if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		  } else {
			header.classList.remove("sticky");
		  }
		}
	$(document).ready(function(){
		$(".scroll-top").hide();
		$(function toTop() {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('.scroll-top').fadeIn();
				} else {
					$('.scroll-top').fadeOut();
				}
			});

			$('.scroll-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});  
    });
$(document).ready(function() {
    $('#example').DataTable();
} );
// (function($){
// 				$(window).on("load",function(){
// 				$(".tablescroll ").mCustomScrollbar({
// 				  axis:"x", // horizontal scrollbar
// 				  scrollbarPosition: "outside",
// 				  alwaysShowScrollbar:"Enable",
// 				  scrollButtons:"Enable ",
// 				  advanced:{autoExpandHorizontalScroll:true}
// 				});
// 				});
// 				})(jQuery);
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

$(document).ready(function(){
  
      $("#startdate").datepicker({
       
        todayBtn:  1,
        autoclose: true,
       
       
      }).on('changeDate', function (selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#enddate').datetimepicker('setStartDate', minDate);
    });
    
        $("#enddate").datepicker();
});