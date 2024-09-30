<?php


$disciplinas = array(
    array("Matemática", 5, 8.5),
    array("Português", 2, 9),
    array("Geografia", 10, 6),
    array("Educação Física", 2, 8)
);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 6</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Tabela de Disciplinas</h2>

<table>
    <tr>
        <th>Disciplina</th>
        <th>Faltas</th>
        <th>Média</th>
    </tr>

    <?php
 
    foreach ($disciplinas as $disciplina) {
        echo "<tr>";
        echo "<td>" . $disciplina[0] . "</td>";
        echo "<td>" . $disciplina[1] . "</td>";
        echo "<td>" . $disciplina[2] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
