<div class="container">
<table style="border: 1px solid #ccc; width:100%">
    <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>CPF</th>
    </tr>

    <?php
    while ($linha = mysqli_fetch_array($consulta_cursos)) {
        echo '<tr style="text-align:center;"><td>' . $linha['nome_curso'] . '</td>';
        echo '<td>' . $linha['carga_horaria'] . '</td><tr>';
        echo '<tr style="text-align:center;"><td>' . $linha['nome_curso'] . '</td>';
        echo '<td>' . $linha['carga_horaria'] . '</td><tr>';
        echo '<tr style="text-align:center;"><td>' . $linha['nome_curso'] . '</td>';
        echo '<td>' . $linha['carga_horaria'] . '</td><tr>';
        aaa
    }
    ?>
</table>
</div>