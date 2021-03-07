<?php

namespace Bitrix\Bizproc;

/**
 * Class FieldType
 * @package Bitrix\Bizproc
 */
class FieldType
{
    /**
     * Base type BOOL
     */
    const BOOL = 'bool';
    /**
     * Base type DATE
     */
    const DATE = 'date';
    /**
     * Base type DATETIME
     */
    const DATETIME = 'datetime';
    /**
     * Base type DOUBLE
     */
    const DOUBLE = 'double';
    /**
     * Base type FILE
     */
    const FILE = 'file';
    /**
     * Base type INT
     */
    const INT = 'int';
    /**
     * Base type SELECT
     */
    const SELECT = 'select';
    /**
     * Base type INTERNALSELECT
     */
    const INTERNALSELECT = 'internalselect';
    /**
     * Base type STRING
     */
    const STRING = 'string';
    /**
     * Base type TEXT
     */
    const TEXT = 'text';
    /**
     * Base type USER
     */
    const USER = 'user';
    /**
     * Control render mode - Bizproc Designer
     */
    const RENDER_MODE_DESIGNER = 1;
    /**
     * Control render mode - Admin panel
     */
    const RENDER_MODE_ADMIN = 2;
    /**
     * Control render mode - Mobile application
     */
    const RENDER_MODE_MOBILE = 4;
    /**
     * Control render mode - Automation designer
     */
    const RENDER_MODE_PUBLIC = 8;
    /** @var \Bitrix\Bizproc\BaseType\Base $typeClass */
    protected $typeClass;
    /** @var array $property */
    protected $property;
    /** @var array $documentType */
    protected $documentType;
    /** @var array $documentId */
    protected $documentId;
    /**
     * @param array $property Document property.
     * @param array $documentType Document type.
     * @param string $typeClass Type class manager.
     * @param null|array $documentId
     */
    public function __construct(array $property, array $documentType, $typeClass, array $documentId = null)
    {
    }
    /**
     * @return array
     */
    public function getProperty()
    {
    }
    /**
     * @return null|string
     */
    public function getType()
    {
    }
    /**
     * @return string
     */
    public function getBaseType()
    {
    }
    /**
     * @return string
     */
    public function getTypeClass()
    {
    }
    /**
     * Set type class manager.
     * @param string $typeClass Type class name.
     * @return $this
     * @throws Main\ArgumentException
     */
    public function setTypeClass($typeClass)
    {
    }
    /**
     * @return array
     */
    public function getDocumentType()
    {
    }
    /**
     * @param array $documentType Document type.
     * @return $this
     */
    public function setDocumentType(array $documentType)
    {
    }
    /**
     * @return array|null
     */
    public function getDocumentId()
    {
    }
    /**
     * @param array $documentId Document id.
     * @return $this
     */
    public function setDocumentId(array $documentId)
    {
    }
    /**
     * @return bool
     */
    public function isMultiple()
    {
    }
    /**
     * @param bool $value Multiple flag.
     * @return $this
     */
    public function setMultiple($value)
    {
    }
    /**
     * @return bool
     */
    public function isRequired()
    {
    }
    /**
     * @return null|mixed
     */
    public function getOptions()
    {
    }
    /**
     * @param mixed $options Options data.
     * @return $this
     */
    public function setOptions($options)
    {
    }
    /**
     * Get field settings.
     * Settings contain additional information that may be required for rendering of field.
     * @return array
     */
    public function getSettings()
    {
    }
    /**
     * set field settings.
     * Settings contain additional information that may be required for rendering of field.
     * @param array $settings Settings array.
     * @return $this
     */
    public function setSettings(array $settings)
    {
    }
    /**
     * @return null|string
     */
    public function getName()
    {
    }
    /**
     * @return null|string
     */
    public function getDescription()
    {
    }
    /**
     * @param mixed $value Field value.
     * @param string $format Format name.
     * @return mixed|null|string
     */
    public function formatValue($value, $format = 'printable')
    {
    }
    /**
     * @param mixed $value Field value.
     * @param string $toTypeClass Type class name.
     * @return array|bool|float|int|string
     */
    public function convertValue($value, $toTypeClass)
    {
    }
    /**
     * @param array $baseValue Base value.
     * @param mixed $appendValue Value to append.
     * @return mixed Merge result.
     */
    public function mergeValue($baseValue, $appendValue) : array
    {
    }
    /**
     * @param int $renderMode Control render mode.
     * @return bool
     */
    public function canRenderControl($renderMode)
    {
    }
    /**
     * @param array $field Form field.
     * @param mixed $value Field value.
     * @param bool $allowSelection Allow selection flag.
     * @param int $renderMode Control render mode.
     * @return string
     */
    public function renderControl(array $field, $value, $allowSelection, $renderMode)
    {
    }
    /**
     * @param string $callbackFunctionName Client callback function name.
     * @param mixed $value Field value.
     * @return string
     */
    public function renderControlOptions($callbackFunctionName, $value)
    {
    }
    /**
     * @param array $field Form field.
     * @param array $request Request data.
     * @param array &$errors Errors collection.
     * @return array|null
     */
    public function extractValue(array $field, array $request, array &$errors = null)
    {
    }
    /**
     * @param mixed $value Field value.
     * @return void
     */
    public function clearValue($value)
    {
    }
    /**
     * @param string $context Context identification (Document, Variable etc.)
     * @param mixed $value Field value.
     * @return mixed
     */
    public function internalizeValue($context, $value)
    {
    }
    /**
     * @param string $context Context identification (Document, Variable etc.)
     * @param mixed $value Field value.
     * @return mixed
     */
    public function externalizeValue($context, $value)
    {
    }
    /**
     * Get list of supported base types.
     * @return array
     */
    public static function getBaseTypesMap()
    {
    }
    /**
     * Normalize property structure.
     * @param string|array $property Document property.
     * @return array
     */
    public static function normalizeProperty($property)
    {
    }
}