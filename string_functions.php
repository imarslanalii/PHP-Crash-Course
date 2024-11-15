<?php
# substr()


// $output = substr('Hello', 1, 3);
// $output = substr('Hello', -2);

// echo $output;

# strlen()

// $output = strlen('Hello World!');

// echo $output;

# strpos()

// $output = strpos('Hello World!', 'o');

// echo $output;

# strrpos()

// $output = strrpos('Hello World!');

// echo $output;

# strtoupper

// $output = strtoupper('Hello World!');

// echo $output;

# gzcompress
$string = "Hello this is Ali";

$compressed = gzcompress($string);

// echo $compressed;

$original = gzuncompress($compressed);

echo $original;
?>
