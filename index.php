<?php

$url =  explode ('?',$_SERVER['REQUEST_URI']);


include'telas/head.php';
include'acoes.php';
match($url[0]){
    '/'=> inicio(),
    '/login'=> login(),
    '/cadastro'=> cadastro(),
    '/listar'=> listar(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    default => erro404(),
};

include'telas/footer.php';