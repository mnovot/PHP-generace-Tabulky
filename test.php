<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabulka</title>
    </head>
    <body>
        <?php
        include 'table.php';
        $tabulka = new table("test"); //vytvoření tabulky
        $tabulka->headers(array("Testovací tabulka", "Nadpis 2", "asdgdfs" , "test test ")); // Zápis naspisů
        $tabulka->linedata(array("Lorem ipsum dolor sit amet", "Lorem ipsum dolor sit amet", "dalsi text", "Lorem ipsum dolor sit amet")); // Vložení dat do tabulky
        $tabulka->linedata(array("Lorem ipsum dolor sit amet", "Lorem ipsum dolor sit amet", "dalsi text", "Lorem ipsum dolor sit amet")); 
        $tabulka->linedata(array("Lorem ipsum dolor sit amet", "Lorem ipsum dolor sit amet", "dalsi text", "Lorem ipsum dolor sit amet")); 
        echo $tabulka; // Vygenerování a vypsání tabulky
        ?>
    </body>
</html>

