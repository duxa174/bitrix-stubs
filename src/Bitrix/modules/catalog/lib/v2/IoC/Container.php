<?php

namespace Bitrix\Catalog\v2\IoC;

/**
 * Class Container
 *
 * @package Bitrix\Catalog\v2\IoC
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
final class Container implements \Bitrix\Catalog\v2\IoC\ContainerContract
{
    private $dependencies = [];
    private $entities = [];
    private $lock = false;
    public function __construct()
    {
    }
    private function __clone()
    {
    }
    public function has(string $id) : bool
    {
    }
    public function get(string $id, array $args = [])
    {
    }
    // ToDo highlight container return values with phpstorm.meta.php
    public function make(string $id, array $args = [])
    {
    }
    public function inject(string $id, $dependency) : \Bitrix\Catalog\v2\IoC\ContainerContract
    {
    }
    public function getIterator() : \ArrayIterator
    {
    }
    private function instantiate($id, array $args = [])
    {
    }
    private function instantiateClosure($dependency, array $args = [])
    {
    }
    private function instantiateClass($dependency, array $args = [])
    {
    }
    private function resolveParameter(\ReflectionParameter $parameter, array $args = [])
    {
    }
    private function resolveClassParameter(\ReflectionParameter $parameter, array $args = [])
    {
    }
    private function resolveVariableParameter(\ReflectionParameter $parameter, array $args = [])
    {
    }
    private function lock() : self
    {
    }
    private function isLocked() : bool
    {
    }
    private function getDefinition(string $id, array $args = []) : string
    {
    }
}