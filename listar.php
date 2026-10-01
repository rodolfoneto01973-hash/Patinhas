 <!-- AQUI ESCREVER O CÓDIGO EM PHP QUE BUSCA OS ANIMAIS NO BANCO E DADOS E EXIBE NAS LINHAS E COLUNAS DA TABELA -->

<?php

include "db.php";

$sql = "SELECT * FROM animais";
$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para Adoção - Patinhas Felizes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>🐾 Patinhas Felizes</h1>
    <p>Animais Disponíveis para Adoção</p>
</header>

<nav>
    <a href="index.php">Início</a>
    <a href="cadastrar.php">Cadastrar Animal</a>
    <a href="listar.php">Animais para Adoção</a>
</nav>

<div class="container">

    <div class="card">

        <h2>Animais Disponíveis</h2>

        <?php

        if ($resultado->num_rows > 0) {

            while ($animal = $resultado->fetch_assoc()) {

                echo "<div class='card'>";

                echo "<h3>" . $animal["nome"] . "</h3>";

                echo "<p><strong>Espécie:</strong> "
                    . $animal["especie"] . "</p>";

                echo "<p><strong>Idade:</strong> "
                    . $animal["idade"] . " anos</p>";

                echo "<p><strong>Porte:</strong> "
                    . $animal["porte"] . "</p>";

                echo "<p><strong>Descrição:</strong> "
                    . $animal["descricao"] . "</p>";

                echo "</div>";
            }

        } else {

            echo "<p>Nenhum animal cadastrado.</p>";

        }

        ?>

    </div>

</div>

<footer>
    <p>&copy; 2026 Patinhas Felizes - Programação Web 2 | Curso Técnico em Informática | IFBA Campus Ilhéus</p>
</footer>

</body>

</html>
        