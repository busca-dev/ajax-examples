<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>testes ajax</title>
	</head>
	<body>

		<script type="text/javascript">

			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest(); 
				xmlhttp.overrideMimeType('text/xml'); 
				xmlhttp.onreadystatechange = function() {
				
				};

			} else if (window.ActiveXObject) {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				xmlhttp.onreadystatechange = function() { };

			} else {
				alert("O Navegador nao suporta o ajax T.T");
			}

		</script>
	</body>
</html>