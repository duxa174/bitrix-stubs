<?php

namespace Bitrix\Main\Controller;

/**
 * Class LoadExt
 * @package Bitrix\Main\Controller
 */
class LoadExt extends \Bitrix\Main\Engine\Controller
{
    /**
     * Configures ajax actions
     * @return array
     */
    public function configureActions()
    {
    }
    /**
     * @param array $extension
     * @return array
     * @throws \Bitrix\Main\IO\FileNotFoundException
     * @throws \Bitrix\Main\LoaderException
     */
    public function getExtensionsAction($extension = [])
    {
    }
}