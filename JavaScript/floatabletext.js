(function() {
    // on cible l'objet nav
    let objNav = document.querySelector("text");
    // on mémorise la position de nav
    let memoPositionNav = objNav.offsetTop;
    function sticky(){
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if(memoPositionNav-posCurseur<1){
            objNav.style.position = "fixed";
            objNav.style.top = "300px";
            objNav.style.left = "300px";

        }
        if(memoPositionNav-posCurseur>1){
            objNav.style.position = "relative";
        }
    }
    // evenement
    window.addEventListener("scroll", sticky);
})()