<div class="container">
<div style="margin: 30px 0;"></div>
<table style="border: 1px solid #ccc; width:100%">
    <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>CPF</th>
    </tr>

    <?php
    while ($linha = mysqli_fetch_array($consulta_alunos)) {
        echo '<tr style="text-align:center;"><td>' . $linha['nome'] . '</td>';
        echo '<td>' . $linha['endereco'] . '</td>';
        echo '<td>' . $linha['cidade'] . '</td>';
        echo '<td>' . $linha['estado'] . '</td>';
        echo '<td>' . $linha['cpf'] . '</td><tr>';

    }
    ?>
</table>
</div>