$(document).ready(function(){
	$('#grad-content').children().each(function () {
		if ($(this).attr("data-swipe") == 1){
			$(this).fadeIn();
		}
	});
	var href = document.location.href;
	var lastPathSegment = href.substr(href.lastIndexOf('/') + 1);
	if (lastPathSegment == "") {
		function rotate(int){
			var next = int;
			next++;
			if (int == 3) {
				next = 1;
			}
			// console.log("current: "+int+" Next: "+next);
			//loop through all child elements
			$('#grad-content').children().each(function () {
				//find currently displayed element
				if ($(this).attr("data-swipe") == int) {
					$(this).blur();
					$(this).hide("slide", { direction: "left" }, 900);
				}

				if ($(this).attr("data-swipe") == next) {
						$(this).blur();
						$(this).delay(1001).show("slide", { direction: "right" }, 1000);
				};
			});
			if (int == 3) {
				int = 0
			}
			int++;
			window.addEventListener('focus', function() {
				setTimeout(function(){rotate(int)}, 5000);
			}
		}
		window.addEventListener('focus', function() {
			setTimeout(function(){rotate(1)}, 5000);
		}

	}

});