function emailIsEmpty(){
    if (document.login.email.value==""){
        alert("Inserire email");
        return true;
    }
    return false;
}
function emailToRegister(){
    if (document.registrazione.email.value==""){
        alert("Inserire email");
        return false;
    }
    else{
        if (document.registrazione.email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) return true;
        else{
            alert("Email invalida");
            return false;
        }
    }
}
function comparePws(){
    var p1=document.registrazione.password1.value;
    var p2=document.registrazione.password2.value;
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
    if (!emailToRegister() || !comparePws() || emailIsEmpty()) return false;
    return true;
}