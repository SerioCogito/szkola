

function dzialanie(){
    let piling = document.getElementById("1").checked;
    let maska = document.getElementById("2").checked;
    let masaz = document.getElementById("3").checked;
    let regulacja = document.getElementById("4").checked;
    let suma = 0;

    if(piling === true){
        suma += 45;
    } if(maska === true){
        suma += 30;
    }if(masaz === true){
        suma += 20;
    }if(regulacja === true){
        suma += 5;
    }




let wynik = document.getElementById("wynik");
document.getElementById("wynik").innerHTML = `Cena zabiegow ${suma}`;
}