<?php
    function f($x){
        echo $x*$x;
    }
    f(5);

    // Реализовать функцию, которая принимает на вход число, которое является сдачей
    // и выдать сдачу, номиналом 1, 2, 5, 10
    // Пример: Мы даём на вход 32 = 10 10 10 2
    // Пример: 27 = 10 10 5 2

    function gerChange($num){
        if ($num >= 10){
            echo "10 ";
            getChange($num-10);
        }elseif ($num >= 5) {
            echo "5 ";
            getChange($num - 5);
        }elseif ($num >= 2) {
            echo "2 ";
            getChange($num - 2);
        }elseif ($num >= 1) {
            echo "1 ";
            getChange($num - 1);
        }
    }

    gerChange(68);