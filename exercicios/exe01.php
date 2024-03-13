<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style01.css">
    <title>Document</title>
</head>
<body>
<div class="cabecalho">
<header>Alguns times participantes do Campeonato Paulista</header>
</div>
<br>
<p>Fim da primeira fase, regulamento do Campeonato Paulista é alvo de (muitas) críticas</p>
<br><hr>
<div class="lista">
        <?php
         $times = ["São Paulo FC","Palmeiras","Santos FC","Corinthians","Red Bull Bragantino","Mirassol","Ituano","Novorizontino", "Botafogo-SP", "Guarani", "Ponte Preta", "São Caetano", "Santo André", "Inter de Limeira", "São Bento"];
         $escudos = ["saopaulo.png","palmera.png","Santos_Logo.png","coritia.png","bargatino.png","mirassol.png","ituano.png","horizontino.png","bfc.png","guarani.png","pontepreta.png","saocaetano.png","santoandre.png","interlime.png","saobento.png"]; 

        $numero_times = count($times);
        $contador = 0;
        while ($contador < $numero_times){
            echo "<div class='card'>";
            echo "<img src='$escudos[$contador]'>";
            echo "<br> $times[$contador] <br><br>";
            echo "</div>";

            $contador++;
        }
        ?>
    </div>
</body>
</html>