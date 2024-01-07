'use strict';
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max * min) - min);
}

function displayMessage(message) {
    showStatus.innerText = message;
}

const numberBox = document.getElementById('number-box');
const inputNumber = document.getElementById('input-number');
const checkBtn = document.getElementById('check-btn');
const showStatus = document.getElementById('show-status');
const highScore = document.getElementById('high-score');
const score = document.getElementById('score');
const body = document.getElementById('body');
const resetBtn = document.getElementById('reset-btn');
const warningBar = document.getElementById('warning-bar');
const ban = document.getElementById('ban');

let random = getRandomInt(1, 20);
let scoreValue = Number(score.getAttribute('value'));
let highScoreValue;
let counter = 0;



checkBtn.addEventListener('click', calcScore);
resetBtn.addEventListener('click', resetStatus);

document.addEventListener('keydown', function (event) {
    if (inputNumber.value !== '' && event.key === 'Enter') {
        calcScore();
    }
    else {
        displayMessage('PLease Enetr a number');
        counter++;
        if (counter > 5) {
            displayMessage('Could You Please STOP 😡');
            warningBar.style.width = `${counter * 2}px`;
        }
        if (counter >= 10) {
            displayMessage('What did I said ? 😡');
            warningBar.style.width = `${counter * 4}px`;
        }
        if (counter >= 15) {
            displayMessage('Just pick a number 🤬');
            warningBar.style.width = `${counter * 6}px`;
        }
    }
});


function calcScore() {

    const number = Number(inputNumber.value);

    if (!number) {
        displayMessage('PLease Enetr a number');
        counter++;
        if (counter > 5) {
            displayMessage('Could You Please STOP 😡');
            warningBar.style.width = `${counter * 2}px`;
        }
        if (counter >= 10) {
            displayMessage('What did I said ? 😡');
            warningBar.style.width = `${counter * 4}px`;
        }
        if (counter >= 15) {
            displayMessage('Just pick a number 🤬');
            warningBar.style.width = `${counter * 6}px`;
        }
    }

    else if (number > 20) {
        displayMessage('Too high 📈');
    }
    else if (number < 0) {
        displayMessage('Tow low 📉');
    }

    else if (number === random) {

        let highScoreValue = scoreValue;

        body.classList.remove('bg-zinc-800');
        body.classList.add('bg-green-500');
        ban.classList.remove('translate-y-10');
        ban.classList.add('translate-y-0');

        displayMessage('You Guess the correct numebr 🏆');
        highScore.innerText = highScoreValue;
        numberBox.innerText = random;
    }

    else if (number !== random) {
        if (scoreValue > 1) {
            displayMessage(number < random ? 'It\'s Bigger 📈' : 'It\'s Lower 📉');
            scoreValue--;
            score.innerText = scoreValue;
        }
        else {
            body.classList.remove('bg-zinc-800');
            body.classList.add('bg-red-600');
            ban.classList.remove('translate-y-10');
            ban.classList.add('translate-y-0');
            displayMessage('💔 You\'ve lost the game');
        }
    }
}

function resetStatus() {

    if (scoreValue > highScoreValue) {
        highScore.innerText = scoreValue;
    }

    random = getRandomInt(1, 20);

    inputNumber.value = 0;
    inputNumber.innerText = 0;

    body.classList.add('bg-zinc-800');
    body.classList.remove('bg-green-500');

    ban.classList.add('translate-y-10');
    ban.classList.remove('translate-y-0');

    displayMessage('Nothing');
    numberBox.innerText = '?';

    score.innerText = 20;
    scoreValue = 20;
}

