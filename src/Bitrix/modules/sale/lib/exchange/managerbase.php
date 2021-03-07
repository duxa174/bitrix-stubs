<?php

namespace Bitrix\Sale\Exchange;

abstract class ManagerBase
{
    const EXCHANGE_DIRECTION_IMPORT = 'I';
    const EXCHANGE_DIRECTION_EXPORT = 'E';
    protected static $instance = null;
    /** @var ISettingsImport|ISettingsExport $settings */
    protected $settings = null;
    /** @var LoggerDiag $logger */
    protected $logger = null;
    /**
     * @return string
     * @throws NotImplementedException
     */
    public static function getDirectionType()
    {
    }
    /**
     * @return static
     */
    private static function getInstance()
    {
    }
    /**
     * Get import by Type ID.
     * @param $typeId
     * @return null|static
     * @throws ArgumentOutOfRangeException
     */
    protected static function getImportByType($typeId)
    {
    }
    /**
     * @param ImportBase $entity
     * @throws NotImplementedException
     */
    public static function configure(\Bitrix\Sale\Exchange\ImportBase $entity)
    {
    }
    /**
     * @throws ArgumentOutOfRangeException
     * @throws NotImplementedException
     */
    public static function deleteLoggingDate()
    {
    }
    protected static function IsDefinedTypeId($typeId)
    {
    }
}