xmlhttp.onreadystatechange = function() {

	var nome = document.getElementById("nome").value;

	xmlhttp.open("POST", "recebe.php", true);

	//Requisito para o metodo POST
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xmlhttp.send("nome="+nome);

};