<?php

namespace Bitrix\Calendar\ICal\Builder;

interface BuilderComponent
{
    public function setContent() : \Bitrix\Calendar\ICal\Basic\Content;
}