window.addEventListener('load',() => {

    /* ------------ HEADER ------------ */

    let header = document.getElementsByTagName('header');
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const scrollBegin = window.innerHeight-800;
        if(scrolled > scrollBegin){
            header[0].classList.add("style-scroll");
        }
        else{
            header[0].classList.remove("style-scroll");
        }
    });

    /* ------------ SECTION 5 ------------ */

    let cards = document.querySelectorAll(".card-text");
    let cardImg = document.querySelectorAll(".card-img")[0].childNodes[1];
    let cardTxtA=document.getElementsByClassName("active-card");
    console.log(cardImg);
    cards.forEach(function(element){
        element.addEventListener("click", function(){
            if(this.classList.contains("active-card")){
            }
            else{
                cardTxtA[0].classList.remove("active-card");
                this.classList.add("active-card");
                if(this.classList.contains("1")){
                    cardImg.setAttribute("src","img/illu-s5-1.svg");
                }
                else if(this.classList.contains("2")){
                    cardImg.setAttribute("src","img/illu-s5-2.svg");
                }
                else{
                    cardImg.setAttribute("src","img/illu-s5-3.svg");
                }
            }
        });
    });

    /* ------------ SECTION 7 ------------ */

    let prev=document.getElementById("slide-prev");
	let	next=document.getElementById("slide-next");
    let divImg=document.getElementsByClassName("slide-img");
    let divTxt=document.getElementsByClassName("slide-text");
    let c = 0;
    function changeSlide(m) {
        if (m >= divImg.length) {m = 0;}
        if (m < 0) {m = divImg.length - 1;}
        divImg[c].classList.remove("active-img");
        divTxt[c].classList.remove("active-text");
        divImg[m].classList.add("active-img");
        divTxt[m].classList.add("active-text");
        c = m;
    }
    next.addEventListener("click", () => {
        changeSlide(c + 1)
    });
    prev.addEventListener("click", () => {
        changeSlide(c - 1)
    });

    /* ------------ RESPONSIBLE MENU ------------ */

    /*------------ SHOW MENU ------------*/
	const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close');

    /*---- MENU SHOW ----*/
    if(navToggle){
        navToggle.addEventListener('click', () =>{
            navMenu.classList.add('show-menu');
        });
    }

    /*---- MENU HIDDEN ----*/
    if(navClose){
        navClose.addEventListener('click', () =>{
            navMenu.classList.remove('show-menu');
        });
    }

    /*------------ REMOVE MENU MOBILE ------------*/
    const navLink = document.querySelectorAll('.navLink');

    function linkAction(){
        const navMenu = document.getElementById('nav-menu');
        navMenu.classList.remove('show-menu');
    }
    navLink.forEach(n => n.addEventListener('click', linkAction));

});

