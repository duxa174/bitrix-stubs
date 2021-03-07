<?php

namespace Bitrix\Landing\Subtype;

class Form
{
    /**
     * Check if b24 or box portal
     * @return bool
     * @throws \Bitrix\Main\LoaderException
     */
    protected static function isCrm()
    {
    }
    /**
     * Gets web forms in system.
     * @return array
     */
    protected static function getForms()
    {
    }
    protected static function getFormsForPortal()
    {
    }
    protected static function getFormsViaConnector()
    {
    }
    /**
     * Move callback form to end.
     * @param array $forms Forms array.
     * @return array
     */
    protected static function prepareForms($forms)
    {
    }
    /**
     * Gets attrs for form.
     * @return array
     */
    protected static function getAttrs()
    {
    }
    /**
     * Prepare manifest.
     * @param array $manifest Block's manifest.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param array $params Additional params.
     * @return array
     */
    public static function prepareManifest(array $manifest, \Bitrix\Landing\Block $block = null, array $params = array())
    {
    }
    /**
     * Get original domain for web-forms.
     * @return string
     */
    public static function getOriginalFormDomain()
    {
    }
}