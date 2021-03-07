<?php

namespace Bitrix\Main\Copy;

class EntityCopier implements \Bitrix\Main\Copy\Copyable
{
    protected $implementer;
    protected $implementerName;
    /**
     * @var Result
     */
    protected $result;
    /**
     * @var Copyable[]
     */
    private $entitiesToCopy = [];
    public function __construct(\Bitrix\Main\Copy\CopyImplementer $implementer)
    {
    }
    /**
     * Adding entities to be copied later by the parent.
     *
     * @param Copyable $entity
     */
    public function addEntityToCopy(\Bitrix\Main\Copy\Copyable $entity)
    {
    }
    /**
     * Starts copying added entities.
     *
     * @param ContainerCollection $containerManager
     */
    protected function startCopyEntities(\Bitrix\Main\Copy\ContainerCollection $containerManager)
    {
    }
    /**
     * Copies entity.
     *
     * @param ContainerCollection $containerCollection
     * @return Result
     */
    public function copy(\Bitrix\Main\Copy\ContainerCollection $containerCollection)
    {
    }
    /**
     * Returns the ids map of the parent copied entity.
     *
     * @return array
     */
    public function getMapIdsCopiedEntity() : array
    {
    }
    /**
     * Returns the ids map of result by name implementer.
     *
     * @param string $implementerName Implementer name.
     * @param array $data Result list.
     * @return array
     */
    public function getMapIdsByImplementer(string $implementerName, array $data) : array
    {
    }
    protected function getEntityIdToCopy(\Bitrix\Main\Copy\Container $container)
    {
    }
    protected function getFields(\Bitrix\Main\Copy\Container $container, $entityId)
    {
    }
    protected function getDictionary(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    protected function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, $fields)
    {
    }
    protected function addEntity(\Bitrix\Main\Copy\Container $container, $fields)
    {
    }
    protected function copyChildren(\Bitrix\Main\Copy\Container $container, $entityIdToCopy, $copiedEntityId)
    {
    }
    protected function setCopiedEntityId(\Bitrix\Main\Copy\Container $container, $copiedEntityId)
    {
    }
    protected function setDictionary(\Bitrix\Main\Copy\Container $container, \Bitrix\Main\Type\Dictionary $dictionary)
    {
    }
    private function addToResultByName(array $result, array $mapIds, string $implementerName) : array
    {
    }
    private function addToResult(array $result, array $mapIds) : array
    {
    }
}