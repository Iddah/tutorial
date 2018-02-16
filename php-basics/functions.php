<?php
function subtractNumbers ($arg1, $arg2) {
     return $arg1 - $arg2;
}

$var1 = 90;
$var2 = 20;
print subtractNumbers( $var1, $var2) ;

echo "Before var1 = $var1, var2 = $var2 <br>";
subtractNumbers ($var1, $var2);
echo "After var1 = $var1, var2 = $var2 <br>";
?>