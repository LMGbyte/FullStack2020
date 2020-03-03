document.write(`PIRMA DALIS...<hr>`);
// Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.
let arr1 = ["a","b","c"];
console.log(arr1);
//     Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.
console.log(arr1[0]);
console.log(arr1[1]);
console.log(arr1[2]);
//     Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.
let arr2 = ["a","b","c","d"];
document.write(`${arr2[0]} + ${arr2[1]} <br>`) ;
document.write(`${arr2[2]} + ${arr2[3]} <br>`) ;
document.write(`<hr>`);
//     Sukurkite masyvą su elementais 2, 5, 3, 9.
//     Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo.
//     Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.
let arr3 = [2,5,3,9];
let result1 = arr3[0]*arr3[1]+arr3[2]*arr3[3];
document.write(`2 * 5 + 3 * 9 =  ${result1} <hr>`);
// Objektai (asociaciniai masyvai)
// Sukurkite objektą a = 1, b = 2, c = 3. Parodykite elemento c reikšmę dviem būdais: per skliaustelius ir kaip objekto savybę.
let arr4 = {
    a: 1,
    b: 2,
    c: 3
}
document.write(`Skliausteliu: ${arr4["c"]} <br>`);
document.write(`Objekto savybė: ${arr4.c} <hr>`);
//     Sukurkite objektą su savaitės dienomis.
//     Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios (pirmadienis - pirmasis ir t.t.).
//     Parodykite dabartinę savaitės dieną.
let weekD = {
    1: "pirmadienis",
    2: "antradienis",
    3: "trečiadienis",
    4: "ketvirtadienis",
    5: "penktadienis",
    6: "šeštadienis",
    7: "sekmadienis"
};
let day = new Date();
day = day.getDay();
if (day==0){day = 7}; //Čia todėl, kad funkcija getDay sekmadieniui priskiria 0, o mūsų masyve sekmadienį atitinka 7
document.write(`Šiandien yra ${weekD[day]} <br>`);
//     Sukurkite kintamjį day kuriame saugomas savaitės dienos numeris.
//     Atspausdinkite savaitės dieną naudojant sita kintamajį.
let dayManual = 1;
document.write(`${dayManual} -> `)
if (dayManual>=1 && dayManual<=7){
    document.write(`${weekD[dayManual]} <hr>`);
} else document.write(`Tokios savaitės dienos nėra.<hr>`);
//     Daugialypiai masyvai
// Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.
let arr5 =[[1,2,3],[4,5,6],[7,8,9]];
document.write(arr5[1][0]);
document.write(`<hr>`);
//     Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. Parodykite žodį jQuery.
let arr6 = {
    js: ['jQuery', 'Angular'],
    php: 'Hello',
    css: 'world'
}
document.write(`${arr6.js[0]}<hr>`);
//     Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en.
//     Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai.
//     Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
let week_D2 = {
    lt: ['sekmadienis','pirmadienis','antradienis','trečiadienis','ketvirtadienis','penktadienis','šeštadienis','sekmadienis'],
    en: ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday']
}; //nuliniame elemente patalpinau sekmadienį, kad masyvas būtų pilnai užpildytas ir likusieji masyvo raktai sutaptų su savaitės dienomis
document.write(`${week_D2.lt[1]}<br>${week_D2.en[3]}<hr>`);
//     Sukurkite kintamjį lang (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną (edited)
let lang = 'lt';
day = 7;
//tolimesnės sąlygos yra tam kad iš masyvo būtų ištrauktas sekmadienis priskyrus dienai numerį 7
if((lang == 'lt' || lang == 'en')&&(day>=1 && day<=7)){
    if (day == 7) {day = 0};
    document.write(week_D2[lang][day]);
}
document.write(`<hr>`);