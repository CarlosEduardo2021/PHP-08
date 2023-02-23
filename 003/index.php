<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Exemplo PHP
    </h1>
    <?php 
        // Para alterar time zone o comando deve ser colocado antes.
        date_default_timezone_set("America/Sao_Paulo"); // alterando para time zone utilizada em São Paulo / Brasil - GMT -03
        echo"Hoje é dia, " . date("d/M/Y"); // digita o 'd' minuscolo para o dia do mês
        echo " ,dia da semana (em inglês), " . date("D"); // digitando 'D' maiusculo para dia da semana.
        echo"e a hora atual é " . date("G:i:s T"); // definição de hora/minuto/segundo e o 'T' maiusculo a time zone

        // Oito regras

        //Váriaveis e constantes são representados como na maioria das linguagens de preogramação, sendo as: 
        //01 - Váriaveis - representadoas por '$' na frente e são mutaveis.
        //02 - O segundo pode ser letra ou o simbolo _ .
        //03  - Aceita caracter [a-z], [A-Z],[0-9] e [_].
        //04 - Aceita caracteres da tabela ACSII a partir de 128
        //05 - Aceita caracteres acentuados como á,õ, ç.
        //06 - Alinguagem é case sensitive em relação aos nomes.
        //07 - Nomes especiais como '$this' não podem ser usados.
        //08 - Constantes - representadas por 'const' .

        $nome = "Carlos";
	    $sobrenome = "Santos";
	
	    const CIDADE = "Sertãozinho";

	    echo " Muito prazer, $nome $sobrenome ! Você mora em " . CIDADE ;
        
        // Recomendações para dar nomes: (recomendação).

        // 01 - Tente dar nomes claros e de fácil identificação.
        // 02 - Evite omes muito curtos ou muito longos.
        // 03 - Dweefina um padrão e siga em todo projeto.
        // 04 - Para variáveis, dê preferencia a letra minúsculas.
        // 05 - Para constantes, dê preferência para letras maiúsculas
        // 06 - Use camelCase para letras e atributos.
        // 07 - Use SNAKE_CASE para nomear constantes.

    ?>
</body>
</html>