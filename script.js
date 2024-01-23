const formulles = document.querySelector('.formule');
const connexion = document.querySelector('.linking');
const linke = document.querySelector('.link');
const bouton = document.querySelector('.tape');
const icon = document.querySelector('.close'); 
linke.addEventListener('click', ()=> {
    formulles.classList.add('active');
});

connexion.addEventListener('click', ()=> {
    formulles.classList.remove('active');
});
bouton.addEventListener('click', ()=>{
    formulles.classList.add('active-popup');
});
close.addEventListener('click,',()=> {
    formulles.classList.remove('active-popup');
});

