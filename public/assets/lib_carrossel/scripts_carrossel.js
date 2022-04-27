var numSlide = [];
var numCarrossel=document.getElementsByClassName('carrossel');

for (var i = 0; i <= numCarrossel.length; i++) {
    numSlide[i] = 1;
}

for(var i = 1; i <= numCarrossel.length; i++){
	mostrarSlide(1, i);
}

//alert(numCarrossel.length)
//mostrarSlide(numSlide);

function mudarSlide(ns, num){
	mostrarSlide(numSlide[num] += ns, num);
}

function slideAtual(ns, num){
	mostrarSlide(numSlide[num] = ns, num);
}

function mostrarSlide(ns, num){
	var i;
	var slides=document.getElementsByClassName('slide fade a'+num);
	var indicadores=document.getElementsByClassName('indicador a'+num);
	
	if(ns > slides.length){
		numSlide[num]=1;
	}
	if(ns < 1){
		numSlide[num]=slides.length;
	}
	for(i = 0; i < slides.length; i++){
		slides[i].style.display="none";
	}
	for(i = 0; i < indicadores.length; i++){
		indicadores[i].className = indicadores[i].className.replace(" ativo", "");
	}
	slides[numSlide[num]-1].style.display = "block";
	indicadores[numSlide[num]-1].className += " ativo";
}