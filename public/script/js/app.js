window.addEventListener('load', () => {

    /* ------------ HEADER ------------ */

    /*------------ HEADER SCROLL ------------*/

    let header = document.getElementsByTagName('header');
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const scrollBegin = 200;
        if (scrolled > scrollBegin) {
            header[0].classList.add("style-scroll");
        }
        else if (scrolled <= scrollBegin) {
            header[0].classList.remove("style-scroll");
        }
    });

    /*------------ HEADER SCROLLING MENU ------------*/

    let menuScroll = document.getElementsByClassName('scrolling-menu')[0];
    let itemNav = document.getElementsByClassName('item-nav')[0];
    let imgDevelopp = document.getElementsByClassName('img-developp')[0];
    itemNav.addEventListener('click', () => {
        if (!menuScroll.classList.contains("style-active")) {
            menuScroll.classList.add("style-active");
            imgDevelopp.setAttribute("src", "/img/menu-developped.svg");
        }
        else {
            menuScroll.classList.remove("style-active");
            imgDevelopp.setAttribute("src", "/img/menu-developp.svg");
        }
    });
    console.log(menuScroll);

    /* ------------ SECTION 3 ------------ */

    /*------------ ANIMATION S3 ------------*/

    var animationLottieRapide = bodymovin.loadAnimation({
        container: document.getElementById('rapide'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/script/js/bodymovin/vitesse.json'
    })
    var animationLottieFlexible = bodymovin.loadAnimation({
        container: document.getElementById('flexible'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/script/js/bodymovin/flexible.json'
    })
    var animationLottieTransparency = bodymovin.loadAnimation({
        container: document.getElementById('transparent'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/script/js/bodymovin/transparency.json'
    })
    var animationLottieDilution = bodymovin.loadAnimation({
        container: document.getElementById('dilution'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/script/js/bodymovin/dilution.json'
    })
    /* ------------ SECTION 5 ------------ */

    /*------------ SLIDER CARD ------------*/

    let cards = document.querySelectorAll(".card-text");
    let cardImg = document.querySelectorAll(".card-img");
    let cardTxtA = document.getElementsByClassName("active-card");
    let cardImgA = document.getElementsByClassName("active-img");
    cards.forEach(function (element, key) {
        element.addEventListener("click", function () {
            cardTxtA[0].classList.remove("active-card");
            this.classList.add("active-card");
            cardImgA[0].classList.remove("active-img");
            cardImg[key].classList.add("active-img");

        });
    });

    /* ------------ SECTION 6 ------------ */

    /*------------ ANIMATION S6 ------------*/

    var animationLottieEntreprise = bodymovin.loadAnimation({
        container: document.getElementById('entreprise'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/script/js/bodymovin/entreprise.json'
    })
    var animationLottieMonths = bodymovin.loadAnimation({
        container: document.getElementById('6month'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/script/js/bodymovin/6months.json'
    })
    var animationLottieCA = bodymovin.loadAnimation({
        container: document.getElementById('10k'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/script/js/bodymovin/10K_CA.json'
    })

    /* ------------ SECTION 7 ------------ */

    /*------------ SLIDER QUOTE ------------*/

    let prev = document.getElementById("slide-prev");
    let next = document.getElementById("slide-next");
    let divImg = document.getElementsByClassName("slide-img");
    let divTxt = document.getElementsByClassName("slide-text");
    let c = 0;
    function changeSlide(m) {
        if (m >= divImg.length) { m = 0; }
        if (m < 0) { m = divImg.length - 1; }
        divImg[c].classList.remove("style-active");
        divTxt[c].classList.remove("style-active");
        divImg[m].classList.add("style-active");
        divTxt[m].classList.add("style-active");
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

    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.add('style-active');
        });
    }

    /*------------ MENU HIDDEN ------------*/

    if (navClose) {
        navClose.addEventListener('click', () => {
            navMenu.classList.remove('style-active');
        });
    }

    /* ------------ POP UP------------ */
    let popUp = document.getElementsByClassName("pop-up-news")[0];
    let openPopUpNews = document.getElementsByClassName("open-pop-up-news")[0];
    let closePopUpNews = document.getElementsByClassName("close-pop-up-news")[0];
    console.log(openPopUpNews);
    openPopUpNews.addEventListener('click', () => {
        popUp.classList.add('style-active');
    });
    closePopUpNews.addEventListener('click', () => {
        popUp.classList.remove('style-active');
    });

});

