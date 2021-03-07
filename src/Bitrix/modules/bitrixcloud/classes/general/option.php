<?php

abstract class CAllBitrixCloudOption
{
    private $name = "";
    private $value = \null;
    /**
     *
     * @param string $name
     * @return void
     *
     */
    public function __construct($name)
    {
    }
    /**
     *
     * @return array[string]string
     *
     */
    private function _read_db()
    {
    }
    /**
     *
     * @return array[string][string]string
     *
     */
    private function _read_all_db()
    {
    }
    /**
     *
     * @return void
     *
     */
    private function _delete_db()
    {
    }
    /**
     *
     * @param array[string]string $value
     * @return void
     *
     */
    private function _write_db($value)
    {
    }
    /**
     *
     * @param array[string]string $value
     * @return void
     *
     */
    private function _update_db($value)
    {
    }
    /**
     *
     * @return boolean
     *
     */
    public function isExists()
    {
    }
    /**
     *
     * @return array[string]string
     *
     */
    public function getArrayValue()
    {
    }
    /**
     *
     * @return string
     *
     */
    public function getStringValue()
    {
    }
    /**
     *
     * @return int
     *
     */
    public function getIntegerValue()
    {
    }
    /**
     * @param array[string]string $value
     * @return void
     *
     */
    public function setArrayValue($value)
    {
    }
    /**
     * @param string $value
     * @return void
     *
     */
    public function setStringValue($value)
    {
    }
    /**
     * @return void
     *
     */
    public function delete()
    {
    }
}