window.addEventListener("scroll",function(){
    var header=document.querySelector("header");
	var element = document.querySelector("tag");
    var element1 = document.querySelector("color");
    var element2 = document.querySelector("change");
    //element.classList.toggle("elementColor",window.scrollY >0);
    //element1.classList.toggle("elementColor",window.scrollY >0);
    //element2.classList.toggle("elementColor",window.scrollY >0);
    header.classList.toggle("sticky",window.scrollY >0);
});
