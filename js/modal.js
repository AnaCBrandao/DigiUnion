$(function() {
	
	$(".modalbtn").click(function() {
        $(".modal").css("display", "block");
    });
	
	$(".close").click(function() {
        $(".modal").css("display", "none");
    });
	
	$(".cancelbtn").click(function() {
        $(".modal").css("display", "none");
    });
	
	$(window).click(function(event) {
		var target = $(event.target);
		if(target.is($(".modal"))) {
			$(".modal").css("display", "none");
		}
	});
	
});