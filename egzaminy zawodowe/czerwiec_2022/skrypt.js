function dzialanie(){
    let rodzaj = Number (document.getElementById("Rodzaj").value);
    let litry = Number (document.getElementById("litry").value);
    let koszt = 0

    if(rodzaj === 1){
        koszt += 4
    if(litry > 1){
        koszt *= litry
    }
    }

    if(rodzaj === 2){
        koszt += 3.5
    if(litry > 1){
        koszt *= litry
    }
    }

    let wynik = document.getElementById("wynik");
    document.getElementById("wynik").innerHTML = `koszt paliwa: ${koszt} zl`;
}
