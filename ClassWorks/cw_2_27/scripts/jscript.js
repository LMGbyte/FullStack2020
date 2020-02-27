let BaseAmount = prompt('Įveskite bazinį išmokos dydį:');
let WorkingPeople = 1761463;
let Budget = 8487300000;
document.clear();
let Result = (BaseAmount*WorkingPeople*100/Budget).toFixed(2)
document.write(`Bazinė išmoka sudarys ${Result} % metinio Lietuvos biudžeto`);