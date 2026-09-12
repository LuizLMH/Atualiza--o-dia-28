<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaka Carvalho</title>
</head>

<body>
    <table>
        <tr>
            <td>Nome do Aluno</td>
            <td>Nome da Mãe</td>
            <td>Nome do Pai</td>
            <td>CPF</td>
            <td>Sexualidade</td>
            <td>Celular</td>
            <td>Data de Nascimento</td>
            <td>Nome da rua</td>
            <td>Bairro</td>
            <td>Número da casa</td>
        </tr>
        <tr>
            <td><?php
            $nomealuno = $_POST["nomeAluno"];
            echo "$nomealuno";
            ?></td>
            <td>
                <?php
                $nomemae = $_POST["nomeMae"];
                echo "$nomemae";
                ?>
            </td>
            <td>
                <?php
                $nomepai = $_POST["nomePai"];
                echo "$nomepai";
                ?>

            </td>
            <td>
                <?php
                $cpfaluno = $_POST["cpf"];
                echo "$cpfaluno";
                ?>
            </td>
            <td>
                <?php
                $sexo = $_POST["sexualidade"];
                echo "$sexo";
                ?>
            </td>
            <td>
                <?php
                $numero = $_POST["celular"];
                echo "$numero";
                ?>
            </td>
            <td>
                <?php
                $nascimento = $_POST["data"];
                echo "$nascimento";
                ?>
            </td>
            <td>
                <?php
                $nomerua = $_POST["rua"];
                echo "$nomerua";
                ?>
            </td>
            <td>
                <?php
                $nomebairro = $_POST["bairro"];
                echo "$nomebairro";
                ?>
            </td>
            <td>
                <?php
                $casanumero = $_POST["numeroCasa"];
                echo "$casanumero"
                    ?>
            </td>
        </tr>
    </table>
</body>

</html>