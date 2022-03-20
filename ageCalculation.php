<?php

/**
 * Age calculation function
 */


//  function ageCal ( string $name, int $year){
//  $age = 2022 - $year;

//  echo "Hi {$name}, You are {$age} years old";

//  }




 /**
  *  Uppercase and lowercase function
  */


  function hat($type = 'l', $txt = null){
    $text_type = '';
    
    switch($type){
        case 'u':
            $text_type = 'uppercase';
            break;


        case 'l':
            $text_type = 'lowercase';
            break;

            default :
            $text_type = 'lowercase';
            break;

            echo "<span style = 'text-transform:{$text_type}';>{$txt} </span>";





    }
  }




?>