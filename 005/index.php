<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentManipulação de strings com PHP
<body>
    <?php 
        // double quoted - aspas duplas " "
        // concatenation operator - operedor de concatenação = . ponto

        $a = "Carlos";
        $b = "Eduardo";

        echo "$a $b \u{1F418}";

        $c = 'Carlos'; // a interpretação foi a mesma pois o 
        $d = 'Eduardo';// echo continua pedidndo a interpertação com aspas duplas

        echo "$c $d \u{1F418}";


        $e = 'Carlos';
        $f = "Eduardo \u{1F418}"; // nesse caso estou mandando interpretar só o segundo nome

        echo "$e $f ";

        // https://www.youtube.com/watch?v=Vn1PGAfnG_s&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&index=22&ab_channel=CursoemV%C3%ADdeo
        // continuar do 14 min  25 seg
    ?>
</body>
</html>