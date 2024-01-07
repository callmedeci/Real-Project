'use strict';


const INDEX_NAVIGATION_BAR = document.getElementById(`index-menu-navigation-bar`);
const INDEX_BTN_MENU = document.getElementById(`index-btn-menu`);
const INDEX_BTN_CLOSE_MENU = document.getElementById(`index-btn-close-menu`);

const HTML = document.getElementById(`html`);

const TRUN_ON_DARK_MODE = document.getElementById(`index-svg-turn-on-darkmode`);
const TRUN_OFF_DARK_MODE = document.getElementById(`index-svg-turn-off-darkmode`);

const slot = document.getElementById(`slot`);
const additionalSlot = document.getElementById(`additionalSlot`);
const footer = document.getElementById(`footer`);



INDEX_BTN_MENU.addEventListener(`click`, openNavBar);
INDEX_BTN_CLOSE_MENU.addEventListener(`click`, closeNavBar);
TRUN_ON_DARK_MODE.addEventListener(`click`, turnOnDarkMode);
TRUN_OFF_DARK_MODE.addEventListener(`click`, turnOffDarkMode);

function openNavBar() {
    INDEX_NAVIGATION_BAR.classList.remove(`hidden`);
    slot.classList.add('blur');
    additionalSlot.classList.add('blur');
    footer.classList.add('blur');
    INDEX_NAVIGATION_BAR.classList.add(`block`);
}

function closeNavBar() {
    INDEX_NAVIGATION_BAR.classList.add(`hidden`);
    slot.classList.remove('blur');
    additionalSlot.classList.remove('blur');
    footer.classList.remove('blur');
    INDEX_NAVIGATION_BAR.classList.remove(`block`);
}

function turnOnDarkMode() {
    HTML.classList.add(`dark`);
}

function turnOffDarkMode() {
    HTML.classList.remove(`dark`);
}

// TRUN_ON_DARK_MODE.addEventListener('click', chekingForColro);
// TRUN_OFF_DARK_MODE.addEventListener('click', chekingForColro);
//
// function chekingForColro() {
//     localStorage.getItem('darkMode')
//
//     if (HTML.classList[0] === 'dark') {
//         localStorage.setItem('darkMode', 'enabled');
//
//     }
//     else {
//         localStorage.setItem('darkMode', null)
//
//     }
// }
//
// addEventListener('storage', chekingForColro);

// ===> JQUERY_BEGIN

let dark = window.matchMedia("(prefers-color-scheme: dark)").matches;
let body = document.querySelector("body");
let content = document.getElementById("content");

if (dark) {
    HTML.classList.add(`dark`);
} else {
    HTML.classList.remove(`dark`);

}

// ===> JQUERY_END







