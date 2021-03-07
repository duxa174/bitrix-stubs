<?php

namespace Bitrix\Sale\Location\Normalizer;

/**
 * Class Helper
 * @package Bitrix\Sale\Location\Normalizer
 * Different service staff.
 */
final class Helper
{
    /**
     * Fill locations NAME_NORM FIELD
     * @param int $startId Location name record ID. Start position.
     * @param int $timeout Processing timeout.
     * @return int Last processed ID.
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function fillNormNameColumn($startId = 0, $timeout = 0, $limit = 100)
    {
    }
}