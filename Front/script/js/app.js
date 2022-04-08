window.addEventListener('load',() => {

    /* ------------ HEADER ------------ */

    /*------------ HEADER SCROLL ------------*/

    let header = document.getElementsByTagName('header');
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const scrollBegin = window.innerHeight-700;
        if(scrolled > scrollBegin){
            header[0].classList.add("style-scroll");
        }
        else if(scrolled <= scrollBegin){
            header[0].classList.remove("style-scroll");
        }
    });

    /*------------ HEADER SCROLLING MENU ------------*/

    let menuScroll = document.getElementsByClassName('scrolling-menu')[0];
    let itemNav = document.getElementsByClassName('item-nav')[0];
    let imgDevelopp = document.getElementsByClassName('img-developp')[0];
    itemNav.addEventListener('click', () =>{
        if(menuScroll.classList.contains("hide")){
            menuScroll.classList.remove("hide");
            menuScroll.classList.add("show");
            imgDevelopp.setAttribute("src","img/menu-developped.svg");
        }
        else{
            menuScroll.classList.remove("show");
            menuScroll.classList.add("hide");
            imgDevelopp.setAttribute("src","img/menu-developp.svg");
        }
    });
    console.log(menuScroll);
    /* ------------ SECTION 5 ------------ */

    /*------------ SLIDER CARD ------------*/

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

    /*------------ SLIDER QUOTE ------------*/

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

    /*------------ MENU SHOW ------------*/

    if(navToggle){
        navToggle.addEventListener('click', () =>{
            navMenu.classList.add('show-menu');
        });
    }

    /*------------ MENU HIDDEN ------------*/
    
    if(navClose){
        navClose.addEventListener('click', () =>{
            navMenu.classList.remove('show-menu');
        });
    }

    /* ------------ POP UP------------ */
    let popUp = document.getElementsByClassName("pop-up-news")[0];
    let openPopUpNews = document.getElementsByClassName("open-pop-up-news")[0];
    let closePopUpNews = document.getElementsByClassName("close-pop-up-news")[0];
    console.log(openPopUpNews);
    openPopUpNews.addEventListener('click', () => {
        popUp.classList.remove('hide');
        popUp.classList.add('show');
    });
    closePopUpNews.addEventListener('click', () => {
        popUp.classList.remove('show');
        popUp.classList.add('hide');
    });

});

