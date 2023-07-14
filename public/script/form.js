let btnNext = document.querySelector('.next');
let seatContainer = document.querySelector('.seat-container');
btnNext.addEventListener('click', function () {
    seatContainer.classList.remove('d-none');
    btnNext.classList.add('d-none');
});
