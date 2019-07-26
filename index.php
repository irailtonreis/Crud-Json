<?php
include("header.php");
require_once("functions.php");


// Capturando os dados do Formulário
if ($_REQUEST) {
	$nome = $_REQUEST["nome"];
	$sobrenome = $_REQUEST["sobrenome"];
	$email = $_REQUEST["email"];
	$senha = $_REQUEST["senha"];
	$telefone = $_REQUEST["telefone"];
	$celular = $_REQUEST["celular"];
	$tipo = $_REQUEST["tipo"];
	$logradouro = $_REQUEST["logradouro"];
	$numero = $_REQUEST["numero"];
	$complemento = $_REQUEST["complemento"];
	$bairro = $_REQUEST["bairro"];
	$cep = $_REQUEST["cep"];
	$cidade = $_REQUEST["cidade"];
	$uf = $_REQUEST["uf"];
	$pais = $_REQUEST["pais"];
	$profissao = $_REQUEST["profissao"];

// Criando um Array associativo para inserir no Json 
	$novoAluno = [
		"nome" => $nome,
		"sobrenome" => $sobrenome,
		"email" => $email,
		"senha" => $senha,
		"telefone" => $telefone,
		"celular" => $celular,
		"tipo" => $tipo,
		"logradouro" => $logradouro,
		"numero" => $numero,
		"complemento" => $complemento,
		"bairro" => $bairro,
		"cep" => $cep,
		"cidade" => $cidade,
		"uf" => $uf,
		"pais" => $pais,
		"profissao" => $profissao
	];

	// Chamando a Função que vai inserir no arquivo Json 
	$alunoRegistrado = cadastrarAluno($novoAluno);

}

?>


<body>
	<article>
		<!-- Retornar mensagen de cadastro realizado-->
		<?php global $alunoRegistrado; if($alunoRegistrado == true):?>
		<div class="col-12 alert alert-success m-auto" role="alert">
			<h2>Cadastro realizado com sucesso</h2>
		</div>
		<?php endif; ?>
		<form action="index.php" method="post" enctype="multipart/form-data">
			<h4>Formulário de Cadastro de Aluno</h4>
			<small>Preencha todos os campos corretamente. O 'x' vermelho só sumirá quando o campo for preenchido corretamente.</small>
			<p class="alerta"><span class="htmlEntities">&#9763;</span> Atenção: esses dados ficarão salvos no servidor, então NÃO INSIRA DADOS REAIS!</p>
			<div>
				<label for="inputNome">Nome</label>
				<input autocomplete="off" type="text" name="nome" id="inputNome" placeholder="Fulano" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputSobrenome">Sobrenome</label>
				<input autocomplete="off" type="text" name="sobrenome" id="inputSobrenome" placeholder="de Tal" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputEmail">email</label>
				<input autocomplete="off" type="email" name="email" id="inputEmail" placeholder="conta@domínio.com" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputSenha">Senha</label>
				<input autocomplete="off" type="password" name="senha" id="inputSenha" required minlength="8" maxlength="8" placeholder="Senha com 8 dígitos">
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputAvatar">Avatar</label>
				<input autocomplete="off" type="file" name="avatar" id="inputAvatar" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputTelefone">Telefone</label>
				<input autocomplete="off" type="tel" name="telefone" id="inputTelefone" pattern="\+[0-9]{2} [0-9]{2} [0-9]{8}" placeholder="+55 11 12345678" value="+55 11 " maxlength="15" minlength="15" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputCelular">Celular</label>
				<input autocomplete="off" type="tel" name="celular" id="inputCelular" pattern="\+[0-9]{2} [0-9]{2} [0-9]{9}" placeholder="+55 11 123456789" value="+55 11 " maxlength="16" minlength="16" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputTipo">Tipo</label>
				<input autocomplete="off" type="text" name="tipo" id="inputTipo" placeholder="Rua, Avenida, Travessa..." required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputLogradouro">Logradouro</label>
				<input autocomplete="off" type="text" name="logradouro" id="inputLogradouro" placeholder="Nossa Senhora do Ó" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputNumero">Número</label>
				<input autocomplete="off" type="text" name="numero" id="inputNumero" placeholder="123-A" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputComplemento">Complemento</label>
				<input autocomplete="off" type="text" name="complemento" id="inputComplemento" placeholder="Apto. 987" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputBairro">Bairro</label>
				<input autocomplete="off" type="text" name="bairro" id="inputBairro" placeholder="Centro" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputCep">CEP</label>
				<input autocomplete="off" type="text" name="cep" id="inputCep" pattern="[0-9]{5}-[0-9]{3}" placeholder="12345-678" maxlength="9" minlength="9" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputCidade">Cidade</label>
				<input autocomplete="off" type="text" name="cidade" id="inputCidade" placeholder="São Paulo" value="São Paulo" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputUF">UF</label>
				<input autocomplete="off" type="text" name="uf" id="inputUF" placeholder="SP" value="SP" maxlength="2" minlength="2" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputPais">País</label>
				<input autocomplete="off" type="text" name="pais" id="inputPais" placeholder="Brasil" value="Brasil" required>
				<span class="validity"></span>
			</div>
			<div>
				<label for="inputProfissao">Profissão</label>
				<input autocomplete="off" type="text" name="profissao" id="inputProfissao" placeholder="Desenvolvedor Full Stak" required>
				<span class="validity"></span>
			</div>
			<input class="enviar" type="submit" name="cadastrar">
		</form>
	</article>
<script src="script.js"></script>
</body>

</html>