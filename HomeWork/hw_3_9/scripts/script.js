// Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.
function square (n){
    return n*n;
};
// Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus.
function summ(a,b){
    return (a+b);
};
// Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.
function calculate (a,b,c){
    return ((b-a)/c);
};
// Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.
function wday (n){
    let week_day =['Pirmadienis','Antradienis','Trečiadienis','Ketvirtadienis','Penktadienis','Šeštadienis', 'Sekmadienis'];
    if (n<0||n>7){return 'Tokios savaitės dienos nėra'}
    return week_day[n-1];
};

//Funkcija, kuri tikrina ar įvedami duomenys teisingi
function CheckInput (inputs){
    if (inputs.length>0){
        for (let i = 0;i<inputs.length;i++){
            if (inputs[i] == null||inputs[i]==undefined||isNaN(inputs[i])){return false}
        }
        return true;
    }
    return false;
};

//Kai įvesti neteisingi duomenys
function WrI(){
    document.write('Wrong inputs!<hr>');
}

//Prašoma įvesti duomenis
let number1 = parseInt(prompt('Kokį skaičių norite pakelti kvadratu:'));
let numberA1 = parseInt(prompt('Formulė A + B. Įveskite A:'));
let numberB1 = parseInt(prompt('Formulė A + B. Įveskite B:'));
let numberA2 = parseInt(prompt('Formulė (B - A) / C. Įveskite A:'));
let numberB2 = parseInt(prompt('Formulė (B - A) / C. Įveskite B:'));
let numberC2 = parseInt(prompt('Formulė (B - A) / C. Įveskite C:'));
let week_day_number = parseInt(prompt('Įveskite savaitės dienos numerį:'));

//Funkcijų iškvietimai
if (CheckInput([number1])) {
    document.write(`Skaičiaus ${number1} kvadratas lygus ${square(number1)}<hr>`)
} else WrI();
if (CheckInput([numberA1,numberB1])) {
    document.write(`${numberA1} + ${numberB1} = ${summ(numberA1,numberB1)}<hr>`);
} else WrI();
if (CheckInput([numberA2,numberB2,numberC2])) {
    document.write(`(${numberB2} - ${numberA2}) / ${numberC2} = ${calculate(numberA2,numberB2,numberC2).toFixed(4)}<hr>`);
} else WrI();
if (CheckInput([week_day_number])) {
    document.write(`${week_day_number} - ${wday(week_day_number)}<hr>`);
} else WrI();







