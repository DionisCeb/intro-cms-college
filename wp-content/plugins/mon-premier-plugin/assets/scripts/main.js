window.addEventListener('DOMContentLoaded', function() {
    const elPopUp = document.querySelector('[data-js-mpp-pop-up]');


    console.log(elPopUp)

    setTimeout(function() {
        elPopUp.classList.replace('mpp-pop-up--ferme', 'mpp-pop-up--ouvert');
    }, 10);
});
