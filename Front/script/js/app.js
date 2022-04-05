window.addEventListener('load',() => {

    /* ------------ HEADER ------------ */

    let header = document.getElementsByTagName('header');
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const scrollBegin = window.innerHeight-800;
        if(scrolled > scrollBegin){
            header[0].style.padding ="28px 40px";
        }
        else{
            header[0].style.padding ="40px";
        }
    });

    /* ------------ SECTION 5 ------------ */

    // let card = document.getElementsByClassName('.card');
    // console.log(card);

});