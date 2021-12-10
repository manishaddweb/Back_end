<?php
function isPalindrome($N)
{
    $str = "" . $N;
    $len = strlen($str);
    for ($i = 0; $i < $len / 2; $i++)
    {
        if ($str[$i] != $str[$len - 1 - $i])
            return false;
    }
    return true;
}
 
function isPalinArray($arr , $n)
{
    for ($i = 0; $i < $n; $i++)
    {
        $ans = isPalindrome($arr[$i]);
        if ($ans == false)
            return false;
    }
    return true;
}
 
$arr = array(121, 131, 202);
 
$n = sizeof($arr);
 
$res = isPalinArray($arr, $n);
echo "<center>Read an array and check whether its elements are stored In Palindrome form or not.<hr>";
if ($res == true)
    echo "Array is a Palindrome Array";
else
    echo "Array is not a Palindrome Array";
 
?>