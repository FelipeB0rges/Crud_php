<?php
#BASE DE DADOS
include 'db.php';

#CABEÇALHO
include 'header.php';


$pagina = $_GET['pagina'];

if (isset($_GET['pagina'])){
    $pagina=$_GET['pagina'];
}else{
    $pagina='home';
}


if ($pagina=='cursos'){
    include 'views/cursos.php';
}
else if ($pagina=='alunos'){
    include 'views/alunos.php';
}
else if ($pagina=='matriculas'){
    include 'views/matriculas.php';
}else{
    include 'views/home.php';
}


# Rodapé
include 'footer.php';

