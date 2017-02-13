<?php
function print_number()
{     
    preg_replace_callback('/ /', function() {
        static $i;
        print ++$i."\n";
    },
 str_repeat(' ', 100));
}
print_number();
?>
