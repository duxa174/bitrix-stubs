<?php

namespace Bitrix\Bizproc\Workflow\Template\Packer;

class Bpt extends \Bitrix\Bizproc\Workflow\Template\Packer\BasePacker
{
    const DIRECTION_EXPORT = 0;
    const DIRECTION_IMPORT = 1;
    protected $useCompression = true;
    public function enableCompression()
    {
    }
    public function disableCompression()
    {
    }
    public function makePackageData(\Bitrix\Bizproc\Workflow\Template\Tpl $tpl)
    {
    }
    public function pack(\Bitrix\Bizproc\Workflow\Template\Tpl $tpl)
    {
    }
    public function unpack($data)
    {
    }
    private static function replaceTemplateDocumentFieldsAliases(&$template, $aliases)
    {
    }
    private static function replaceActivityDocumentFieldsAliases(&$activity, $aliases)
    {
    }
    private static function replaceVariablesDocumentFieldsAliases(&$variables, $aliases)
    {
    }
    private static function replaceValueDocumentFieldsAliases($value, $aliases)
    {
    }
    private static function replaceFieldConditionsDocumentFieldsAliases($conditions, $aliases)
    {
    }
    private static function ConvertValueCharset($s, $direction)
    {
    }
    private static function ConvertArrayCharset($value, $direction = self::DIRECTION_EXPORT)
    {
    }
}