// for header

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

// for window scroll

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
    }
    else{
        document.querySelector('.header').classList.remove('active');
    }
}

// for home slider

var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slide");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }

    slideIndex++;

    if (slideIndex > x.length) {
        slideIndex = 1
    }
    
    x[slideIndex-1].style.display = "block"; 

    setTimeout(carousel, 2500); 
}

// for plans section

function check1() {

    document.getElementById("btn1").style.backgroundColor = "salmon";
    document.getElementById("btn1").style.color = "white";
    document.getElementById("btn1").innerHTML = "Viewed!";
    
}

function check2() {

    document.getElementById("btn2").style.backgroundColor = "salmon";
    document.getElementById("btn2").style.color = "white";
    document.getElementById("btn2").innerHTML = "Viewed!";
    
}

function check3() {

    document.getElementById("btn3").style.backgroundColor = "salmon";
    document.getElementById("btn3").style.color = "white";
    document.getElementById("btn3").innerHTML = "Viewed!";
    
}
