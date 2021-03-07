<?php

namespace Bitrix\Main\PhoneNumber\Tools;

class PossibleLengthField extends \Bitrix\Main\PhoneNumber\Tools\XmlField
{
    public function decodeValue($value)
    {
    }
    /**
     * Parses possible length field and returns corresponding array of possible lengths.
     * @param string $possibleLength Something like "3,5,7", or "[7-9]", or  "6,[8-10]"
     * @return array Returns array of possible lengths. I.e. [3, 5, 7], or [7, 8, 9], or [6, 8, 10].
     */
    public static function parsePossibleLength($possibleLength)
    {
    }
}