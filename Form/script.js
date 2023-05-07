//controlli su modulo contatti
function validSurname(){
    if (document.modulo_contatti.cognome.value==""){
        alert("Inserire cognome");
        return false;
    }
    else{
        for (var i=0; i<document.modulo_contatti.cognome.value.length; i++){
            if (!isNaN(document.modulo_contatti.cognome.value.charAt(i))){
                alert("Cognome invalido");
                return false;
            }
        }
    }
    return true;
}
function validName(){
    if (document.modulo_contatti.nome.value==""){
        alert("Inserire nome");
        return false;
    }
    else{
        for (var i=0; i<document.modulo_contatti.nome.value.length; i++){
            if (!isNaN(document.modulo_contatti.nome.value.charAt(i))){
                alert("Nome invalido");
                return false;
            }
        }
    }
    return true;
}
function validEmail(){
    if (document.modulo_contatti.email.value==""){
        alert("Inserire email");
        return false;
    }
    else{
        if (document.modulo_contatti.email.value.match(/@/)) return true;
        else{
            alert("Email invalida");
            return false;
        }
    }
}
function validTelephone(){
    if (document.modulo_contatti.telefono.value==""){
        alert("Inserire numero di telefono");
        return false;
    }
    var re=/(\d{10})$/;
    if (re.test(document.modulo_contatti.telefono.value)) return true;
    else{
        alert("Numero di telefono invalido");
        return false;
    }
}
function validRequest(){
    if (document.modulo_contatti.tipo_richiesta.value==""){
        alert("Inserire il tipo di richiesta");
        return false;
    }
    return true;
}
function check_mc(){
    if (validSurname() && validName() && validEmail() && validTelephone() && validRequest()) return true;
    return false;
}

// controlli su login/registrazione
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
        if (document.registrazione.email.value.match(/@/)) return true;
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
function validBirthDate(){
    var today=new Date();
    var date=document.registrazione.nascita.value;
    if (date==""){
        alert("Inserire data di nascita");
        return false;
    }
    var spl=date.split('-');
    var day=parseInt(spl[2]), month=parseInt(spl[1]), year=parseInt(spl[0]);
    var selected=new Date(year, month, day);
    if (selected>today){
        alert("Hanno inventato le macchine del tempo?");
        return false;
    }
    else return true;
}
function check_lr(mode){
    if (mode=="login"){
        if (emailIsEmpty()) return false;
    }
    else{
        if (!validBirthDate() || !emailToRegister() || !comparePws()) return false;
    }
    return true;
}

// controlli su news letter
function EmailIsValid(){
    if (document.news_letter.email.value==""){
        alert("Inserire email");
        return false;
    }
    else{
        if (document.news_letter.email.value.match(/@/)) return true;
        else{
            alert("Email invalida");
            return false;
        }
    }
}
function check_nl(){
    if (EmailIsValid()) return true;
    return false;
}

// controlli su form destinazione
function validRange(){
    if (document.destinazione.fascia_età.value==""){
        alert("Inserire la fascia d'età desiderata");
        return false;
    }
    return true;
}
function validDateTrip(){
    var d1=document.destinazione.andata.value;
    var d2=document.destinazione.ritorno.value;
    if (d1==""){
        alert("Inserire data (andata)");
        return false;
    }
    if (d2==""){
        alert("Inserire data (ritorno)");
        return false;
    }
    var spl1=d1.split('-'), spl2=d2.split('-');
    var day1=parseInt(spl1[2]), day2=parseInt(spl2[2]), month1=parseInt(spl1[1]), month2=parseInt(spl2[1]), year1=parseInt(spl1[0]), year2=parseInt(spl2[0]);
    if (year1<=year2){
        if (month1==month2){
            if (day1<day2) return true;
            else{
                alert("Hey! Non puoi mica viaggiare nel tempo :P");
                return false;
            }
        }
        else if (month1<month2) return true;
        else{
            alert("Hey! Non puoi mica viaggiare nel tempo :P");
            return false;
        }
    }
    else{
        alert("Hey! Non puoi mica viaggiare nel tempo :P");
        return false;
    }
}