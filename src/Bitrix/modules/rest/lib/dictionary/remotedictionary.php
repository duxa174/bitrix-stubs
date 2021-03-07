<?php

namespace Bitrix\Rest\Dictionary;

class RemoteDictionary extends \Bitrix\Main\Type\Dictionary
{
    const ID = 'generic';
    const CACHE_TTL = 86400;
    const CACHE_PREFIX = 'rest_dictionary';
    protected $baseUrl = array('ru' => 'https://www.bitrix24.ru/util/', 'ua' => 'https://www.bitrix24.ua/util/', 'by' => 'https://www.bitrix24.by/util/', 'in' => 'https://www.bitrix24.in/util/', 'en' => 'https://www.bitrix24.com/util/', 'de' => 'https://www.bitrix24.de/util/', 'kz' => 'https://www.bitrix24.kz/util/', 'br' => 'https://www.bitrix24.com.br/util/', 'pl' => 'https://www.bitrix24.pl/util/', 'fr' => 'https://www.bitrix24.fr/util/', 'la' => 'https://www.bitrix24.es/util/', 'eu' => 'https://www.bitrix24.eu/util/', 'cn' => 'https://www.bitrix24.cn/util/', 'tc' => 'https://www.bitrix24.cn/util/', 'sc' => 'https://www.bitrix24.cn/util/', 'tr' => 'https://www.bitrix24.com.tr/util/');
    protected $language = null;
    public function __construct()
    {
    }
    public function setLanguage($language)
    {
    }
    protected function init()
    {
    }
    protected function load()
    {
    }
    protected function getCacheId()
    {
    }
    /**
     * @return Uri
     * @throws \Bitrix\Main\LoaderException
     */
    protected function getDictionaryUri()
    {
    }
}