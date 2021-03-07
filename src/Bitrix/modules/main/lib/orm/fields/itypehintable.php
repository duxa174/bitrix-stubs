<?php

namespace Bitrix\Main\ORM\Fields;

interface ITypeHintable
{
    public function getGetterTypeHint();
    public function getSetterTypeHint();
}