<?php

namespace Bitrix\Main\Numerator;

/**
 * Class Numerator - generates numbers based on config,
 * is used for creating random, sequential numbers, also may contain prefix, date values etc.
 * @package Bitrix\Main\Numerator
 */
class Numerator
{
    private $template;
    private $type;
    private $name;
    /** @var NumberGenerator[] */
    private $generators = [];
    private $id;
    const NUMERATOR_DEFAULT_TYPE = 'DEFAULT';
    const NUMERATOR_ALL_GENERATORS_TYPE = 'ALL';
    /** * @var NumberGeneratorFactory */
    protected static $numberGeneratorFactory;
    /** return empty numerator object with no configuration
     * @return static
     */
    public static function create()
    {
    }
    private function __construct()
    {
    }
    /**
     * @return NumberGeneratorFactory
     */
    protected static function getNumberGeneratorFactory()
    {
    }
    /**
     * @param $numeratorType
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getSettingsFields($numeratorType)
    {
    }
    /** For compatibility - users can defined their own type of template generation
     * @param $numeratorType
     * @return array
     */
    protected static function getUserDefinedTemplateWords($numeratorType)
    {
    }
    /**
     * @param string $type
     * @param null $sort
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getListByType($type = null, $sort = null)
    {
    }
    /** Returns numerator related fields from db by its type
     * (use it in case of only single one exists for the type)
     * @param string $type
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getOneByType($type = null)
    {
    }
    /** returns all template words for creating new numerator depending on its type
     * @param string $isAvailableByType
     * @return array
     * @throws \Bitrix\Main\NotImplementedException
     */
    public static function getTemplateWordsForType($isAvailableByType = null)
    {
    }
    /**
     * @param $hash
     */
    private function setNumberHashForGenerators($hash)
    {
    }
    /** return next number. If numerator has {NUMBER} in template,
     * Sequential counter value in database will be updated
     * If you need next number for preview only, use previewNextNumber
     * @param string|int $hash - you can reuse one numerator in various cases (for various companies etc.)
     * by passing different hashes to it. For Sequential number it means using independent counters for every hash
     * Hash will be ignored here, if it was already set in Load method or via setHash
     * @return string
     * @see Numerator::setHash()
     * @see Numerator::previewNextNumber()
     */
    public function getNext($hash = null)
    {
    }
    /**
     * @param $dynamicConfig
     */
    private function setDynamicConfigForGenerators($dynamicConfig)
    {
    }
    /**
     * @param $numId
     * @param $config - same configuration structure as using via setConfig method
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\UpdateResult|Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function update($numId, $config)
    {
    }
    /**
     * @param $hashable - object that returns hash string
     * Used for Numerators containing Sequential number
     * Hash can be set once, will be ignored here, if it was already set
     * Typically hash is a string like COMPANY_64, or USER_42
     */
    public function setHash($hashable)
    {
    }
    /**
     * @param $dynamicConfig - anything (array|object|..) that will be used by DynamicConfigurable generators
     * of Numerator for parsing template and creating number
     */
    public function setDynamicConfig($dynamicConfig)
    {
    }
    /**
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\UpdateResult
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function save()
    {
    }
    /**
     * @return array
     */
    private function getSettings()
    {
    }
    /** Load numerator by id
     * @param $numeratorId
     * @param $source - optional, numerator dynamicConfig for generating next number,
     * also can be Hashable ancestor for set up hash for numerator
     * @return null|static
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     * @see Numerator::getNext()
     */
    public static function load($numeratorId, $source = null)
    {
    }
    /**
     * @param $id
     * @return $this|\Bitrix\Main\Entity\DeleteResult|Result
     * @throws \Exception
     */
    public static function delete($id)
    {
    }
    /** return next number, without updating database value (for numerator with sequential number)
     * @param null $hash
     * @return string
     */
    public function previewNextNumber($hash = null)
    {
    }
    /**
     * returns next sequential number, if numerator has sequence,
     * null if it hasn't
     * not increases the sequent number
     * @param string $hash
     * @return int|null
     */
    public function previewNextSequentialNumber($hash = null)
    {
    }
    /** check if numerator has {NUMBER} in template
     * @return bool
     */
    public function hasSequentialNumber()
    {
    }
    /**
     * The only way to affect the NEXT number
     * - function forces the numerator to start counting with a given number
     * @param int $nextNumber
     * @param $whereNumber - old value of next number
     * @param string $hash
     * @return Result
     */
    public function setNextSequentialNumber($nextNumber, $whereNumber = null, $hash = null)
    {
    }
    /** return numerator's configuration with filled in values for every setting
     * @return array
     */
    public function getConfig()
    {
    }
    /** sets configuration for numerator and validates settings
     * @param $config
     * @return Result - message that can be shown to an end user
     * @throws \Bitrix\Main\NotImplementedException
     */
    public function setConfig($config)
    {
    }
    /**
     * @param $config
     * @return Result
     */
    private function setNumeratorConfig($config)
    {
    }
    private function createGenerators()
    {
    }
    /**
     * @param $config
     * @return Result
     * @throws \Bitrix\Main\NotImplementedException
     */
    private function setGeneratorsConfig($config)
    {
    }
    /** type string used as key in configuration arrays
     * @return string
     */
    public static function getType()
    {
    }
    /**
     * @param $template
     */
    protected function setTemplate($template)
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\NotImplementedException
     */
    private function getTypeToTemplateWords()
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\NotImplementedException
     */
    private function getGeneratorTypesByTemplate()
    {
    }
    /**
     * @param $generatorTypesToCreate
     * @return array
     */
    private function createGeneratorsOfTypes($generatorTypesToCreate)
    {
    }
    /**
     * @param $numeratorConfig
     * @return Result
     */
    private function validate($numeratorConfig)
    {
    }
    /**
     * @param string $template
     * @return Result
     */
    private function validateTemplate($template)
    {
    }
    /**
     * @param $isAvailableForType
     * @return int
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private static function getNextNumeratorNumber($isAvailableForType)
    {
    }
    /**
     * @param $config
     * @return Result
     */
    private function validateGeneratorsConfig($config)
    {
    }
    /**
     * @param $generator
     */
    private function addGenerator($generator)
    {
    }
    /**
     * @param $generator
     * @return string
     */
    private function getTypeOfGenerator($generator)
    {
    }
    public function getId()
    {
    }
}