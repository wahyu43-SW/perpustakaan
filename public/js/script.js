 $(document).on('ready', function() {
 	$(".regular").slick({
 		dots: true,
 		infinite: true,
 		slidesToShow: 3,
 		slidesToScroll: 3
 	});
 	$(".center").slick({
 		dots: true,
 		infinite: true,
 		centerMode: true,
 		slidesToShow: 3,
 		slidesToScroll: 3
 	});
 	$(".variable").slick({
 		dots: true,
 		infinite: true,
 		variableWidth: true
 	});
 });

 window.addEventListener("scroll",function(){
 	var navbar = document.querySelector(".navbar");
 	navbar.classList.toggle("sticky", window.scrollY > 0);
 });

 function openleft(){
 	document.getElementById("navbar").style.left="0";
 }
 function closeleft(){
 	document.getElementById("navbar").style.left="-100rem";
 }

