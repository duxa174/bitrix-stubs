<?php

namespace Bitrix\Sale\Exchange;

abstract class ExportOneCBase extends \Bitrix\Sale\Exchange\ExportPattern
{
    const SHEM_VERSION_2_10 = '2.10';
    const SHEM_VERSION_3_1 = '3.1';
    /**
     * @return string
     */
    public function outputXmlCMLHeader()
    {
    }
    /**
     * @return string
     */
    public function outputXmlCMLFooter()
    {
    }
    /**
     * @return string
     */
    protected abstract function getShemVersion();
    /**
     * @return string
     */
    public function getDirectionType()
    {
    }
}