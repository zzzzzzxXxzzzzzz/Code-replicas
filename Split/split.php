#!/usr/bin/php

<?php

$toSplit = "Hello world!";

$split = explode(" ",$toSplit);

echo "This is the first word: ".$split[0].", and this is the second: ".$split[1]."\n";
/*  Would display like this:

    This is the first word: Hello, and this is the second: world!
*/
?>
