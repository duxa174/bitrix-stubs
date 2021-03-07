<?php

namespace Bitrix\Main\Composite;

class BufferArea extends \Bitrix\Main\Composite\StaticArea
{
    private $staticPart = null;
    private $dynamicPart = null;
    private $started = false;
    private $ended = false;
    /**
     * @param $id
     * @param bool $autoContainer
     */
    public function __construct($id, $autoContainer = true)
    {
    }
    /**
     * Starts an dynamic frame.
     * Returns self object instance.
     *
     * @see BufferArea
     * @see BufferArea::end
     *
     * @param null|string $stub
     * @return BufferArea
     * @throws NotSupportedException
     */
    public function begin($stub = null)
    {
    }
    /**
     * Starts static part of dynamic frame which will be shown to user.
     * Method begin() must be called before.
     * Returns self object instance.
     *
     * @see BufferArea
     * @see BufferArea::begin
     *
     * @return BufferArea
     * @throws NotSupportedException
     */
    public function beginStub()
    {
    }
    /**
     * Ends dynamic part of the content.
     * Method begin() must be called before.
     * Returns self object instance.
     *
     * @see BufferArea
     * @see BufferArea::begin
     *
     * @return BufferArea
     * @throws NotSupportedException
     */
    public function end()
    {
    }
    /**
     * Returns true if Frame was started.
     *
     * @return bool
     */
    public function isStarted()
    {
    }
    /**
     * Returns true if Frame was ended.
     *
     * @return bool
     */
    public function isEnded()
    {
    }
}