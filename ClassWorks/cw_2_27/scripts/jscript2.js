let u_name = prompt('Įveskite vardą:');
let u_password = prompt('Įveskite slaptažodį:');

if ((u_name=='admin' && u_password=='master')||(u_name!=null && u_password==u_name+11)){
    alert(`Sveiki, ${u_name}`);
}else if (!u_name||!u_password){
    alert(`Viso gero`);
}else {
    alert(`Neteisingas slaptazodis!`);
}