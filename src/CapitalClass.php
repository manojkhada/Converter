<?php

namespace Manoj\stringconvert;

class CapitalClass
{
    public function convertToCapital($word)
    {
        return strtoupper($word);
    }

}
$capitalConverter = new CapitalClass();
$capitalWord = $capitalConverter->convertToCapital("hello");

echo $capitalWord; // Output: "Hello"
