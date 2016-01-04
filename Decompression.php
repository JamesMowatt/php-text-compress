<?php

$text_input = file_get_contents('compressed.txt', 'r');

$dictionary = json_decode($text_input, true);

$word_count = $dictionary['i'];

$insert_so_far = 0;

$output = '';

while ($word_count >= $insert_so_far) {
    foreach ($dictionary['d'] as $dictionary_word => $positions) {
        if (in_array($insert_so_far, $positions['p'])) {
            $output .= $dictionary_word . ' ';
            echo $dictionary_word . ' ';
        }
        continue;
    }
    $insert_so_far++;
}

$output = str_replace('<br>', PHP_EOL, $output);

file_put_contents('decompress.txt', $output);