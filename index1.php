<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="skrypt.php" method="get">
        <b>Ankieta</b><br></br>
        Miasto<br>
        <input type="text" name="miasto"><br></br>
        Płeć: <br>
        <input type="radio" name="pleć" value="k">kobieta<br>
        <input type="radio" name="pleć" value="m">mężczyzna<br>
        Zainteresowania: <br>
        <input type="checkbox" name="hobby[]" value ="film">film<br>
        <input type="checkbox" name="hobby[]" value ="sport">sport<br>
        <input type="checkbox" name="hobby[]" value ="muzyka">muzyka<br>
        <input type="checkbox" name="hobby[]" value ="taniec">taniec<br>
        <br><br>
        <input type="submit" value="Wyślij">
</form>
    <?php

    ?>
</body>
</html>

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo("<b>Wprowadzone dane: </b><br><br>");
        // echo("<b>Miasto: </b>".$_GET['miasto']."<br>");
        // echo("<b>Płeć: </b>".$_GET['plec']."<br>");
        // echo("<b>Zainteresowania: </b>");
        //     for($i=0;$i<4;$i++){
        //         if(!empty($_GET['hobby'][$i])){
        //             echo ($_GET['hobby'][$i]." ");
        //         }
        //     }
        if(isSet($_GET['tekst'])) {
            $tekst = trim($_GET['tekst']);
            $tekst = htmlspecialchars($tekst);
            print '<b>Wpisana wartość to: '.$tekst.'</b><br>';
            print '<a href = "index.php">Powrót do formularza</a>';
        }
        else
        {
            print '<form action="index.php" method="get">';
            print '<input type="text" name="tekst">';
            print '<input type="submit" name="Wyślij">'
            print '</form>';
        }
    ?>
</body>
</html>
