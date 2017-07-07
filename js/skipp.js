$(document).ready(function(){
	 $(".u").mouseover(function(){
	 	$(".space").html($(this).attr("rel"));
	 		$(".space").fadeIn();
	 		 }).mouseleave(function(){
      $(".space").hide();
	 })
});