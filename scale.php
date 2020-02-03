<?php
if (!$argv[1] && !$argv[2]) {
    print("Please enter 2 numbers to make this working....");
    exit();
} elseif (count($argv) !== 3 | $argv[1] < 0 | $argv[2] < 0) {
    print("Number of arguments is incorrect or negative numbers where used..");
}

if ($argv[1] === $argv[2]) {
    print("In balans\n");
    exit();
} elseif ($argv[1] !== $argv[2]) {
    print("Niet in balans\n");
    exit();
} else {
    print("GG you broke the thing......");
}
?>