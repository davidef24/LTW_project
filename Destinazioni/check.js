

function validAge(){
    var e= document.getElementsByName("fascia_età")[0];
    if(e.value == ""){
        alert("Inserire un valore per il campo fascia d'età");
        return false;
    }
    return true;
}

function validPeriod(){
    var e= document.getElementsByName("periodo")[0];
    if(e.value == ""){
        alert("Inserire un valore per il campo periodo");
        return false;
    }
    return true;
}

function validDurata(){
    var e= document.getElementsByName("durata")[0];
    if(e.value == ""){
        alert("Inserire un valore per il campo durata");
        return false;
    }
    return true;
}

function check_dest(){
    if (validAge() && validPeriod() && validDurata()) return true;
    return false;
}