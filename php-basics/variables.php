<?php

$myNumber = "six"; // variable has now changed to string type

$myNumber = 6; // variable is of integer type

echo $myNumber . '<br>';

$myVariable = "hello";

if (isset($myVariable))
{
    echo " It is set.";
} 
else
{
    echo "It is not set.";
}

?>

<?php

$myFloat = 9234.98;

$myOtherFloat = 9547894367.987483701;

echo $myFloat .'<p>'. $myOtherFloat .'</p>';

?>

<?php

$myString = <<<EOD
This is some free form text. It can span mutliple
lines and can contain otherwise troublesome characters like
\ and " and ' without causing any problems.
EOD;

echo $myString;

?>