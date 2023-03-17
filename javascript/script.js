
//These are the variables linked to the buttons in the login box
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.loginLink');
const registerLink = document.querySelector('.registerLink');
const buttonPopup = document.querySelector('.loginButton-popup');
const iconClose = document.querySelector('.icon-close');


//All these do are the events in case we click on the variables we set before
registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

buttonPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});