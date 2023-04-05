<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h2>Tipos Primitivos em PHP</h2>
    <?php
        $numero = 300; //Int
        $numero = 0x1A; //Retorna 26 -> Hexadecimal 0x
        $numero = 010; //Retorna 8 -> Octal 0b
        $numero = 3e2; //Retorna 300 -> É o mesmo que 3 x 10(2)
        echo "O valor da variavél é $numero";

        $variavel = 300; //Retorna: int(300)
        $variavel = 5.2; //Retorna:  float(5.2)
        $variavel = true; //Retorna:  boolean(5.2)
        $variavel = "Gustavo"; //Retorna:  string(7) "Gustavo" -> mostrando a qnt. de caracteres
        var_dump($variavel); //Mostra as informações da variavel 
    ?>
</body>
</html>