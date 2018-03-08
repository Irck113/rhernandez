<!DOCTYPE html>
<html lang = "es">
        <head>
                <meta charset = "utf-8"/>
                <meta name = "viewport" content = "width=device-width"/>
                <link rel = "stylesheet" href = "css/main.css"/>
        </head>

        <body>
		<header>
			<h1>Comentario</h1>
			
		</header>
		<main>
		<p>Instrucciones: Rellene los siguientes campos con los datos solicitados por favor</p>
		<form method = "post" action = "/guarda_comentario.php">
			<legend>Comentario</legend>
			<fieldset>
				<label for = "nombre">Nombre: </label>
				<input name = "nombre" type = "text"/>
				</br>
				<label for = "email">Correo electr&oacute;nico: </label>
                                <input name = "email" type = "text"/>
				</br>
				<label for = "comentario">Comentarios: </label>
                                <textarea name = "comentario"></textarea>
				</br>
				<button>Enviar</button>
			</fieldset>
		</form>
		</br>
		<a href = "index.php">Regresa a la pagina principal</a>
		</main>
		<footer>
                        <a href = "https://www.unam.mx">UNAM</a>
                        <a href = "https://www.fca.unam.mx">FCA</a>
                        <a href = "/creditos.html">Creditos de elaboraci&oacute;n</a>
                </footer>

	</body>
</html>
