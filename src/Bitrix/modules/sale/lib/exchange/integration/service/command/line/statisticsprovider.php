<?php

namespace Bitrix\Sale\Exchange\Integration\Service\Command\Line;

class StatisticsProvider implements \Bitrix\Sale\Exchange\Integration\Service\Command\IProxy
{
    public static function getProxy()
    {
    }
    /**
     * @param array $fields
     * @return mixed
     * @throws Integration\Exception\CommandLineException
     */
    public static function add(array $fields)
    {
    }
    public static function getList($filter)
    {
    }
    //	static public function register(array $params)
    //	{
    //		$result = static::getList(['xmlId'=>$params['fields']['xmlId']]);
    //
    //		if($result['statisticProviders'][0])
    //		{
    //			$providerId = $result['statisticProviders'][0]['id'];
    //		}
    //		else
    //		{
    //			$providerId = static::add($params['fields'])['statisticProvider']['id'];
    //		}
    //
    //		return $providerId > 0;
    //	}
}