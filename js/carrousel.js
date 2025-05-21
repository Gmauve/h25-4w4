(function() {
    console.log("carrousel.js");
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    console.log("hero__radio__input = ", hero__radio__input.length);

    for (hero__radio__input_bouton of hero__radio__input) {
        console.log(hero__radio__input_bouton);
        hero__radio__input_bouton.addEventListener('click', updateCarrousel);
    }

    function updateCarrousel(event) {
        console.log(event.target);
        let numero = event.target.getAttribute('data-id_radio');
        console.log(numero);
        let backgrounds = document.querySelectorAll('.hero__carrousel');
        for (unBackground of backgrounds) {
            unBackground.classList.remove('hero__carrousel--active');
        }
        backgrounds[numero].classList.add('hero__carrousel--active');
    }
})()