<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <title>Catalogo de filmes</title>
</head>
<body>
    <h1>Filmes 🎬</h1>
    <div class="lista">
        <?php
        $filmes = ["Vingadores - Ultimato", "Pulp Fiction", "Kill Bill", "Titanic", "Gato de botas", "O Bom Dinossauro"];
        $capas = ["vingadores.png", "pulp.png", "kill.png", "titanic.png", "gatodebotas.png", "obomdinossauro.png"]; 

        $numero_filmes = count($filmes);
        $contador = 0;
        while ($contador < $numero_filmes){
            echo "<img src='$capas[$contador]'>";
            echo "<br> $filmes[$contador] <br><br>";

            $contador++;
        }
        ?>
    </div>
</body>
</html>