<?php
session_start(); //attenzione! la sessione va avviata prima di qualunque output!
//compresi spazi vuoti etc
require 'daisyUI.php';

?>
<html>

<head>
	<title>Esempio di login</title>
</head>

<body>
	<?php
	//verifico se è loggato o meno:
	//se non è loggato mostro il form per loggarsi
	//se è già loggato lo saluto
	if (isset($_SESSION["id"])) {
		//pannello di controllo utente
		?>
		<h1>Ciao
			<?php echo $_SESSION["nome"]; ?>
		</h1>
		<p><a href="logout.script.php">Clicca per il logout</a></p>
		<a href="change.php">Cambia password</a>
		<?php
	} else {
		//non è loggato quindi mostro il form
		?>
		<div class='m-3 flex place-content-center align-middle'>

			<form id="login" name="login" method="post" action="login.script.php">


				<input class="input input-bordered w-full m-1" type="text" placeholder="Inserisci username" name="usr"
					required>

				<input class="input input-bordered w-full m-1" type="password" placeholder="Inserisci password" name="pwd"
					required>

				<button class="btn btn-primary w-full m-1" name="submit">Accedi</button>
				<a class="btn btn-secondary m-1 w-full" href="signup.php">Registrati</a>

				<?php
				//comunico anche l'eventuale tentativo errato di login
				if (isset($_SESSION["errore_login"]) && $_SESSION["errore_login"] == true) {
					echo "<p>Nome utente o password errati! Ritenta!</p>";
					unset($_SESSION["errore_login"]);
				}
	}
	?>
		</form>

	</div>
</body>

</html>