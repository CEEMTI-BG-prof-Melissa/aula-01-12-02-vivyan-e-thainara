<html>
    <head>
        <title>Aula 05-PHP</title>
    </head>

    <body>
        <?php
            $n1= 2;
            $n2= $_GET["x"];

            echo "<br> Os valores informados são $n1 e $n2 <br>";
            echo "<br> O valor absoluto de $n2 é " .abs($n2);
            echo "<br> o resultado de $n2 <sup>$n1</sup> é igual a " .pow($n2,$n1);
            echo "<br> A raiz quadrada de $n2 é " .sqrt($n2);
            echo "<br> O número $n2 arredondado é" .round($n2);
            echo "<br> O número de $n2 arredondado para cima é igua a ".cell($n2);
            echo "<br> O número de $n2 arredonda para baixo é igual a ".flor($n2);
            echo "<br> A parte inteira de $n2 é igual a " .intval($n2);
            echo "<br> um pirulito custa R$"  .number_format($n1, 2);
            echo "<br>";
        ?>

       
    </body>
</html>
