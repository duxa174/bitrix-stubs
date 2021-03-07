<?php

namespace Bitrix\Main\Type;

/**
 * Class for generating pseudo random sequences.
 * Never use it for any security or cryptographic purposes.
 *
 * <code>
 * use \Bitrix\Main\Type\RandomSequence;
 * $rs = new RandomSequence("A");
 * echo $rs->randString();
 * </code>
 */
class RandomSequence
{
    private $mz = 0;
    private $mw = 0;
    /**
     * Starts new sequence of pseudo random values.
     *
     * @param string $seed
     * @return void
     */
    public function __construct($seed = "")
    {
    }
    /**
     * Returns next pseudo random value from the sequence.
     * The result is signed 32 bit integer.
     *
     * @return int
     */
    public function getNext()
    {
    }
    /**
     * Returns next pseudo random number value from the sequence.
     * between $min and $max including borders.
     *
     * @param int $min
     * @param int $max
     * @return int
     * @throws \Bitrix\Main\NotSupportedException
     */
    public function rand($min, $max)
    {
    }
    /**
     * Returns next pseudo random string value from the sequence.
     *
     * @param int $length
     * @return string
     */
    public function randString($length = 10)
    {
    }
}