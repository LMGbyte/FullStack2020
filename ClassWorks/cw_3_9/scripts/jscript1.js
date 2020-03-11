// function even_sum (items){
//     let sum = 0;
//     for(let i=0;i<items.length;i++){
//         if (items[i]%2 == 0) {sum += items[i]};
//     }
//     return sum;
// }

function sumEvenArr (items){
    let sum = 0;
	for (let element of items) {
	    if (isEven(element)) {sum += element};
    };
	return sum;
};

function isEven (one){
    if (one % 2 == 0){
        return true;
    };
    return false;
};

// let arr = [2,4,5,7,8,12,4,7,-2,2,7];
// console.log(sumEvenArr(arr));
// console.log(isEven(4));

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function toTitleCase(str, delim = ' ') {
    let words = str.split(delim);
    
	for (let i in words) {
        words[i] = capitalizeFirstLetter(words[i]);
    }

	return words.join(' ');

	console.log(words);
}

let name = 'petras petraitis';
name = toTitleCase(name, ',');
console.log(`Hello, ${name}`);
let str = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod';
str = toTitleCase(str, 'c');
console.log(str);