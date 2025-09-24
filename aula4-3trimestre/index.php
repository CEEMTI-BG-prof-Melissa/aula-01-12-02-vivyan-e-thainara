<html>
    <head>
        <title>Aula 04-PHP</title>
    </head>
    <body>
        <?php
            $n1= $_GET["a"];
            $n2= $_GET["b"];

            echo "A soma de $n1 com $n2 é igual a " .($n1+$n2);
            echo "A subtração de $n1 com $n2 é igual a " .($n1-$n1);
            echo "A multiplicação de $n1 com $n2 é igual a " .($n1*$n2);
            echo "A divisão de $n1 com $n2 é igual a " .($n1/$n2);
            echo "O resto de $n1 com $n2 é igual a " .($n1%$n2);
        ?>
    </body>
</html>
