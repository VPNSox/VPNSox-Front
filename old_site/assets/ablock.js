function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i &lt; ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

// cache le message d'information et place un cookie
function hide(cookietime) {
    // on retient qu'on ne montera pas le message pendant X jours
    createCookie("cool", "true", cookietime);
    // on cache le message
    document.getElementById("soyezcool").style.display = "none";
}

// cas d'un retour de paiement, à paramétrer chez Paypal si vous mettez un bouton de don
// place le cookie, le mec a fait un don
if (location.hash === "#payed" && readCookie(cookiename) !== "true") {
    hide(356); // on laisse le visiteur 1 an tranquile
}

// Bon le visiteur là, il a déjà payé ou demandé de cacher le message, on
// cache le message par défaut
if (readCookie(cookiename) === "true") {
    document.getElementById(divid).style.display = "none";
}
