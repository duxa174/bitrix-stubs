<?php

namespace Bitrix\Seo\LeadAds;

/**
 * Class Field.
 * Metadata of question field in form.
 *
 * @package Bitrix\Seo\LeadAds
 */
class Field
{
    const TYPE_INPUT = 'input';
    const TYPE_TEXT_AREA = 'textarea';
    const TYPE_RADIO = 'radio';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_SELECT = 'select';
    protected $type = self::TYPE_INPUT;
    protected $name = null;
    protected $label = null;
    protected $key = null;
    protected $options = [];
    /**
     * Create field.
     *
     * @param string $type Type.
     * @param string|null $name Name.
     * @param string|null $label Label.
     * @param string|null $key Key.
     * @return static
     */
    public static function create($type = self::TYPE_INPUT, $name = null, $label = null, $key = null)
    {
    }
    public function getMapItem(array $map = [])
    {
    }
    /**
     * Convert to array.
     *
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * Field constructor.
     *
     * @param string $type Type.
     * @param string|null $name Name.
     * @param string|null $label Label.
     * @param string|null $key Key.
     */
    public function __construct($type = self::TYPE_INPUT, $name = null, $label = null, $key = null)
    {
    }
    /**
     * Add option.
     *
     * @param string $key Key.
     * @param string $label Label.
     * @throws ArgumentNullException
     * @return $this
     */
    public function addOption($key, $label)
    {
    }
    /**
     * Set options.
     *
     * @param array $options Options.
     * @return $this
     */
    public function setOptions(array $options)
    {
    }
    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Get label.
     *
     * @return null|string
     */
    public function getLabel()
    {
    }
    /**
     * Get key.
     *
     * @return null|string
     */
    public function getKey()
    {
    }
    /**
     * Get options.
     *
     * @return array
     */
    public function getOptions()
    {
    }
}