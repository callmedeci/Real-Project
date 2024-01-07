'use strict';

const modelSection = document.getElementById('model-section');
const models = document.getElementsByClassName('models');
const modelOpener = document.getElementsByClassName('modelOpener');
const closeBtn = document.getElementsByClassName('close');


for (let i = 0; i < closeBtn.length; i++) {
    closeBtn[i].addEventListener('click', close);
}

for (let i = 0; i < modelOpener.length; i++) {
    modelOpener[i].addEventListener('click', openHandler);
}

document.addEventListener('keydown', function (event) {

    for (let i = 0; i < models.length; i++) {
        if (event.key === 'Escape' && !models[i].classList.contains('hidden')) {
            close();
        }
    }
});

function openHandler(event) {

    let target = Number(event.target.getAttribute('model'));

    switch (target) {
        case 1:
            models[0].classList.remove('hidden');
            models[0].classList.add('z-30');
            modelSection.classList.add('blur');
            break;


        case 2:
            models[1].classList.remove('hidden');
            models[1].classList.add('z-30');
            // => add blur :
            modelSection.classList.add('blur');
            break;

        case 3:
            models[2].classList.remove('hidden');
            models[2].classList.add('z-30');
            modelSection.classList.add('blur');
            break;

        default:
            console.error('Error');
    }
}

function close() {
    for (let i = 0; i < models.length; i++) {
        models[i].classList.add('hidden');
        models[i].classList.remove('z-30');
        modelSection.classList.remove('blur');
    }
}