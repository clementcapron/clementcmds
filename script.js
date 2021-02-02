function bonjour(){
	let prenom = "Clément";
	let end = "!";

	alert('hello ' + prenom + end);
}

function majorite(){
let age = window.prompt("Votre age ?");

	if (age<18){
		alert("Mineur");
	}
	else{
		alert("Majeur");
	}
}
function var1(){
	if (document.forms["contact"]["message"].value=="" || document.forms["contact"]["message"].value==null){
		alert("Le message est vide");
		return false;
	}
	else{
		alert(document.forms["contact"]["message"].value);
	}
}