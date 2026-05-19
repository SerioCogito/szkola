
let kolor = 'mistyrose';
let kolor1 = '#FFAEA5';

function opis(){
    document.getElementById("baza").style.display = "none";
    document.getElementById("galeria").style.display = "none";
    document.getElementById("opisy").style.display = "block";
    document.getElementById("blok1").style.backgroundColor = kolor1;
    document.getElementById("blok2").style.backgroundColor = kolor;
    document.getElementById("blok3").style.backgroundColor = kolor1;
    
}

function galeria(){
    document.getElementById("baza").style.display = "none";
    document.getElementById("opisy").style.display = "none";
    document.getElementById("galeria").style.display = "block";
     document.getElementById("blok1").style.backgroundColor = kolor1;
    document.getElementById("blok2").style.backgroundColor = kolor1;
    document.getElementById("blok3").style.backgroundColor = kolor;
}

function baza(){
    document.getElementById("galeria").style.display = "none";
    document.getElementById("opisy").style.display = "none";
    document.getElementById("baza").style.display = "block";
    document.getElementById("blok1").style.backgroundColor = kolor;
    document.getElementById("blok2").style.backgroundColor = kolor1;
    document.getElementById("blok3").style.backgroundColor = kolor1;
}