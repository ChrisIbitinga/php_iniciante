 <html>
 <head>
 	<meta charset="utf-8">
 	<!--Import Google Icon Font-->
 	<title>1° Projeto PHP | Digital Innovation</title>
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	<!-- Compiled and minified CSS -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 	<!--Let browser know website is optimized for mobile-->
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" href="style.css">
 </head>

 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col s12">
 				<h2>Projeto Competidor de Natação</h2>
 				<blockquote>
 					Formulário para entrada dos Dados
 				</blockquote>
 			</div>
 			<form action="script.php" method="post">
 				<div class="input-field col s12 m6">
 					<input placeholder="Ex: Dino da Silva Sauro" id="nome" name="nome" type="text" class="validate">
 					<label for="nome">Digite o nome</label>
 				</div>
 				<div class="input-field col s12 m6">
 					<input placeholder="Ex: 18" id="idade" name="idade" type="number" class="validate">
 					<label for="idade">Digite a idade</label>
 				</div>
 				<div class="input-field col s6">
 					<button class="btn btn-large" type="submit">Enviar</button>
 				</div>
 			</form>
 		</div>
 	</div>

 	



 	<!-- Compiled and minified JavaScript -->
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 </body>
 </html>