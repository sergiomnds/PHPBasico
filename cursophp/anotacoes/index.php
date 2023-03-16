<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
</head>
<body>
    <h1>Trabalhando com variaveis e constantes</h1>
    <?php
        $nome = "Pedro";
        $Nome = "Maria"; //Case sensitive
        echo "É verdade que seu nome é $nome? O nome de outra pessoa é $Nome.";

        $salario = 2512.50;
        echo " Seu salário é $salario";

        //* No PHP há a diferença entre aspas duplas -> "exemplo" e só uma aspa -> 'exemplo'
        //? Para concatenar, invés do '+' como em outras linguagens usa do '.'.
        $valor1 = 'Curso'; 
        $valor2 = 'PHP';
        $valor3 = "Curso " . "PHP";
        $valor4 = $valor1 . $valor2;

        echo $valor3;
        echo $valor4;

        //! Em PHP existe intepretação das Strings, QUANDO USA ASPAS DUPLAS
        //! Aspas simples NÃO interpreta conteúdo.
        echo "Curso \u{1F418}"; //* Saída: Curso *emoji elefante*
        echo 'Curso \u{1F418}'; //* Saída: Curso \u{1F418}

        //? Então um echo que use de variaveis é usado aspas duplas " ".
        $exemplo = 'Exemplo'; //Na declaração não requer interpretar, se usada a variavel em um echo "$exemplo" vai funcionar.
        echo "Usando $nome de novo.";
        echo 'Usando $nome mas sem retorno.';

        //? Para constantes não funciona declarar elas nas aspas duplas
        const ESTADO = "RJ";
        echo "Moro no ESTADO"; //Saída: Moro no ESTADO
        echo 'Moro no ' . ESTADO;
        //? Par funções pode acontecer o mesmo problema
        echo "Estamos no ano de " . date('Y');

        //* Para usar aspas dentro de um echo com aspas duplas, usa VALVULA DE ESCAPE
        //? Usa da \ antes do elemento.
        $nomeLutador = "Rodrigo";
        $snom = "Nogueira";
        echo "$nomeLutador \"Minotaruo\" $snom"; //Indicando que não acaba na segunda aspa.
        //* Outras 'escapes sequences'
        /*
        \n Nova Linha \t Tabulação horizontal \\ Barra invertida \$ Sinal de Cifrão \u{} Codeprint Unicode
        */

        //? String Heredoc e Nowdoc - POUCO USADO
        //* O Nowdoc como as aspas -> 'Frase' então não interpreta
        echo <<< FRASE
            Olá galera do Canal?

            Como vai $nome?
            etc
               etc etc
        FRASE;
        
        //?OPERADORES ARITMÉTICOS
        //O padrão de +. -, /, *. Tem o ** para potencia e % para resto de divisão.
        //? Existe a diferença entre . e + no PHP
        //* 2 + 2 = 4
        //! "2" + "2" = 4 -> E esse 4 é int, o PHP faz a conversão para fazer a soma.
        //* "2" . "2" = 22
    
        //?FUNÇÕES ARITMÉTICAS
        //abs(a) -> Retorna o valor absoluto (sem sinal)
        //base_convert(a, b, c) -> Converter de uma base para outra (a = numero a converter), (b = base primeira), (c = base que vai ser convertida)
        //EX: base_convert(1011, 2, 10)
        //ceil() ; floor(); round() -> arredondar para cima, para baixo e só arredondar
        //hypot(a, b) -> calcula a hipotenusa (a, b = catetos)
        //intdiv() -> Divisão apenas inteira (EX: intdiv(5, 2) = 2)
        //min(a, b, c...z), max(a, b, c...z) = Mostra o menor e maior valor entre os informados
        //pi() ; Constante: M_PI -> retorna o valor de pi
        //pow(5, 2) -> Fazer potencia, mas hoje não precisa.
        //sin(), cos(), tan() -> Calcula seno, cosseno e tangeno.
        //sqrt() -> Realiza a raiz quadrada.
    ?>
</body>
</html>
