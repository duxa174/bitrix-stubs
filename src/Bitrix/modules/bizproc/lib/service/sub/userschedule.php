<?php

namespace Bitrix\Bizproc\Service\Sub;

/**
 * Class UserSchedule
 * @package Bitrix\Bizproc\Service\Sub
 * @internal
 */
class UserSchedule
{
    protected $userId;
    public function __construct(int $userId)
    {
    }
    public function isAbsent() : bool
    {
    }
    public function isWorkDayClosed() : bool
    {
    }
    private function canUseIntranet()
    {
    }
    private function canUseTimeman()
    {
    }
}