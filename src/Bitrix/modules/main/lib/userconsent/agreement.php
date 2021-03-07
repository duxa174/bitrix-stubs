<?php

namespace Bitrix\Main\UserConsent;

/**
 * Class Agreement
 * @package Bitrix\Main\UserConsent
 */
class Agreement
{
    const ACTIVE = 'Y';
    const NOT_ACTIVE = 'N';
    const TYPE_STANDARD = 'S';
    const TYPE_CUSTOM = 'C';
    /** @var integer|null $id Agreement ID. */
    protected $id = null;
    /** @var ErrorCollection $errors */
    protected $errors;
    /** @var array $data Agreement data. */
    protected $data = array('ACTIVE' => self::ACTIVE, 'TYPE' => self::TYPE_CUSTOM);
    /** @var array $replace Replace data. */
    protected $replace = array();
    /** @var Intl $intl Intl. */
    protected $intl;
    /** @var DataProvider|null $dataProvider Data provider. */
    protected $dataProvider;
    private $isAgreementTextHtml;
    /**
     * Get active agreement list.
     *
     * @return array
     */
    public static function getActiveList()
    {
    }
    /**
     * Get types.
     *
     * @return array
     */
    public static function getTypeNames()
    {
    }
    /**
     * Construct.
     *
     * @param integer $id Agreement ID.
     * @param array $replace Replace data.
     */
    public function __construct($id, array $replace = array())
    {
    }
    /**
     * Return true if is used.
     *
     * @param integer $id Agreement ID.
     * @return string
     */
    public function load($id)
    {
    }
    /**
     * Set replace.
     *
     * @param array $replace Replace data.
     * @return $this
     */
    public function setReplace(array $replace)
    {
    }
    /**
     * Get errors.
     *
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * Has errors.
     *
     * @return bool
     */
    public function hasErrors()
    {
    }
    /**
     * Get agreement ID.
     *
     * @return int
     */
    public function getId()
    {
    }
    /**
     * Get agreement data.
     *
     * @return array
     */
    public function getData()
    {
    }
    /**
     * Set agreement data.
     *
     * @param array $data Data.
     * @return void
     */
    public function setData(array $data)
    {
    }
    /**
     * Merge agreement data.
     *
     * @param array $data Data.
     * @return void
     */
    public function mergeData(array $data)
    {
    }
    /**
     * Save agreement data.
     *
     * @return void
     */
    public function save()
    {
    }
    /**
     * Check.
     *
     * @return bool
     */
    protected function check()
    {
    }
    /**
     * Return true if is exist.
     *
     * @return bool
     */
    public function isExist()
    {
    }
    /**
     * Return true if is active.
     *
     * @return string
     */
    public function isActive()
    {
    }
    public function isAgreementTextHtml() : bool
    {
    }
    /**
     * Return true if is custom type.
     *
     * @return string
     */
    protected function isCustomType()
    {
    }
    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
    }
    protected static function getTitleFromText($text)
    {
    }
    /**
     * Get text.
     *
     * @param bool $cutTitle Cut title.
     * @return string
     */
    public function getText($cutTitle = false)
    {
    }
    /**
     * Get html.
     * @return string
     */
    public function getHtml()
    {
    }
    private function getContent($cutTitle = false)
    {
    }
    /**
     * Get label text.
     *
     * @return string
     */
    public function getLabelText()
    {
    }
    /**
     * Get url.
     *
     * @return string
     */
    public function getUrl()
    {
    }
    /**
     * Get label with synbols '%' for link in label text.
     *
     * @return string
     */
    public function getLabel()
    {
    }
    /**
     * Get data provider fields.
     *
     * @return array
     */
    protected function getDataProviderValues()
    {
    }
    /**
     * Return fields.
     *
     * @return array
     */
    public function getFields()
    {
    }
    /**
     * Return field values.
     *
     * @return array
     */
    public function getFieldValues()
    {
    }
    protected function getReplaceFieldValues()
    {
    }
}