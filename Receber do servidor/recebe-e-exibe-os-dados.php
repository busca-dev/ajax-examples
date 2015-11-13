<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>ajax</title>
	</head>
	<body>

		<form>
			<input type="text" id="nome">
			<input type="submit" value="Enviar" onclick="function()">
		</form>

		<script type="text/javascript">
			xmlhttp.onreadystatechange = function() {

				if (xmlhttp.readyState == 4) { //verifica o estado do pedido, 4 = completo

					if (xmlhttp.status == 200) { //verifica a resposta do pedido, 200 = ok
						document.getElementById("exemplo").innerHTML=xmlhttp.responseText;
					}
				}

			};
		</script>
	</body>
</html>