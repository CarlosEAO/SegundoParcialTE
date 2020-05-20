

function validate(){

    var nameInput = document.getElementById("name");
    var lastnameInput = document.getElementById("lastname");
    var ageInput = document.getElementById("age");
    var domInput = document.getElementById("dom");
    var contractInput = document.getElementById("contract");
    var zoneInput = document.getElementById("zone");
    var ltInput = document.getElementById("input");

    
    
    if(!/^[a-zA-Z]+$/.test(nameInput.value) || !/^[a-zA-Z]+$/.test(lastnameInput.value)){
        alert("El nombre y apellidos solo pueden contener letras");
        return false;
    }

    if(nameInput.value=="" || lastnameInput.value=="" || ageInput.value=="" || groupInput.value=="" || contractInput.value=="" || zoneInput.value=="" || ltInput.value==""){
        alert("Todos los campos deben estar llenados");
        return false;
    }


    return true;
}
window.onload = function (){
}