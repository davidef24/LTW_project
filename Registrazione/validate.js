function nameIsValid(){
    if (document.getElementById("nome").value==""){
        invalidName();
        return false;
    }
    else validName();
    if (!document.getElementById("nome").value.match(/^[a-zA-Z]+$/)){
        invalidName();
        return false;
    }
    validName();
    return true;
}
function surnameIsValid(){
    if (document.getElementById("cognome").value==""){
        invalidSurname();
        return false;
    }
    else validSurname();
    if (!document.getElementById("cognome").value.match(/^[a-zA-Z]+$/)){
        invalidSurname();
        return false;
    }
    validSurname();
    return true;
}
function validBirthDate(){
    var date=document.getElementById("nascita").value;
    if (date==""){
        invalidDate();
        return false;
    }
    validDate();
    var spl=date.split('-');
    var day=parseInt(spl[2]), month=parseInt(spl[1]), year=parseInt(spl[0]);
    if (year>2005 || (year==2005 && month >= 6)){
        alert("Devi essere maggiorenne per usare i vari servizi");
        invalidDate();
        return false;
    }
    else{
        validDate();
        return true;
    }
}
function emailToRegister(){
    if (document.getElementById("email").value==""){
        invalidEmail();
        return false;
    }
    else{
        validEmail();
        if (document.getElementById("email").value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) return true;
        else{
            invalidEmail();
            return false;
        }
    }
}
function validTelephone(){
    if (document.getElementById("telefono").value==""){
        invalidTel();
        return false;
    }
    validTel();
    if (document.getElementById("telefono").value.match(/^((\+|00)?39)?3\d{2}\d{6,7}$/)) return true;
    else {
        invalidTel();
        return false;
    }
}
function comparePws(){
    var p1=document.getElementById("password1").value;
    var p2=document.getElementById("password2").value;
    if (p1==""){
        invalidP1();
        return false;
    }
    if (p2==""){
        invalidP2();
        return false;
    }
    if (p1!=p2){
        invalidP1();
        invalidP2();
        return false;
    }
    validP1();
    validP2();
    return true;
}
function check_lr(){
    if (!nameIsValid() || !surnameIsValid() || !validBirthDate() || !emailToRegister() || !validTelephone() || !comparePws()) return false;
    return true;
}