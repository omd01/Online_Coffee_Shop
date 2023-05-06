let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
    login_container.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
    login_container.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');



document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    login_container.classList.remove('active');
}

let login_container = document.querySelector('.login-container');

document.querySelector('#login-btn').onclick = () =>{
    login_container.classList.toggle('active');
    cartItem.classList.remove('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}


window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
    login_container.classList.remove('active');
}


 
 
 