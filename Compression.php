<?php
$dictionary = [];

$text_input = file_get_contents('input.txt', 'r');

$text_input = str_replace("\n", '<br>', $text_input);

$text_array = explode(' ', $text_input);

$dictionary['i'] = count($text_array);

foreach ($text_array as $position => $word) {
    $dictionary['d'][$word]['p'][] = $position;
}

file_put_contents('compressed.txt', json_encode($dictionary));
