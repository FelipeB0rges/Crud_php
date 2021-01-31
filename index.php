<?php
#BASE DE DADOS
include 'db.php';

#CABEÇALHO
include 'header.php';


$pagina = $_GET['pagina'];

switch($pagina){
 case 'cursos': include 'views/cursos.php'; break;
 case 'inserir_cursos'; include 'views/inserir_curso.php'; break;
 case 'matriculas'; include 'views/matriculas.php'; break;
 case 'inserir_matricula' : include 'views/inserir_matricula.php'; break;
 case 'alunos' : include 'views/alunos.php'; break;
 case 'inserir_alunos' :  include 'views/inserir_alunos.php'; break;
 case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
 case 'inserir_curso':  include 'views/inserir_curso.php'; break;
 default:   include 'views/home.php';
}


# Rodapé
include 'footer.php';

