var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "Formget" && password == "formget#123"){
alert ("Login successfully");
window.location = "espace.php"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
if(attempt>0){
	alert("E-mail ou mot de passe incorrect. Il vous reste "+attempt+" essai(s).");
}
// Disabling fields after 3 attempts.
else{
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
alert("E-mail ou mot de passe incorrect. Veuillez nous contacter si vous avez oublié votre mot de passe.");
return false;
}
}
}