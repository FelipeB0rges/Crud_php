
<div style="text-align: center;">
    <a href="?pagina=inserir_matricula">Inserir matriculas</a>
</div>

<div class="container">
    <table style="border: 1px solid #ccc; width:100%">
        <tr>
            <th>Nome aluno</th>
            <th>Curso</th>
        </tr>

        <?php
        while ($linha = mysqli_fetch_array($consulta_cursos_alunos)) {
            echo '<tr style="text-align:center;"><td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['nome_curso'] . '</td><tr>';
        }
        ?>
    </table>

</div>
