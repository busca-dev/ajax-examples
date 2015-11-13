<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>ajax</title>
</head>
	<body>

		<div id="resposta"></div>

		<form name="form_teste" action="">
			<input type="text" id="nome">
			<input type="button" onclick="enviar()" value="enviar">
		</form>

		<script type="text/javascript">
			
		function enviar () {
			
			var xmlhttp;

			if(window.XMLHttpRequest) {

				xmlhttp = new XMLHttpRequest ();

			} else {

				xmlhttp = new ActiveXObject ("Microsoft.XMLHTTP");

			}

			xmlhttp.onreadystatechange = function() {

				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById ("resposta").innerHTML = xmlhttp.responseText;
				}

			};

			var nome = document.getElementById ("nome").value;

			xmlhttp.open("GET","funcoes.php?nome="+nome, true);
			xmlhttp.send(); 

			document.form_teste.reset();

		};

		</script>
	</body>
</html>