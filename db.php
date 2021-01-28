<?php

$servidor="localhost";
$usuario="root";
$senha = "";
$db="escola_curso";

$conexao = mysqli_connect($servidor,$usuario,$senha,$db);

$query_cursos="SELECT * FROM cursos";

$query_cursos_alunos="SELECT a.nome,c.nome FROM alunos ;

$consulta_cursos = mysqli_query($conexao,$query_cursos);

$consulta_cursos_alunos = mysqli_query($conexao,$query_cursos_alunos);


$query_alunos="SELECT * FROM alunos";

$consulta_alunos = mysqli_query($conexao,$query_alunos);




