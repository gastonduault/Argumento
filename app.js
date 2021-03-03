const burger = document.querySelector('.burger');

nbmot = 0;

burger.addEventListener('input', () => {
    var saisi = document.getElementById("motCle").value;

    if (nbmot <= 3) {
        if (nbmot <= 1 && saisi.endsWith(',')) {
            nbmot++;
            burger.classList.toggle('active' + nbmot);
        } else if (nbmot == 2 && saisi.endsWith(',')) {
            nbmot++;
            burger.classList.toggle('active' + nbmot);
        }else if(nbmot==3 && saisi.endsWith(' ')){
            nbmot=1;
        }
    }
});
