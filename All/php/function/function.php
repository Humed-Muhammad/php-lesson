<?php
function addNumbers(int $a, int $b) : int
{
    return "$a + $b";
}
echo addNumbers(5, 4);
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>