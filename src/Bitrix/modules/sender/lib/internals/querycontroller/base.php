<?php

namespace Bitrix\Sender\Internals\QueryController;

/**
 * Class Base
 * @package Bitrix\Sender\Internals\QueryController
 */
class Base
{
    /** @var callable[] $checkers Checkers. */
    protected $checkers = array();
    /** @var callable[] $responseModifiers Response modifiers. */
    protected $responseModifiers = array();
    /**
     * Add checker.
     *
     * @param callable $checker Checker.
     * @return $this
     * @throws ArgumentException
     */
    public function addChecker($checker)
    {
    }
    /**
     * Set checkers.
     *
     * @param callable[] $checkers Checkers.
     * @return $this
     */
    public function setCheckers(array $checkers)
    {
    }
    /**
     * Add response modifier.
     *
     * @param callable $modifier Modifier.
     * @return $this
     * @throws ArgumentException
     */
    public function addResponseModifier($modifier)
    {
    }
    /**
     * Set response modifiers.
     *
     * @param callable[] $modifiers Modifiers.
     * @return $this
     */
    public function setResponseModifiers(array $modifiers)
    {
    }
    /**
     * Get checkers.
     *
     * @return array
     */
    public function getCheckers()
    {
    }
    /**
     * Get response modifiers.
     *
     * @return array
     */
    public function getResponseModifiers()
    {
    }
    /**
     * Call.
     *
     * @param callable $callee Callee.
     * @param array $parameters Parameters.
     * @return mixed
     * @throws ArgumentException
     */
    public static function call($callee, array $parameters = array())
    {
    }
}