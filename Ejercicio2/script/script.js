

function validate(){

    var nameInput = document.getElementById("name");
    var lastnameInput = document.getElementById("lastname");
    var gradeInput = document.getElementById("grade");
    var groupInput = document.getElementById("group");
    var grade1Input = document.getElementById("grade1");
    var grade2Input = document.getElementById("grade2");
    var grade3Input = document.getElementById("grade3");
    var grade4Input = document.getElementById("grade4");
    var grade5Input = document.getElementById("grade5");

    
    
    if(!/^[ a-zA-Z]+$/.test(nameInput.value) || !/^[ a-zA-Z]+$/.test(lastnameInput.value)){
        alert("El nombre y apellidos solo pueden contener letras");
        return false;
    }

    if(Number.isNaN(Number(grade1Input.value)) ||Number.isNaN(Number(grade2Input.value))||Number.isNaN(Number(grade3Input.value))||Number.isNaN(Number(grade4Input.value))||Number.isNaN(Number(grade5Input.value)) ){
        alert("Las calificaciones deben ser números");
        return false;
    }

    if(nameInput.value=="" || lastnameInput.value=="" || gradeInput.value=="" || groupInput.value=="" || grade1Input.value=="" || grade2Input.value=="" || grade3Input.value=="" || grade4Input.value=="" || grade5Input.value==""){
        alert("Todos los campos deben estar llenados");
        return false;
    }


    return true;
}
window.onload = function (){
}