window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
	var element = document.querySelector("tag");
    var element1 = document.querySelector("color");
    var element2 = document.querySelector("change");
    header.classList.toggle("sticky",window.scrollY >540);
    element.classList.toggle("elementColor",window.scrollY >540);
    element1.classList.toggle("elementColor",window.scrollY >540);
    element2.classList.toggle("elementColor",window.scrollY >540);
    
});