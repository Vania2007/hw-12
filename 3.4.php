<?php
$text = "When I go to the store, I always buy apples because apples are very tasty and I like apples more than other fruits.";

$words = preg_split('/\s+/', $text);
$unique_words = array_unique($words);

print_r($unique_words);
