<?php

namespace Bitrix\Forum\Comments\Service;

abstract class Base
{
    const TYPE = 'BASE';
    public function getType()
    {
    }
    public function getText()
    {
    }
    public function canDelete()
    {
    }
}