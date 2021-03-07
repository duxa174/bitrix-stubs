<?php

namespace Bitrix\Main\UI\AccessRights\Entity;

abstract class EntityBase implements \Bitrix\Main\UI\AccessRights\Entity\AccessRightEntityInterface
{
    protected $id;
    protected $model;
    public function __construct(int $id)
    {
    }
    public function getId() : int
    {
    }
    public abstract function getType() : string;
    public abstract function getName() : string;
    public abstract function getUrl() : string;
    public abstract function getAvatar(int $width = 58, int $height = 58) : ?string;
    public function getMetaData() : array
    {
    }
    protected abstract function loadModel();
}