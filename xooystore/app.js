let inputs = document.querySelectorAll('input[type="radio:');
let selecteddeli = document.querySelector("selecteddeli");
function chosedeli(event){
    console.log(event.target.value);
    selecteddeli.innerHTML=event.target.value;
}