<?php

namespace Bitrix\Bizproc\Workflow\Template\Packer;

abstract class BasePacker
{
    /**
     * Get data for package.
     * @param Tpl $tpl
     * @return mixed
     */
    public abstract function makePackageData(\Bitrix\Bizproc\Workflow\Template\Tpl $tpl);
    /**
     * Pack the template.
     * @param Tpl $tpl
     * @return Result\Pack
     */
    public abstract function pack(\Bitrix\Bizproc\Workflow\Template\Tpl $tpl);
    /**
     * Unpack the data to template
     * @param $data
     * @return Result\Unpack
     */
    public abstract function unpack($data);
    protected function compress($data)
    {
    }
    protected function uncompress($data)
    {
    }
}