<?php

namespace Bitrix\Bizproc\Workflow\Template;

class SourceType
{
    const DocumentField = 'Document';
    const Parameter = 'Parameter';
    const Variable = 'Variable';
    const Constant = 'Constant';
    const GlobalConstant = 'GlobalConst';
    const System = 'System';
    const Activity = 'Activity';
    const CalcFunction = 'Function';
    public static function isType($type)
    {
    }
}