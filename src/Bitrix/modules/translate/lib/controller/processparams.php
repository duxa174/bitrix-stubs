<?php

namespace Bitrix\Translate\Controller;

/**
 * Manages process session parameters.
 *
 * @implements Translate\Controller\IProcessParameters
 */
trait ProcessParams
{
    /** @var string[] */
    protected $fieldToStoreInProcess = array();
    /**
     * Returns progress option name
     *
     * @return string
     */
    public function getProgressParameterOptionName()
    {
    }
    /**
     * Tells if needed to keep field state as progress parameters.
     *
     * @param string|string[] $fieldName Name of instance field to keep in progress parameters.
     *
     * @return self
     */
    public function keepField($fieldName)
    {
    }
    /**
     * Restore progress state of the instance.
     *
     * @return self
     */
    public function restoreProgressParameters()
    {
    }
    /**
     * Save progress parameters.
     *
     * @return self
     */
    public function saveProgressParameters()
    {
    }
    /**
     * Load progress parameters.
     *
     * @return array
     */
    public function getProgressParameters()
    {
    }
    /**
     * Removes progress parameters.
     *
     * @return self
     */
    public function clearProgressParameters()
    {
    }
}