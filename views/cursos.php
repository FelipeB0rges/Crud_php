<div class="container">
<table style="border: 1px solid #ccc; width:100%">
    <tr>
        <th>Nome curso</th>
        <th>Carga horária</th>
    </tr>

    <?php
    while ($linha = mysqli_fetch_array($consulta_cursos)) {
        echo '<tr style="text-align:center;"><td>' . $linha['nome_curso'] . '</td>';
        echo '<td>' . $linha['carga_horaria'] . '</td><tr>';
    }
    ?>
</table>
</div>