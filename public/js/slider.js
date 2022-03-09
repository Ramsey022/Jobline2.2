const slider = document.querySelector("#slider");
let seccionSlider = document.querySelectorAll (".seccion-slider");
let seccionSliderLast = seccionSlider[seccionSlider.length -1];

const botonLeft = document.querySelector("#boton-left");
const botonRight = document.querySelector("#boton-right");

slider.insertAdjacentElement('afterbegin',seccionSliderLast);

function mover() { 
    let seccionSliderFirst = document.querySelectorAll (".seccion-slider")[0];
    slider.style.marginLeft = "-100%";
    slider.style.transition = "all 40s";
    setTimeout( function () {
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend',seccionSliderFirst);
        slider.style.marginLeft = "-100%";
    }, 500);
}

function prev() { 
    let seccionSliderFirst = document.querySelectorAll (".seccion-slider"); 
    let seccionSliderast = seccionSlider[seccionSlider.length -1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 40.0s";
    setTimeout( function () {
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforebegin',seccionSliderFirst);
        slider.style.marginLeft = "-100%";
    }, 500);
}
botonRight.addEventListener('click', function () {
    mover();
    
});
botonLeft.addEventListener('click', function () {
    prev();
    
});
setInterval(function () {
    mover();
    
}, 5000);
/*en este codigo lo que hace es alterar la posicion de las imagenes como un bucle*/
