<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arry</title>
</head>
<body>
    <?php 
     //arry 
     $fruit = array ("apple","mango","lemon","banana","orange",) ;
     echo $fruit[0];
     echo "<br>";
     echo $fruit[1];
     echo "<br>";
     echo $fruit[2];
     echo "<br>";
     echo $fruit[3];
     echo "<br>";
     echo $fruit[4];
     echo "<br>";
     //push
     $fruits = array ("apple","mango","lemon","banana","orange",) ;
     array_push($fruits,"kiwi");
     echo $fruits[5];
    ?>
</body>
</html>