<h1>olá, estou aprendento PHP!</h1>
<p>que diferença vai fazer isso na minha vida?</p> 

<?php
$n1 = 10;
$n2 = 2;

echo $n1;
echo " Esse é o número1 ";
echo "<br>" . $n2 . "<br>";
echo $n1 . "" . $n2 . "<br>";
echo $n1 ." + " . $n2 . " = " . ($n1+$n2) . "<br>";
echo $n1 ." - " . $n2 . " = " . ($n1-$n2) . "<br>";
echo $n1 ." * " . $n2 . " = " . ($n1*$n2) . "<br>";
echo $n1 ." / " . $n2 . " = " . ($n1/$n2) . "<br>";

$nome = "Marlon";
$idade = 16;

echo "Olá eu sou o " . $nome . " e tenho " . $idade . " anos ";

$transportes = ["🚗", "✈", "🚂", "🛵"];
$numero = 0;
while($numero <= 3 ){

    if($numero == 2){
        echo "<br>";
    }else{
        echo $transportes[$numero] . "<br>";
    }
    $numero++;
}


?>