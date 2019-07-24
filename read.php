<?php
include("header.php");
require_once("functions.php");


    $exibirAluno =  listarAlunos($meuJsonArray);
	if($_REQUEST && $_REQUEST["nomeBuscado"] != null){
	listarAluno($meuJsonArray, $_REQUEST["nomeBuscado"]);
}


?>
<section id="creat">
    <form id="formBuscarAluno" action="read.php" method="post" enctype="multipart/form-date">
        <label for="inputNomeBuscado">Insira o nome do aluno que está buscando</label>
        <input type="text" name="nomeBuscado" id="inputNomeBuscado">
        <input type="submit" name="buscarAluno" class="enviar" value="Buscar">
    </form>
    <pre id="resultadoBuscarAluno">
    </pre>
</section>

<script src="script.js"></script>