var mdp = document.getElementById("mdp").value;
var cmdp = document.getElementById("Cmdp").value;
function verifPassword() {
    if (mdp != cmdp) {
        console.log("Les mots de passe ne correspondent pas");
    }
    else {
        console.log("Les mots de passe correspondent");
    }
}