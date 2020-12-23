<?php

//ENGLISH DIGIT TO PERSIAN DIGIT
function englishdigit2persiandigit($englishdigitstring)
{
    $persiandigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $englishdigits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    for ($i = 0; $i < strlen($englishdigitstring); ++$i) {
        for ($j = 0; $j < 10; ++$j) {
            $englishdigitstring = str_replace($englishdigits[$j], $persiandigits[$j], $englishdigitstring);
        }
    }

    return $englishdigitstring;
}
