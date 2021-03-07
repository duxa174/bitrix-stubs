<?php

namespace Bitrix\Report\VisualConstructor\Entity;

/**
 * Common class for models which have configurations sub entities
 * @method addConfigurations(Configuration | Configuration[] $configuration) add configuration/configurations to this
 * @method deleteConfigurations(Configuration | Configuration[] $configuration) delete connection with Configuration, but not delete Configuration object
 * @package Bitrix\Report\VisualConstructor\Entity
 */
abstract class ConfigurableModel extends \Bitrix\Report\VisualConstructor\Internal\Model
{
    /** @var Configuration[] $configurations */
    protected $configurations = array();
    /**
     * @return Configuration[]
     */
    public function getConfigurations()
    {
    }
    /**
     * Setter for Configuration colection.
     *
     * @param Configuration[] $configurations Configuration list.
     * @return void
     */
    public function setConfigurations($configurations)
    {
    }
    /**
     * Build configuration entity from valuable $field and add to configurations list
     *
     * @param BaseValuable $field Field from create configuration.
     * @return void
     */
    public function addConfigurationField(\Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable $field)
    {
    }
}