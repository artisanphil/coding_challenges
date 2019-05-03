<?php
require_once "palindrome.php";

class PalindromeTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->example = new Palindrome;
    }

    public function testOnePlusOne()
    {
        $this->assertEquals(false, $this->example->isPalindrome('Gaga'));
        $this->assertEquals(true, $this->example->isPalindrome('Deleveled'));
    }
}
