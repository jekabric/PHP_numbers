<?php
    $objects = [4, 5, -3, 15, -2, 19, 6, -2, -4, 20, -17];
    
    function getnumbers($objects){
        $positive = 0;
        $negative = 0;
        $odd = 0;
        $even = 0;

        foreach($objects as $number){
            if ($number > 0){
                $positive++;
            }elseif ($number < 0){
                $negative++;
            }
            if ($number % 2 == 0){
                $even++;
            }else{
                $odd++;
            }
        }
        echo "Array has $negative negative, $positive positive, $odd odd and $even even numbers.";
    }

    getnumbers($objects);
?>
