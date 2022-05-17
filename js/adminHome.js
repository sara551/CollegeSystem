var imagesSize = 1;
function sliderImages(){
	if(imagesSize == 4){
		imagesSize=0;
	}
	setTimeout(function(){
		imagesSize++;
		document.getElementById('imageSource').src = "images/slider/image"+imagesSize+".jpg";
		sliderImages();
	},2000);
}
$(document).ready(function(){
	sliderImages();
});

function directToPage(pageReference){
	window.location = "http://localhost/college%20system/"+pageReference;
}

function Card(specificCard){
	document.getElementById(specificCard).style.transition = "all 1s";
}

