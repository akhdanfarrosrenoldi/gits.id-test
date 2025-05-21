<?php
function isBalancedBracket($str) {
    preg_match_all('/[\(\)\[\]\{\}]/', $str, $matches);
    $brackets = $matches[0];

    $stack = [];
    $pairs = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];

    foreach ($brackets as $char) {
        if (in_array($char, ['(', '[', '{'])) {
            array_push($stack, $char);
        } else {
            if (empty($stack)) return "NO";
            $top = array_pop($stack);
            if ($pairs[$char] !== $top) return "NO";
        }
    }

    return empty($stack) ? "YES" : "NO";
}

echo "Masukkan string bracket: ";
$handle = fopen("php://stdin","r");
$input = fgets($handle);
fclose($handle);

echo isBalancedBracket(trim($input)) . "\n";
