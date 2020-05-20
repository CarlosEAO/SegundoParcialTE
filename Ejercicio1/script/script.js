


function validate(){

    var submitButton = document.getElementById("submit");
    var nameInput = document.getElementById("nombreTitular");
    var lastnameInput = document.getElementById("apellidosTitular");
    var ageInput = document.getElementById("edad");
    var cuentaInput = document.getElementById("cuentaCatastral");
    var domicilioInput = document.getElementById("domicilio");
    
    //VALIDACIÓN NUM CUENTA

    if(!/^\d+$/.test(cuentaInput.value) || String(cuentaInput.value).length<8 ||String(cuentaInput.value).length>12 ){
        
        alert("El numero de cuenta solo puede contener dígitos del 0 al 9 y debe tener una longitud de entre 8 y 12");
        return false;

    }

    if(!/^[ a-zA-Z]+$/.test(nameInput.value) || !/^[ a-zA-Z]+$/.test(lastnameInput.value)){
        alert("El nombre y apellidos solo pueden contener letras");
        return false;
    }

    if(!Number.isInteger(Number(ageInput.value))){
        alert("La edad debe ser un número entero");
        return false;
    }



    return true;
}
window.onload = function (){
}