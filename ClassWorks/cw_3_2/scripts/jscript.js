//Prašoma įvesti valandas
let inputTime = parseInt(prompt("Įveskite valandą:"));

// let d = new Date();
// let inputTime = d.getUTCHours()-(d.getTimezoneOffset()/60);

console.log(inputTime);

//Tikriname ar numeris
if (!isNaN(inputTime)) {
    //Tikriname ar yra tarp 0 ir 24
    if (inputTime < 0 || inputTime > 24){
        //Veiksmas jeigu įvestas skaičius <0 arba >24
        alert("Įvesta mažiau kaip 0 arba daugiau nei 24!")
    } else {
        //Tikriname kuris laikas įvestas
        if (inputTime >= 22 || inputTime < 6) alert("Labanakt");
        if (inputTime >= 6 && inputTime < 10) alert("Labas rytas");
        if (inputTime >= 10 && inputTime < 16) alert("Laba diena");
        if (inputTime >= 16 && inputTime < 22) alert("Labas vakaras");
    }
} else{
    //Veiksmas jeigu įvestas ne skaičius
    alert("Netinkamas formatas!");
}
