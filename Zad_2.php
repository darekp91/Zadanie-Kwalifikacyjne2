<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Zadanie Kwalifikacyjne 2</title>
    </head>
    <body lang="pl">
        <?php
       include_once 'klasy/autoload.php';
       
        $PS1= new PracujacyStudent();
        echo $PS1->getDane('Jan', 'Kowalski', '13.03.1996','22'). $PS1->getNumerIndeksu('32456'). $PS1->getStypendium('320');
    
     
       
       ?>
    </body>
</html>
