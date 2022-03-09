<?php

namespace Dgdevpl\RandomStringGenerator;

class RandomStringGenerator
{
    public static function generate(int $length) : string
    {
        $finalString = null;
        $availableChars = [
            'A', 'B', 'C', 'D', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            'a', 'b', 'c', 'd', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '@', '#', '$', '%', '^', '&', '*', '_'
        ];
        for ( $i = 0; $i < $length; $i++) {
            $finalString .= $availableChars[random_int(0, count($availableChars)-1)];
        }
        return $finalString;
    }
}
