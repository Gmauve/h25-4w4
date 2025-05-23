(function() {
    console.log("carrousel.js");
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    console.log("hero__radio__input = ", hero__radio__input.length);

    for (hero__radio__input_bouton of hero__radio__input) {
        console.log(hero__radio__input_bouton);
        hero__radio__input_bouton.addEventListener('click', updateCarrousel);
    }

    let i = 1;
    let numero;

    setInterval(() => {
        if(i<3){
            i++;
        }else{
            i=1;
        }
        numero = i-1;
        parcourirCarrousel();
    }, 5000);

    function updateCarrousel(event) {
        console.log(event.target);
        numero = event.target.getAttribute('data-id_radio');
        console.log(numero);
        parcourirCarrousel();
    }

    function parcourirCarrousel() {
        let backgrounds = document.querySelectorAll('.hero__carrousel');
        for (unBackground of backgrounds) {
            unBackground.classList.remove('hero__carrousel--active');
        }
        backgrounds[numero].classList.add('hero__carrousel--active');
    }
})()