<?php

namespace Bitrix\Lists\Entity;

class Iblock implements \Bitrix\Lists\Entity\Controllable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    const ERROR_ADD_IBLOCK = "ERROR_ADD_IBLOCK";
    const ERROR_UPDATE_IBLOCK = "ERROR_UPDATE_IBLOCK";
    const ERROR_IBLOCK_NOT_FOUND = "ERROR_IBLOCK_NOT_FOUND";
    const ERROR_IBLOCK_ALREADY_EXISTS = "ERROR_IBLOCK_ALREADY_EXISTS";
    private $param;
    private $params = [];
    private $fieldList = [];
    private $messageList = [];
    private $iblockId;
    public function __construct(\Bitrix\Lists\Service\Param $param)
    {
    }
    /**
     * Checks whether an iblock exists.
     *
     * @return bool
     */
    public function isExist()
    {
    }
    /**
     * Adds an iblock.
     *
     * @return int|bool
     * @throws \Bitrix\Main\LoaderException
     */
    public function add()
    {
    }
    /**
     * Returns a list of iblock data.
     *
     * @param array $navData Navigation data.
     *
     * @return array
     */
    public function get(array $navData = [])
    {
    }
    /**
     * Updates an iblock.
     *
     * @return bool
     */
    public function update()
    {
    }
    /**
     * Deletes an iblock.
     *
     * @return bool
     */
    public function delete()
    {
    }
    private function getFilter()
    {
    }
    private function getOrder()
    {
    }
    private function getFields()
    {
    }
    private function getCurrentRights()
    {
    }
    private function getInputRight()
    {
    }
}