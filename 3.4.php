<?php
function getUniqueWords($text) {
    $words = preg_split('/[\s,.;\-?!]+/', $text);
    $unique_words = array_filter(array_unique($words), function($word) {
        return $word !== '';
    });
    return $unique_words;
}

$text = "When I go to the store, I always buy apples because apples are very tasty and I like apples more than other fruits.";
$unique_words = getUniqueWords($text);

print_r($unique_words);
?>

