<?php

//Exercício 1
$pessoa = [
    'nome' => 'João',
    'notas' => [
        'matematica' => 5,
        'portugues' => 6,
        'historia' => 7,
        'filosofia' => 10,
        'sociologia' => 9,
        'fisica' => 5,
        'quimica' => 1
    ]
];

     function passarAno($pessoa) {
    
    foreach ($pessoa['notas'] as $disciplina => $nota) {
        if ($nota < 6) {
        }  
            if ($nota >= 3) {
                return "Não passou de ano!";
            }
    }
    return "Passou de ano!";
}
echo passarAno($pessoa);


echo "\n-----------------\n";


//Exercicio 2
$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];

function Media($pessoas){
     $totalidades = 0;
    foreach($pessoas as $pessoa){
    
     $totalidade += $pessoa['idade'];
      
    }
     echo $totalidade/4;
}

echo Media($pessoas);

echo "\n-----------------\n";

//Exercicio 3

$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];

function MaisVelha($pessoas) {
    $MaisVelha = $pessoas[3];
  
        if ($pessoas['idade'] > $MaisVelha['idade']) {
            $MaisVelha = $pessoas;
        }
    
    return $MaisVelha;
}
echo MaisVelha($pessoas)['nome'];


echo "\n---------------\n";


//Exercicio 4

//pesquisei no google e achei o preg_math, ele diz que é usado para realizar funções em uma string, entao eu vi alguns turoriais e usei
//Strlen retorna o tamanho da string, oque é util para essa atividade
$senha = 'SenhaForte123';

function verificarSenha($senha) {
    $temLetraMaiuscula = preg_match('/[A-Z]/', $senha);
    $temLetraMinuscula = preg_match('/[a-z]/', $senha);
    $temNumero = preg_match('/[0-8]/', $senha);
    
    if (strlen($senha) >= 8 && $temLetraMaiuscula && $temLetraMinuscula && $temNumero) {
        return "Senha é forte";
    } else {
        return "Senha é fraca";
    }
}

echo verificarSenha($senha) ? 'senha é forte' : 'senha é fraca';

echo "\n-----------------\n";

//Exercicio 5
function contarPostsPorAutor($posts) {
    $quantidade_posts_por_autor = array();

    foreach ($posts as $post) {
        $autor = $post['autor'];
        
        if (isset($quantidade_posts_por_autor[$autor])) {
            $quantidade_posts_por_autor[$autor]++;
        } else {
            $quantidade_posts_por_autor[$autor] = 1;
        }
    }

    return $quantidade_posts_por_autor;
}

$posts = [
    [
        'post' => 'Estou aprendendo PHP', 
        'autor' => 'João'
    ],
    [
        'post' => 'Aprendi HTML, CSS e JavaScript', 
        'autor' => 'João'
    ],
    [
        'post' => 'Estou trabalhando em um projeto', 
        'autor' => 'Maria'
    ],
    [
        'post' => 'Estou estudando para o ENEM', 
        'autor' => 'José'
    ],
    [
        'post' => 'Fiz um curso de PHP', 
        'autor' => 'Maria'
    ],
    [
        'post' => 'Aprendi PHP', 
        'autor' => 'João'
    ],
    [
        'post' => 'Estou trabalhando em um site', 
        'autor' => 'João'
    ],
    [
        'post' => 'Terminei o curso de PHP', 
        'autor' => 'Maria'
    ]
];

$resultado = contarPostsPorAutor($posts);
print_r($resultado);

?>
