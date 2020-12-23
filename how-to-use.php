<?php

// How to use
require_once './englishdigit2persiandigit.php';
$my_digit = '1234';
echo 'English digit: '.$my_digit;
echo '<br />';
echo 'Show in Persian: '.englishdigit2persiandigit($my_digit);
