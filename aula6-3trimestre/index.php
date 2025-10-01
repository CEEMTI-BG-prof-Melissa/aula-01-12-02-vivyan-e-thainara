<html>
    <head>
        <title> Aula 06-PHP </title> 
    </head>
    <body>
            <h3>Operadores de Atribuição</h3>
            <hr>

            <?php
                $a=2;
                $b=$a+5;
                echo"A é igual a $a e B é igual a $b.";
                echo"<br></br>";

                $a=$a+3;
                echo"Agora A é igual á $a.";
                echo"<br></br>";

                $b+=8;
                echo"Agora A é igual a $b.";
                echo"<br></br>";

                $b-=5;
                echo"Agora B é igual a $b.";
                echo"<br></br>";

                $b*=2;
                echo" Agora multiplicando o valor de B por 2 é igual a $b.";
                echo"<br></br>";

                $b/=10;
                echo" Agora dividindo o valor de B por 10 é igual a $b.";
                echo"<br></br>";

                $b%=3;
                echo" O resto da divisão do valor de B dividido por 3 é igual a $b.";
                echo"<br></br>";

                $b.=10;
                echo" Concatenando o valor de B com o múmero 10 fica igual a $b.";
                echo"<br></br>";
        ?>
    </body>
</html>
