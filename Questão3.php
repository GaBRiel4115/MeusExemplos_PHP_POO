<?php
    $minimo = 10;
    $maximo = 20;

    $numero = $minimo + 3;
    
        while ($numero < $maximo){
            echo "$numero ";
            if($numero%2==0){
                $numero++;
            }else{
                $numero+=3;
            }
        }