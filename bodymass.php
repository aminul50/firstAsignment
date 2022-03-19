<?php
function bodyMassIndex($weight,$height){
    $BMI = $weight / ($height * $height);

    if ($BMI < 18.5){
        echo "Your height is {$height} meter <br> and weight is {$weight} KG . <br> Your BMI is {$BMI} and You are underweight";
    }

    else if ($BMI >=18.5 && $BMI <= 24.9){
        echo " Your height is {$height} meter <br> and weight is {$weight} KG . <br>  Your BMI is {$BMI} &  You are normal weight";
    }

    else if ($BMI >=25 && $BMI <= 29.9){
        echo " Your height is {$height} meter <br> and weight is {$weight} KG . <br>  Your BMI is {$BMI} &  You are over weight";
    }

    else if ($BMI>=30){
        echo "Your height is {$height} meter <br> & weight  is {$weight} KG <br> Your BMI {$BMI} & You are obesity ";
    }
}

bodyMassIndex(180,1.8)



?>