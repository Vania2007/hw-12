<?php
$a = "I";
$b = "apples";
$text = "When $a go to the store, $a always buy: $b and pears because: $b are very \$tasty and $a like $b more than other fruits. Price: $5";

preg_match_all('/\b\w+(?=:)/', $text, $matches_colon);
print_r($matches_colon[0]);

preg_match_all('/(?<!\$)\b\w+/', $text, $matches_dollar);
print_r($matches_dollar[0]);
