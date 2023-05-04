function validNameSurname(){
    if (document.getElementById("nome").value=="" || document.getElementById("cognome").value==""){
        alert("Inserire nome e cognome");
        return false;
    }
    if (document.getElementById("nome").value.match(/^[a-zA-Z]+$/) && document.getElementById("cognome").value.match(/^[a-zA-Z]+$/)) return true;
    else{
        alert("Nome e congome non validi");
        return false;
    }
}
function validBirthDate(){
    var today=new Date();
    var date=document.getElementById("nascita").value;
    if (date==""){
        alert("Inserire data di nascita");
        return false;
    }
    var spl=date.split('-');
    var day=parseInt(spl[2]), month=parseInt(spl[1]), year=parseInt(spl[0]);
    if (year>2005 || (year==2005 && month<6)){
        alert("Devi essere maggiorenne per usare i vari servizi");
        return false;
    }
    else return true;
}
function emailToRegister(){
    if (document.getElementById("email").value==""){
        alert("Inserire email");
        return false;
    }
    else{
        if (document.getElementById("email").value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) return true;
        else{
            alert("Email invalida");
            return false;
        }
    }
}
function validTelephone(){
    if (document.getElementById("telefono").value=""){
        alert("Inserire numero di cellulare");
        return false;
    }
    if (document.getElementById("telefono").value.match(/^(+?\d{1,3}[- ]?)?\d{9,12}$/)) return true;
    else return false;
}
function comparePws(){
    var p1=document.getElementById("password1").value;
    var p2=document.getElementById("password2").value;
    if (p1=="" || p2==""){
        alert("Inserire password");
        return false;
    }
    if (p1!=p2){
        alert("Le password inserite sono diverse");
        return false;
    }
    return true;
}
function check_lr(){
    if (!validNameSurname() || !validBirthDate() || !emailToRegister() || validTelephone() || !comparePws()) return false;
    return true;
}