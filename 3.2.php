<?php
$text = <<<EOD
<p>Права пользователей:</p>
<ul>
    <li>Administrator</li>
    <li>Editor</li>
    <li>Subscriber</li>
</ul>
EOD;

$pattern = "/<li>(.*?)<\/li>/";
$replacement = "<li><a href='http://www.php.kh.ua/script.php?role=$1'>$1</a></li>";

$result = preg_replace($pattern, $replacement, $text);

echo $result;
