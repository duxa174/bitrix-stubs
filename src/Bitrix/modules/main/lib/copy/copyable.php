<?php

namespace Bitrix\Main\Copy;

interface Copyable
{
    /**
     * Copies entity.
     *
     * @param ContainerCollection $containerCollection
     * @return Result
     */
    public function copy(\Bitrix\Main\Copy\ContainerCollection $containerCollection);
}