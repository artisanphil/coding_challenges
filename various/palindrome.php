<?php
class Palindrome
{
    public function isPalindrome(string $word) : bool
    {
        $wordLC = strtolower($word);

        $wordReversed = strrev($wordLC);

        if($wordLC == $wordReversed)
        {
            return true;
        }

        return false;
    }

}

//$this->example = new Palindrome;
//echo $this->example->isPalindrome('Deleveled');
