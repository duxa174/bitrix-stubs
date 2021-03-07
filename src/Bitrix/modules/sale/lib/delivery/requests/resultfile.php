<?php

namespace Bitrix\Sale\Delivery\Requests;

class ResultFile extends \Bitrix\Sale\Delivery\Requests\Result
{
    protected $fileName = '';
    protected $fileContent = '';
    /**
     * ResultFile constructor.
     * @param string $fileName
     * @param string $fileContent
     */
    public function __construct($fileName = '', $fileContent = '')
    {
    }
    /**
     * @return string
     */
    public function getFileName()
    {
    }
    /**
     * @return string
     */
    public function getFileContent()
    {
    }
    /**
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
    }
    /**
     * @param string $fileContent
     */
    public function setFileContent($fileContent)
    {
    }
}