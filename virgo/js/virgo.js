$(document).ready(function() {
	var i = 0;
	var $games;
	var timer;
	
	function rotate_games() {
		var $current_game = $("#games li:eq(" + i + ")");
				
		if (i == $games.length-1) {
			i = 0;
		} else {
			i++;
		}

		var $next_game = $("#games li:eq(" + i + ")");

		$current_game.fadeOut(1000);
		$next_game.fadeIn(1000);

		timer = setTimeout(function() {
			rotate_games();
		}, 5000);
	}
	
	$("#games .desc").mouseenter(function() {
		$(this).find("p").show();
		clearTimeout(timer);
	}).mouseleave(function() {
		$(this).find("p").hide();
		timer = setTimeout(function() { rotate_games(); }, 5000);
	}).click(function() {
		$(this).find("p").toggle();
	});
			
	$("#games li").each(function() {
		$this = $(this);
		$this_desc = $this.find(".desc");
				
		$this.css("background-image", "url(" + $this.attr("data-bg") + ")");
		$this_desc.css({ 
			background: "rgb(" + $this_desc.attr("data-color") + ")",
			backgroundColor: "rgba(" + $this_desc.attr("data-color") + ",0.6)" 
		});
	});
			
	$games = $("#games li");
	$games.first().fadeIn(500);
	
	if (!($.browser.msie && parseInt($.browser.version, 10) === 8)) {
		$(document).scroll(function() {
			var scroll_top = $(document).scrollTop();
			var alpha = (0.70 + scroll_top*0.005);
		
			$("#nav, #nav .subnav").css({ backgroundColor: "rgba(16,16,17," + alpha + ")" });
		});
	}
		
	$(".gallery a").slimbox();
			
	timer = setTimeout(function() {
		rotate_games();
	}, 5000);


	$('.foldmenu ul').hide();
	$('body.single-publications .foldmenu li.active').parent().show();
	
	$('.foldmenu h3').click(function() {
		$('.foldmenu ul').slideUp('fast');
		$(this).next('ul').slideDown('fast');
	})
});
