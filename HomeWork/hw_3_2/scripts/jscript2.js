document.write(`ANTRA DALIS...<hr>`);
// Masyvu funkcijos
// Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos.
let arrb1 = [1,2,3];
let arrb2 = [4,5,6];
merged1 = arrb1.concat(arrb2);
console.log(merged1);

// Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1.
let arrb3 = [1,2,3];
arrb3.reverse();
console.log(arrb3);

// Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.
let arrb4 = [1,2,3];
arrb4.unshift(-1,-2,-3);
arrb4.push(4,5,6);
console.log(arrb4);

// Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.
let arrb5 = ['html','css','js'];
console.log(`Pirmas: ${arrb5[0]}, paskutinis: ${arrb5[arrb5.length-1]}`);

// Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.
let arrb6 = [3,4,1,2,7];
arrb6.sort();
console.log(arrb6);

// Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.
let arrb7 = [1,2,3,4,5];
arrb7=arrb7.slice(0,3);
console.log(arrb7);
console.log('----');

// Duotas masyvas [1, 2, 3, 4, 5]. Konvertuokite masyvą į [1, 4, 5].
let arrb8 = [1,2,3,4,5];
console.log(arrb8);
arrb8 = arrb8.slice(3,5);
console.log(arrb8);
arrb8.unshift(1);
console.log(arrb8);

// For ir While
// Atspausdinkite skaičių stulpelį nuo 1 iki 100.
for (i=1;i<=100;i++){
    document.write(`${i}<br>`);
}
document.write(`<hr>`);

// Atspausdinkite skaičių stulpelį nuo 11 iki 33.
for (i=11;i<=33;i++){
    document.write(`${i}<br>`);
}
document.write(`<hr>`);

// Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100.
for (i=2;i<=100;i=i+2){
    document.write(`${i}<br>`);
}
document.write(`<hr>`);

// Naudodami ciklą parodykite sumą nuo 1 iki 100.
let sum = 0;
for (i=1;i<=100;i++){
    sum = sum + i;
}
document.write(`Suma nuo 1 iki 100: ${sum}`);
document.write(`<hr>`);

// For ir masyvai
// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane.
let arrb9 = [1,2,3,4,5];
for (i=0;i<=arrb9.length-1;i++){
    document.write(`${i} elementas = ${arrb9[i]}<br> `);
}
document.write(`<hr>`);

// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą.
let arrb10 = [1,2,3,4,5];
sum=0;
for (i=0;i<=arrb10.length-1;i++){
    sum = sum + arrb10[i];
}
document.write(`Masyvo elementų suma: ${sum}<hr>`);

// for-in
// Duotas objektas green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus.
let arrb11 = {
    green: 'žalia',
    red: 'raudona',
    blue: 'mėlyna'
}
var n;
for (n in arrb11){
    document.write(`${n} -> [${arrb11[n]}]<br>`);
}
document.write(`<hr>`);

// Duotas objektas su raktais Mantas, Paulius, Mindaugas su reikšmėm 200, 300, 300.
// Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.
let arrb12 = {
    Mantas:200,
    Paulius:300,
    Mindaugas:300
};
var n;
for (n in arrb12){
    document.write(`${n} - ${arrb12[n]} EUR atlyginimas<br>`);
}
document.write(`<hr>`);

// Duotas masyvas su elementais 2, 5, 9, 15, 0, 4.
// Naudodami for ir if parodykite masyvo elementus kurie yra daugiau nei 3, bet mažiau nei 10
let arrb13 = [2,5,9,15,0,4];
document.write(`Masyvas: ${arrb13.join()}<br>`);
result = 'Daugiau nei 3 ir mažiau nei 10 yra masyvo elementai:  ';
for (i=0;i<=arrb13.length-1;i++){
    if (arrb13[i]>3 && arrb13[i]<10){result = result + `${i}, `}
}
result = result.substr(0,result.length-2);//pašalinamas paskutinis kablelis :)
document.write(`${result}<hr>`);

// Duotas masyvas su skaičiais. Skaičiai gali būti teigiami ir neigiami. Raskite teigiamų masyvo skaičių sumą.
let arrb14 = [1,-5,6,-8,-9,25,36,24,-5];
document.write(`Masyvas: ${arrb14.join()}<br>`);
sum = 0;
for (i=0;i<=arrb14.length-1;i++){
    if (arrb14[i]>0){sum = sum + arrb14[i]}
}
document.write(`Teigiamų skaičių suma: ${sum}<hr>`);

// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus šio masyvo elementus pasinaudoję ciklais for, while
let arrb15 = [1,2,3,4,5];
document.write(`For ciklas: /`);
for (i=0;i<=arrb15.length-1;i++){
    document.write(` ${arrb15[i]} /`);
}
document.write(`<br>`);
i = 0;
document.write(`While ciklas: /`);
while (i<=arrb15.length-1){
    document.write(` ${arrb15[i]} /`);
    i++;
}
document.write(`<hr>`);

// Duotas masyvas su elementais [2, 3, 4, 5]. Parodykite šio masyvo elementų produktą (daugyba), naudokite for ciklą.
let arrb16 = [2,3,4,5];
multi=arrb16[0];
for (i=1;i<=arrb16.length-1;i++){
    multi = multi * arrb16[i];
}
document.write(`Masyvo elementų sandauga: ${multi}<hr>`);

// Duotas objektas su raktais Vilnius, Riga, Talinas ir reikšmėm Lietuva, Latvija, Estija.
// Parodykite eilutes tokiu formatu: Vilnius yra Lietuva naudodami for-in ciklą;
let arrb17 = {
    Vilnius: 'Lietuva',
    Riga: 'Latvija',
    Talinas: 'Estija'
}
for (n in arrb17){
    document.write(`${n} yra ${arrb17[n]}<br>`);
}
document.write(`<hr>`);

let arrClass = [1,2,3,4,5,6,7,8];
let arrClassRev = [1];
for (i=0;i<arrClass.length;i++){
    arrClassRev[i]=arrClass[arrClass.length-1-i];
};
console.log(arrClass);
console.log(arrClassRev);

let arrClass = [1,2,3,4,5,6,7,8];
buff = arrClass[0];
for (i=0;i<arrClass.length;i++){

};
console.log(arrClass);
console.log(arrClassRev);
