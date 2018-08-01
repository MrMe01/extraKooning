/*
	***** Autores ******

	-> Ing. Jonas Santiz L.
	-> Lic. Alan E. Gonzalez
	-> Ing. Fernando Morales Robles

	<---https://m.kooningtravel.com 2018--->
*/
$(document).ready(function(){

$(".menu1 ul li a").click(function(){
	$(".menu1 ul li a").parent().removeClass("active");
	$(this,".menu1 ul li a").parent().addClass("active"); 
});



 $('#hidden').on('click', function () {
     $('#sidebar').toggleClass('active');
     $('.area').toggleClass('bg');
 });














});

