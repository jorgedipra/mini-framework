jQuery(document).ready(function($) {

	$time=500;
	

	setTimeout(function() {
		$("#Contenido").css('opacity', '0');
		$("#Contenido").load('home.html')
	}, 2*1000);
	setTimeout(function() {
		$("#Contenido").css('opacity', '.1');
	}, 2500);
	setTimeout(function() {
		$("#Contenido").css('opacity', '.2');
	}, 2600);
	setTimeout(function() {
		$("#Contenido").css('opacity', '.3');
	}, 2700);
	setTimeout(function() {
		$("#Contenido").css('opacity', '.4');
	}, 2800);
	setTimeout(function() {
		$("#Contenido").css('opacity', '.5');
	}, 2900);
	setTimeout(function() {
		$("#Contenido").css('opacity', '.7');
	}, 3000);
	setTimeout(function() {
		$("#Contenido").css('opacity', '.8');
	}, 3500);
	setTimeout(function() {
		$("#Contenido").css('opacity', '.9');
	}, 3800);
	setTimeout(function() {

		$("#Contenido").css('opacity', '1');
		$(".techyButton").click(function(event) {
			$('nav').css('display','block');
			$( "#doorder" ).animate({
				right: 0
			}, $time );
			$( "#doorizq" ).animate({
				left: 0
			}, $time );

			setTimeout(function() {
				$( "#doorizq" ).animate({
					left: '-50%'
				}, $time );

				$( "#doorder" ).animate({
					right: '-50%'
				}, $time );

			},$time+300);

		});

		$("#btnVn1").click(function(event) {
			$("#Contenido").load('p1.html'); 
			$("#obj1").click();
		})

		$("#btnVn2").click(function(event) {
			$("#Contenido").load('p2.html'); 
			$("#obj2").click();
		})
		$("#btnVn3").click(function(event) {
			$("#Contenido").load('p3.html'); 
			$("#obj3").click();

		})
		$("#btnVn4").click(function(event) {
			$("#Contenido").load('p4.html'); 
			$("#obj4").click();

		})
		$("#btnVn5").click(function(event) {
			$("#Contenido").load('p5.html');
			$("#obj5").click();

		})

	}, 4*1000);

	$("#obj1").click(function(event) {
		$("#TitleVn").html('Acerca de Mi');
		$(".BtnInner").css('background','none')
		$("#BtnVn1").css('background','#e95e01')
		$("#Contenido").load('p1.html'); 
	});
	$("#obj2").click(function(event) {
		$("#TitleVn").html('Habilidades');
		$(".BtnInner").css('background','none')
		$("#BtnVn2").css('background','#e95e01')
		$("#Contenido").load('p2.html'); 
	});
	$("#obj3").click(function(event) {
		$("#TitleVn").html('Proyectos');
		$(".BtnInner").css('background','none')
		$("#BtnVn3").css('background','#e95e01')
		$("#Contenido").load('p3.html'); 
	});
	$("#obj4").click(function(event) {
		$("#TitleVn").html('Logros');
		$(".BtnInner").css('background','none')
		$("#BtnVn4").css('background','#e95e01')
		$("#Contenido").load('p4.html'); 
	});
	$("#obj5").click(function(event) {
		$("#TitleVn").html('Contactame');
		$(".BtnInner").css('background','none')
		$("#BtnVn5").css('background','#e95e01')
		$("#Contenido").load('p5.html'); 
	});


	$(".BtnInner").click(function(event) {
		$( "#doorder" ).animate({
			right: 0
		}, $time );
		$( "#doorizq" ).animate({
			left: 0
		}, $time );

		setTimeout(function() {
			$( "#doorizq" ).animate({
				left: '-50%'
			}, $time );

			$( "#doorder" ).animate({
				right: '-50%'
			}, $time );

		},$time);
	});




	/*fin*/
});