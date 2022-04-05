// Can also be included with a regular script tag
//Typed.JS
import Typed from 'typed.js';
//ScrollReveal.JS
import ScrollReveal from 'scrollreveal';
//Popper.JS
import Popper from "popper.js";

document.addEventListener("DOMContentLoaded", function () {
    
    var typed_cool = new Typed('#typed-cool', {
        strings: ['>Ingeniero de Software y Programador Web <br> >npm install^1000 <br> >installing components...^1000 <br> >Fetching from source... <br> >Downloading... <br> >Apasionado por la creación de aplicaciones y experiencias interactivas en la web.'],
        typeSpeed: 40,
        backSpeed: 0,
        loop: false
    });

    ScrollReveal().reveal('.scroll', { delay: 500 });
});