<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>module</title>
</head>
<body>
    <h2>Project 1: Number Classifier</h2>
    <form method="post">
        Enter a Number: <input type="number" name="number" required>
        <input type="submit" value="Check"> 
    </form> 

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        

        //Positive, Negative

        if ($number > 0) {
             $numSign = "Positive";
        }elseif ($number < 0) {
             $numSign = "Negative";
        }else {
             $number = "Zero";
        }

        //Odd, Even

        if ($number % 2 ==0) {
             $oddEven = "Even";
        } else {
            $oddEven = "Odd";
        }

        

        //Output
        echo "<h3>Result:</h3>";
        echo "The number $number is <strong>$numSign </strong> and <strong> $oddEven </strong>";


        
        
    }
    
    
    
    
    
    
    
    
    ?>



    
</body>
</html>