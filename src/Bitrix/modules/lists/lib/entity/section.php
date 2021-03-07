<?php

namespace Bitrix\Lists\Entity;

class Section implements \Bitrix\Lists\Entity\Controllable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    const ERROR_ADD_SECTION = "ERROR_ADD_SECTION";
    const ERROR_UPDATE_SECTION = "ERROR_UPDATE_SECTION";
    const ERROR_DELETE_SECTION = "ERROR_DELETE_SECTION";
    const ERROR_SECTION_NOT_FOUND = "ERROR_SECTION_NOT_FOUND";
    private $param;
    private $params = [];
    private $fieldList = [];
    private $filterList = [];
    private $selectList = [];
    private $iblockId;
    private $sectionId;
    public function __construct(\Bitrix\Lists\Service\Param $param)
    {
    }
    /**
     * Checks whether an section exists.
     *
     * @return bool
     */
    public function isExist()
    {
    }
    /**
     * Adds an section.
     *
     * @return int|bool
     */
    public function add()
    {
    }
    /**
     * Returns a list of section data.
     *
     * @param array $navData Navigation data.
     *
     * @return array
     */
    public function get(array $navData = [])
    {
    }
    /**
     * Updates an section.
     *
     * @return bool
     */
    public function update()
    {
    }
    /**
     * Deletes an section.
     *
     * @return bool
     */
    public function delete()
    {
    }
    private function getFields()
    {
    }
    private function getFilter($iblockId)
    {
    }
    private function getSelectList($inputSelectList)
    {
    }
}