<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style02.css">
    <title>Document</title>
</head>
<body class="corpo">
    <div  class="cabecalho">
        <header>Supermecado Mega Baum🛒</header>
    </div>
    <br>
    <div class="texto">
        <h1>Bem-vindo ao Nosso Mercado!</h1>
        <hr><br>
        <p>No Nosso Mercado, acreditamos em oferecer produtos frescos, qualidade excepcional e um atendimento personalizado. Como um novo estabelecimento, estamos empolgados em compartilhar nossa paixão por alimentos deliciosos e produtos de alta qualidade com você.</p>
    </div><br><br>
    <hr>
<div class="lista">
        <?php
         $produtos = ["Achocolatado Pó Nescau Lata 670g","Desinfetante Pinho Sol Lavanda 1,75L","Suco Em Pó Trink Uva 15g","Leite Condensado Moça Integral 395g","Sabão Liquido Omo Peças intimas e Biquínis 300ml","Enxaguante Bucal Listerine 500ml","Protetor Solar Sundown FPS 30 Praia e Piscina","Caixa de Chocolate Lacta Variedades 250,6g","Bescoito Trakinas Recheado Chocolate"];
         $imagens = ["nescau.png","desinfetante.png","sucoempo.jpg","leite.jpg","omo.png","listerine.png","protetorsolar.png","caixabombom.jpg","biscoito.png"]; 
         $valores = ["R$21,42","R$16,90","R$0,95","R$8,79","R$18,99","R$21,99","R$51,99","R$14,59","R$2,79"];

        $numero_produtos = count($produtos);
        $contador = 0;
        while ($contador < $numero_produtos){
            echo "<div class='card'>";
            echo "<img src='$imagens[$contador]'>";
            echo "$valores[$contador]<br>";
            echo "<br> $produtos[$contador] <br><br>";
            echo "</div>";

            $contador++;
        }
        ?>
    </div>
    <div class="texto2">
        <h2>Visite-nos hoje mesmo!</h1>
        <hr><br>
        <p>Estamos ansiosos para recebê-lo em nosso mercado. Explore nossos corredores, descubra novos sabores e faça parte da família Nosso Mercado.</p>
    </div><br><br>
    <hr>
   </body>
</html>