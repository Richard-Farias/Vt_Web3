
/*
Função criada em um ficheiro externo que mostra uma
mensagem */

function iniciar(){

	document.querySelector("#botao").onclick = alertar;
}


function alertar(){

	alert("AIA");
}	

window.onload = iniciar;