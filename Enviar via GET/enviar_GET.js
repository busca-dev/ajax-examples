xmlhttp.onreadystatechange = function() {

	var nome = document.getElementById("nome").value;

	xmlhttp.open("GET", "recebe.php?nome="+nome, true);
	xmlhttp.send();

};

xmlhttp.onreadystatechange = function() {

	var nome = document.getElementById("nome").value;
	var nome = document.getElementById("email").value;

	xmlhttp.open("GET", "recebe.php?nome="+nome+"&email="+email  , true);
	xmlhttp.send();

};