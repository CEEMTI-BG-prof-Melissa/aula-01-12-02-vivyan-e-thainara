<html>
    <head>
        <title>Aula 05-PHP</title>
    </head>

    <body>
        <?php
            $n1= 2;
            $n2= $_GET["x"];

            echo "Os valores informados são $n1 e $n2 <br>";
            echo "O valor absoluto de $n2 é " .abs($n2);
            echo "<br> o resultado de $n2 <sup>$n1</sup> é igual a " .pow($n2,$n1);
            echo "A raiz quadrada de $n2 é " .sqrt($n2);
            echo "<br> O número $n2 arredondado é" .round($n2);
            echo "<br> O número de $n2 arredondado para cima ".cell($n2);
            echo "<br> O número de $n2 arredonda para baixo ".flor($n2);
        ?>
       
    </body>
</html>
