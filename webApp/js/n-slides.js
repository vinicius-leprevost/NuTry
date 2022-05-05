var intervalo;

function scrollDireitaDieta(){
  intervalo = setInterval(function(){ document.getElementById('scrollerDietas').scrollLeft += 1 }  , 5);
};
function scrollEsquerdaDieta(){
  intervalo = setInterval(function(){ document.getElementById('scrollerDietas').scrollLeft -= 1 }  , 5);
};
function scrollDireitaComedia(){
  intervalo = setInterval(function(){ document.getElementById('scrollerComedia').scrollLeft += 1 }  , 5);
};
function scrollEsquerdaComedia(){
  intervalo = setInterval(function(){ document.getElementById('scrollerComedia').scrollLeft -= 1 }  , 5);
};
function clearScroll(){
  clearInterval(intervalo);
};
