<?php

namespace Bitrix\Bizproc\Copy;

class Trigger implements \Bitrix\Main\Copy\Copyable
{
    private $implementer;
    private $implementerName;
    private $result;
    public function __construct(\Bitrix\Bizproc\Copy\Implement\Trigger $implementer)
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
}