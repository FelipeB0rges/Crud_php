<?php

$servidor="localhost";
$usuario="root";
$senha = "";
$db="escola_curso";

$conexao = mysqli_connect($servidor,$usuario,$senha,$db);

$query_cursos="SELECT * FROM cursos";

$consulta_cursos = mysqli_query($conexao,$query_cursos);


$query_alunos="SELECT * FROM alunos";

$consulta_alunos = mysqli_query($conexao,$query_alunos);




