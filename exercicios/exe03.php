<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="lista">
        <?php
         $cidades = ["Rio Branco","Maceió","Macapá","Manaus","Salvador","Fortaleza","Brasília","Vitória","Goiânia","São Luís","Cuiabá","Campo Grande","Belo Horizonte","Belém","João Pessoa","Curitiba","Recife","Teresina","Rio de Janeiro","Natal","Porto Alegre","Porto Velho","Boa Vista","Florianópolis","São Paulo","Aracaju","Palmas"];
         $imagens = ["muito-quente.png","quente.png","ok.png","frio.png"]; 
         $temperatura = ["31","27","28","29","26","28","22","24","26","27","30","29","23","29","28","18","28","30","27","28","20","30","31","22",    "23","28","31"];

        $numero_cidades = count($cidades);
        $contador = 0;
        while ($contador < $numero_cidades){
            echo "<div class='card'>";
            echo "<br> $cidades[$contador] <br><br>";
            echo "<br>$temperatura[$contador]<br><br>";

            if ($temperatura[$contador] > 30){
                echo "<img src='$imagens[0]'>";
            }elseif($temperatura[$contador] > 25 &&  $temperatura[$contador] < 30);
            
            echo "</div>";

            $contador++;
        }

        ?>
    </div>
</body>
</html>