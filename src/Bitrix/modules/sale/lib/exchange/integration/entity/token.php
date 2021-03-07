<?php

namespace Bitrix\Sale\Exchange\Integration\Entity;

class Token extends \Bitrix\Sale\Exchange\Integration\Entity\EO_B24integrationToken
{
    public function refresh(\Bitrix\Sale\Exchange\Integration\OAuth\Client $oauthClient)
    {
    }
    /**
     * @param array $fields
     * @param null $guid
     *
     * @return \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult
     * @throws \Bitrix\Main\ObjectException
     */
    public function update(array $fields = [])
    {
    }
}