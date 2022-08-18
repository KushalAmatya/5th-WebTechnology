<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
</head>
<body>
    <?php
        function evaluate($name,$attendance,$hygene,$rating){
            if($attendance<80 or $hygene<50 or $rating<3){
                echo $name. " you are fired from Rojan Kirana Pasal";
            }
            else{
                echo "You're not fired for now";
            }
        }

        function evaluatechanged($name,$attendance,$hygene,$rating){
            if(($attendance<80 and $hygene<50) or ($hygene<50 and $rating<2)){
                echo $name. " you're fired from Rojan Kirana Pasal";
            }
            else{
                echo "You're not fired for now";
            }
        }
        evaluate("Kushal",88,90,2);
        echo "<br><br>";
         evaluatechanged("KushalDada",70,40,1);
    ?>
    
</body>
</html>