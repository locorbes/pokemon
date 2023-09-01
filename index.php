<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon finder</title>
	<!--CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<style>
	body {
		display: flex;
		min-height: 100vh;
		flex-direction: column;
	}
	main {
		flex: 1 0 auto;
	}
	</style>
	<!--JS-->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>  
	<script src="js/main.js"></script>       
</head>
<body>
	<main>
		<div class="container">
			<h2 class="red-text text-lighten-2">Pokemon finder</h2>
			<h5>El que quiere Pokemons, que los busque.</h5>
			<br>
			<div class="row">
				<form>
					<div class="input-field col s12">
					  <input id="search_input" type="text" class="validate" placeholder="Ingresar el nombre a buscar (mínimo 4 letras)" style="font-size:24px !important;">
					  <label for="search_input">BUSQUEDA DE POKEMON</label>
					</div>
				</form>
			</div>
			<h4>Resultado de búsqueda</h4>
			<hr>
			<div id="result">
				<div style='margin-top:120px !important;' class='col s12 m12'><div class='center'><img src='img/spinner.gif' height='120px'></div></div>
			</div>
		</div>
	</main>
	<footer class="page-footer">
		<div class="footer-copyright">
			<div class="container">
			© 2023 Copyright Pepito
			<a class="grey-text text-lighten-4 right" href="https://orbescarlos.com.ar/">Link!</a>
			</div>
		</div>
	</footer>
</body>
</html>