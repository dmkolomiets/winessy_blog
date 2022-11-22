/* Plugins */

////= ../../node_modules/jquery/dist/jquery.min.js
////= ../../node_modules/popper.js/dist/umd/popper.min.js
////= ../../node_modules/bootstrap/dist/js/bootstrap.min.js
////= ../../node_modules/owl.carousel/dist/owl.carousel.min.js


window.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.burger'),
    header = document.querySelector('.header');

    console.log(burger);
    console.log(header);

    burger.addEventListener('click', () => {
        header.classList.toggle('active');
        burger.classList.toggle('change');
    });
})




