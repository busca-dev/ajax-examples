<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Ajax cross browser</title>
	</head>
	<body>

		<form>
			<input type="text" id="nome">
			<input type="submit" value="Enviar" onclick="function()">
		</form>

		<script type="text/javascript">

			if (window.XMLHttpRequest) { //Verifica se o navegador suporta a versão atual do Ajax

				xmlhttp = new XMLHttpRequest(); //Suporte para E7+, Mozilla, Safari, Chrome
				xmlhttp.overrideMimeType("text/xml"); //Ultrapassa as limitacoes de algumas versoes do mozilla estendento o suporte

				xmlhttp.onreadystatechange = function() {
					var nome = document.getElementById("nome").value;
					xmlhttp.open("GET", "recebe.php?nome="+nome, true);
				};

			} else if (window.ActiveXObject) { //Verifica se o navegador suporta a versão antiga do Ajax

				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");//Suporte para  IE5 e IE6
				xmlhttp.onreadystatechange = function() { };

			} else {

				console.log("O Navegador nao suporta ajax, chorou lek");

			}

			if (xmlhttp.readyState == 4) {

				if (xmlhttp.status == 200) { }

				}else{ 
			}

		</script>
	</body>
</html>