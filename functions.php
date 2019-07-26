<?php
// Introdução - Capturando o Json
$meuArquivoJson = 'alunos.json';
$meuJson = file_get_contents($meuArquivoJson);
$meuJsonArray = json_decode($meuJson, true);
// Criando o registro no json
function cadastrarAluno($novoAluno){
    global $meuArquivoJson;
    global $meuJsonArray;
    array_push($meuJsonArray["alunos"], $novoAluno);
    $jsonAlunos = json_encode($meuJsonArray);
    $alunoRegistrado = file_put_contents($meuArquivoJson, $jsonAlunos);

    return $alunoRegistrado;
    
}


function listarAlunos($meuJsonArray){
    echo "<h3>Lista de Alunos Cadastrados</h3><ul>";
    foreach($meuJsonArray["alunos"] as $registroDoAluno){
        echo "<li>".$registroDoAluno["nome"];
        echo "<ul style='display:none' class='detalhesAlunos'>";
        foreach($registroDoAluno as $key => $value){
        echo $key. ": " .$value. "<br>";
        }
        echo "</ul>";
        echo "<button class='btnInfo'>Info</button></li>";
    }
    echo "</ul>";
}

function listarAluno($meuJasonArray, $nomeBuscado){ 
global $meuJsonArray;
$encontrou = false;
foreach ($meuJsonArray["alunos"] as $registroDoAluno) {
if($registroDoAluno["nome"] == $nomeBuscado){
$encontrou = true;
echo "<h3>Dados do aluno ".$nomeBuscado."</h3><ul>";
foreach ($registroDoAluno as $key => $value) {
if($key != "senha"){
echo "<li>".$key.": ".$value."</li>";
}
}
echo "</ul>";
}
}
if($encontrou == false):
echo "<p>Ops... Não há alunos com o nome <b>".$nomeBuscado."</b>...</p>";
endif;
$nomeBuscado = "";
}

?>

<script src="script.js"></script>





