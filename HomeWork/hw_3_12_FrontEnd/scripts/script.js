// --- 1 ---
document.getElementById("warn_btn").addEventListener('click',warning1);

function warning1 (){
    alert('Hello world!');
}

// --- 2 ---

const text_input1 = document.getElementById("text_input_1");

document.getElementById("btn_tuc").addEventListener('click',function () {
    text_input1.value = text_input1.value.toUpperCase();
});
document.getElementById("btn_tlc").addEventListener('click',function () {
    text_input1.value = text_input1.value.toLowerCase();
});
document.getElementById("btn_fuc").addEventListener('click',function(){
    text_input1.value = FirstUpperCaseF(text_input1.value);
});
document.getElementById("btn_flc").addEventListener('click', function(){
    text_input1.value = FirstLowerCaseF(text_input1.value);
});

function FirstUpperCaseF (value){
    value = value.toLowerCase();
    return value.charAt(0).toUpperCase()+value.slice(1);
};

function FirstLowerCaseF (value){
    value = value.toUpperCase();
    return value.charAt(0).toLowerCase()+value.slice(1);
}

// --- 3 ---

let Regex_Email = new RegExp("(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\\])");
let Regex_Phone = new RegExp("^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\\s\\./0-9]*$");

document.getElementById("btn_save").addEventListener('click',CheckInputsF);

function CheckInputsF() {
    let Email_Input = document.getElementById("InputEmail").value;
    let Phone_Input = document.getElementById("InputPhoneNumber").value;

    let IsEmail = Regex_Email.test(Email_Input);
    let IsPhone = Regex_Phone.test(Phone_Input);

    if (!IsEmail){
        document.getElementById("checkEmail").classList.remove('d-none');
        document.getElementById("InputEmail").classList.add('border-danger');
    } else {
        document.getElementById("checkEmail").classList.add('d-none');
        document.getElementById("InputEmail").classList.remove('border-danger');
    }
    if (!IsPhone){
        document.getElementById("checkPhone").classList.remove('d-none');
        document.getElementById("InputPhoneNumber").classList.add('border-danger');
    } else {
        document.getElementById("checkPhone").classList.add('d-none');
        document.getElementById("InputPhoneNumber").classList.remove('border-danger');
    }
    if(IsEmail && IsPhone){alert("Duomenys teisingi.")}

}

// --- 4 ---

document.getElementById("btn_block").addEventListener("click", BlockF);
document.getElementById("btn_unblock").addEventListener("click", UnBlockF);

function BlockF(){
    document.getElementById("Input4").setAttribute("disabled", true);
}

function UnBlockF(){
    document.getElementById("Input4").removeAttribute("disabled");
}

// --- 5 ---

document.getElementById("monkey").addEventListener("mouseover", Monkey2);
document.getElementById("monkey").addEventListener("mouseleave", Monkey1);

function Monkey2 (){
    document.getElementById("monkey").src = "img/PLDVxza.jpg";
}

function Monkey1 (){
    document.getElementById("monkey").src = "img/0DElr0H.jpg";
}

// --- 6 ---

document.getElementById("reset_btn").addEventListener("click", ResetF);

document.getElementById("s_crosshair").addEventListener("click", crosshairF);
document.getElementById("s_help").addEventListener("click", helpF);
document.getElementById("s_wait").addEventListener("click", waitF);


document.getElementById("s_red").addEventListener("click", RedF);
document.getElementById("s_green").addEventListener("click", GreenF);
document.getElementById("s_blue").addEventListener("click", Blue);


document.getElementById("s_solid").addEventListener("click", SolidF);
document.getElementById("s_dashed").addEventListener("click", DashedF);
document.getElementById("s_double").addEventListener("click", DoubleF);




function crosshairF(){
    document.getElementById("mod_text").style.cursor = 'crosshair';
}
function helpF(){
    document.getElementById("mod_text").style.cursor = 'help';
}
function waitF(){
    document.getElementById("mod_text").style.cursor = 'wait';
}

function RedF(){
    document.getElementById("mod_text").style.color = 'red';
}
function GreenF(){
    document.getElementById("mod_text").style.color = 'green';
}
function Blue(){
    document.getElementById("mod_text").style.color = 'blue';
}

function SolidF(){
    document.getElementById("mod_text").style.borderStyle = 'solid';
    document.getElementById("mod_text").style.borderWidth = '1px';
}
function DashedF(){
    document.getElementById("mod_text").style.borderStyle = 'dashed';
    document.getElementById("mod_text").style.borderWidth = '1px';
}
function DoubleF(){
    document.getElementById("mod_text").style.borderStyle = 'double';
    document.getElementById("mod_text").style.borderWidth = '3px';
}




function ResetF(){
    // document.getElementById("mod_text").style.cursor = 'default';
    document.getElementById("mod_text").style.removeProperty('cursor')
    document.getElementById("mod_text").style.removeProperty('color')
    document.getElementById("mod_text").style.removeProperty('border-style')
    document.getElementById("mod_text").style.removeProperty('border-width')
}

//--- modal ---


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("modal_btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}