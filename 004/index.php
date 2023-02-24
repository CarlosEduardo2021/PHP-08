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
 
        // $num2 = (int) 3e2; // coerção -forçando tipo
        var_dump($num2);

        $num3 = (float)"980";
        var_dump($num3);

        $hunter = true;
        $hunter= false;
        print"O valor para casado é $hunter";
        // Em php quando dento de um print ou echo, de apresenta como true = 1 e false = vazio.

        $vet = [6, 2.5, "Maria", false];
        var_dump($vet)

        // exemplo array - Tipo composto
    ?>
    <?php 
         class Pessoal {
            private string $nome;
          }
  
          $p = new Pessoal;
          var_dump($p);

        // exemplo de objeto - Tipos compostos
    ?>
</body>
</html>