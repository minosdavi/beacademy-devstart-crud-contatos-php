<?php

function inicio(){
    include'telas/inicio.php';
}
function listar(){
    $contatos = file('dados/contatos.csv');
    include'telas/listar.php';
}
function login(){
    include'telas/login.php';
}
function cadastro(){
    if($_POST){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $arquivo = fopen('dados/contatos.csv', 'a+');
        fwrite($arquivo, "${nome};${email};${telefone}". PHP_EOL);
        fclose($arquivo);
        echo "Contato cadastrado com sucesso!!";
    }
    

    include'telas/cadastro.php';
}
function erro404(){
    include'telas/404.php';
}

function excluir(){
    $id = $_GET['id'];

    $contatos = file('dados/contatos.csv');
    unset($contatos[$id]);
    unlink('dados/contatos.csv');
    $arquivo = fopen('dados/contatos.csv', 'a+');

    foreach ($contatos as $cadaContato){
        fwrite($arquivo, $cadaContato);  
        fclose($arquivo); 
    }
}

function editar(){
    $id = $_GET['id'];

    $contatos = file('dados/contatos.csv');
    $dados = explode(';', $contatos[$id]);
    if($_POST){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $contatos[$id] = "${nome};${email};${telefone}".PHP_EOL;

        unlink('dados/contatos.csv');

        $arquivo = fopen('dados/contatos.csv', 'a+');
        foreach($contatos as $cadaContato){
            fwrite($arquivo, $cadaContato);
        }
        fclose($arquivo);
        echo "Contato editado com sucesso!!";
    }
    include 'telas/editar.php';
}