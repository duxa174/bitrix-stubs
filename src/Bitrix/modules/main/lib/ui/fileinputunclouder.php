<?php

namespace Bitrix\Main\UI;

class FileInputUnclouder
{
    protected $id;
    protected $signature;
    protected $file;
    protected static $salt = "fileinput";
    public static function getSrc($file = array())
    {
    }
    public static function getSrcWithResize($file = array(), $size = array())
    {
    }
    public function setValue($id)
    {
    }
    public function setSignature($signature)
    {
    }
    protected function check($params = array())
    {
    }
    public function exec($mode = "basic", $params = array())
    {
    }
}