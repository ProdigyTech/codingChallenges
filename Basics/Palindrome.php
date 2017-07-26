<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $flippedWord = "";
        for ($i =(strlen($word)) - 1; $i >= 0; $i--) {
            $flippedWord .= $word[$i];
        }
        $isEqual = (strtolower($flippedWord) == strtolower($word)) ? true : false;
        return $isEqual;
    }
}
echo Palindrome::isPalindrome('Deleveled');
echo Palindrome::isPalindrome('Madam');