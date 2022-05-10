<?php include 'topo.php'; ?>

<?php

// php -S localhost:8000

include 'FormularioClass.php';

$formulario = new Formulario();
$formulario->adicionaTitulo("Formulário de Cadastro");
$formulario->adicionaRota('envia.php');
$formulario->adicionaCampoText("Nome", "nome", "nome", "", "col-md-12");
$formulario->adicionaCampoText("E-mail", "email", "email", "", "col-md-12");
$formulario->adicionaCampoText("Telefone 1", "telefone1", "telefone1", "", "col-md-4");
$formulario->adicionaCampoText("Telefone 2", "telefone2", "telefone2", "", "col-md-4");
$formulario->adicionaCampoText("Celular", "celular", "celular", "", "col-md-4");
$formulario->adicionaCampoSelect("Sexo", "sexo", "sexo", "", "col-md-4",
    $opcoes = [
        ['value' => "M", 'label' => "Masculino"],
        ['value' => "F", 'label' => "Feminino"]
    ]
);
$formulario->adicionaCampoSelectMais("Profissão", "profissao", "profissao", "", "col-md-4",
    $opcoes = [
        ['value' => "1", 'label' => "Corredor"],
        ['value' => "2", 'label' => "Lutador"],
        ['value' => "3", 'label' => "Programador"]
    ]
);
$formulario->adicionaBotaoEnviar("Enviar", "btnEnviar", "btnEnviar", "btn-primary col-md-12");
$formulario->renderiza();


?>

<?php include 'rodape.php'; ?>





