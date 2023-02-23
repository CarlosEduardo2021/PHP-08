<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos PHP</title>
</head>
<body>
    <h1>Teste dos tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = octal
        $num1 = 0x1A;
        echo "O valor da variável é $num1";

        $v = "Eduardo";
        var_dump($v);

        $num = 3e2; // 3 x 10(2)
        echo"valor é $num";

        $num2 = (int) 3e2; // coerção -forçando tipo
        var_dump($num2);

        $num3 = (float)"980";
        var_dump($num3);

        $casado = true;
        //$casado = false;
        print"O valor para casado é $casado";
        // Em php quando dento de um print ou echo, de apresenta como true = 1 e false = vazio.

        // continuar aos  28m30s - https://www.youtube.com/watch?v=JFEelabfc1o&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&index=21&ab_channel=CursoemV%C3%ADdeo
    ?>
</body>
</html>