<?php
include_once("templates/loginHeader.php");
?>
			<h1 class="h1-center" >Faça seu cadastro no nosso site</h1>
			<div class="container div-login">
					<!-- Input email -->
					<form method="POST" action="process/loginCad.php" class="email-senha">
					<div class="credUser">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
  						<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
						</svg>
							<label for="inputPassword5" class="form-label">Nome Completo:</label>
							<input required type="text" id="inputPassword5" name="nomeC" class="form-control" placeholder="Digite seu nome completo:" aria-describedby="passwordHelpBlock">
						<div class="credEmail">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
  						<path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
  						<path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
						</svg>
						<label for="exampleFormControlInput1" class="form-label">E-mail:</label>
							<input required type="email" class="form-control" name="emailC" id="exampleFormControlInput1" placeholder="Digite seu e-mail:">
						</div>
						<!-- Input Password -->
						<div class="credSenha">
							<!-- Rua -->
                            <label for="inputPassword5" class="form-label">Rua:</label>
							<input required type="text" id="inputPassword5" name="rua" class="form-control" placeholder="Digite sua rua:" aria-describedby="passwordHelpBlock">
							<div id="passwordHelpBlock" class="form-text">
                            <label for="inputPassword5" class="form-label">Número:</label>
							<input required type="number" id="inputPassword5" name="num" class="form-control" placeholder="Digite o número da sua residência:" aria-describedby="passwordHelpBlock">
							<div id="passwordHelpBlock" class="form-text">
                            <label for="inputPassword5" class="form-label">Bairro:</label>
							<input required type="text" id="inputPassword5" name="bairro" class="form-control" placeholder="Digite seu bairro:" aria-describedby="passwordHelpBlock">
							<div id="passwordHelpBlock" class="form-text">
						</div><br>
						<button type="submit" name="type" value="cadastroC" class="btn btn-warning">Cadastrar Cliente</button>
					</form>