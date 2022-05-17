$(document).ready(function(){
	var pageWidth = $(document).width();
	$(".space").css("margin-left",((pageWidth*0.24)/2));
	$("#zoomIn").click(function(){
		var imageWidth = $("#image").width();
		var imageHeight = $("#image").height();
		var imageDivWidth = $(".schedule").width();
		var imageDivHeight = $(".schedule").height();

		$(".schedule").width(imageDivWidth * 1.2);
		$(".schedule").height(imageDivHeight * 1.2);
		$("#image").width(imageWidth * 1.2);
		$("#image").height(imageHeight * 1.2);
	});
	
	$("#zoomOut").click(function(){
		
		var imageDivWidth = $(".schedule").width();
		var imageDivHeight = $(".schedule").height();
		var imageWidth = $("#image").width();
		var imageHeight = $("#image").height();
		
		$(".schedule").css("margin-left","auto");
		$(".schedule").css("margin-right","auto");
		$(".schedule").width(imageDivWidth / 1.2);
		$(".schedule").height(imageDivHeight / 1.2);
		$("#image").width(imageWidth / 1.2);
		$("#image").height(imageHeight / 1.2);
	});
});