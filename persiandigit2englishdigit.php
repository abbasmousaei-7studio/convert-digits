<?php

//PERSIAN DIGIT TO ENGLISH DIGIT
function persiandigit2englishdigit($persiandigitstring)
{
    $persiandigits = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
    $englishdigits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    for ($i = 0; $i < strlen($persiandigitstring); $i++) {
        for ($j = 0; $j < 10; $j++) {
            $persiandigitstring = str_replace($persiandigits[$j], $englishdigits[$j], $persiandigitstring);
        }
    }
    return $persiandigitstring;
}