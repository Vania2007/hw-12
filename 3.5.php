<?php
$a = "I";
$b = "apples";
$text = 'When $a go to the store, $a always buy $b because $b are very tasty and $a like $b more than other fruits.';

$pattern = '/(\$\w+)/';
$result = preg_replace($pattern, '<b>\1</b>', $text);

echo $result;
