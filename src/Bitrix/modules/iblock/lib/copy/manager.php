<?php

namespace Bitrix\Iblock\Copy;

class Manager
{
    protected $iblockTypeId;
    protected $iblockIdsToCopy;
    protected $socnetGroupId;
    protected $targetIblockTypeId = "";
    protected $targetSocnetGroupId = 0;
    private $iblockImplementer;
    private $fieldImplementer;
    private $workflowImplementer;
    protected $features = ["field", "section", "element", "workflow"];
    private $mapIdsCopiedIblock = [];
    /**
     * @var Dictionary
     */
    private $dictionary;
    public function __construct($iblockTypeId, array $iblockIdsToCopy, $socnetGroupId = 0)
    {
    }
    /**
     * Writes the entities id of the target place.
     * This is necessary if you want to copy the lists to another type of information block or another group.
     *
     * @param string $targetIblockTypeId Id type of information block.
     * @param int $targetSocnetGroupId Group id.
     */
    public function setTargetLocation($targetIblockTypeId, $targetSocnetGroupId = 0)
    {
    }
    /**
     * Removes feature from the copy queue.
     *
     * @param string $feature Feature name.
     */
    public function removeFeature($feature)
    {
    }
    /**
     * @param Dictionary $dictionary
     */
    public function setDictionary(\Bitrix\Main\Type\Dictionary $dictionary) : void
    {
    }
    public function setIblockImplementer(\Bitrix\Iblock\Copy\Implement\Iblock $implementer)
    {
    }
    public function setFieldImplementer(\Bitrix\Iblock\Copy\Implement\Children\Child $implementer)
    {
    }
    public function setWorkflowImplementer(\Bitrix\Iblock\Copy\Implement\Children\Child $implementer)
    {
    }
    public function startCopy()
    {
    }
    /**
     * Returns the identifier map of the parent copied entity.
     *
     * @return array
     */
    public function getMapIdsCopiedEntity()
    {
    }
    private function getContainerCollection()
    {
    }
    private function getIblockCopier()
    {
    }
}