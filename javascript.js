// Variables declare
let a = document.querySelector('.burger');
let b = document.querySelector('.nav-links');
let textArea = document.querySelector('.text-content');
a.addEventListener('click', () => {
    b.classList.toggle('showthis');
    textArea.classList.toggle('show');
})
