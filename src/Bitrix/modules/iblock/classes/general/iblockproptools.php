<?php

class CIBlockPropertyTools
{
    public const CODE_MORE_PHOTO = 'MORE_PHOTO';
    public const CODE_SKU_LINK = 'CML2_LINK';
    public const CODE_BLOG_POST = 'BLOG_POST_ID';
    public const CODE_BLOG_COMMENTS_COUNT = 'BLOG_COMMENTS_CNT';
    public const CODE_FORUM_TOPIC = 'FORUM_TOPIC_ID';
    public const CODE_FORUM_MESSAGES_COUNT = 'FORUM_MESSAGE_CNT';
    public const CODE_VOTE_COUNT = 'VOTE_COUNT';
    public const CODE_VOTE_COUNT_OLD = 'vote_count';
    public const CODE_VOTE_SUMM = 'VOTE_SUM';
    public const CODE_VOTE_SUMM_OLD = 'vote_sum';
    public const CODE_VOTE_RATING = 'RATING';
    public const CODE_VOTE_RATING_OLD = 'rating';
    public const CODE_ARTNUMBER = 'ARTNUMBER';
    public const CODE_BACKGROUND_IMAGE = 'BACKGROUND_IMAGE';
    public const XML_MORE_PHOTO = self::CODE_MORE_PHOTO;
    public const XML_SKU_LINK = self::CODE_SKU_LINK;
    public const USER_TYPE_SKU_LINK = 'SKU';
    protected static $errors = array();
    /**
     * Return error list.
     *
     * @return array
     */
    public static function getErrors()
    {
    }
    /**
     * Clear error list
     *
     * @return void
     */
    public static function clearErrors()
    {
    }
    /**
     * Create property.
     *
     * @param int $iblockID					Iblock id.
     * @param string $propertyCode			Property code.
     * @param array $propertyParams			Property params.
     * @return bool|int
     */
    public static function createProperty($iblockID, $propertyCode, $propertyParams = array())
    {
    }
    /**
     * Return filled property description.
     *
     * @param string $propertyCode			Property code.
     * @param array $propertyParams			Property params.
     * @return array|bool
     */
    public static function getPropertyDescription($propertyCode, $propertyParams = array())
    {
    }
    /**
     * Check property description before create.
     *
     * @param array $propertyDescription		Property description.
     * @return bool
     */
    public static function validatePropertyDescription($propertyDescription)
    {
    }
    /**
     * Returns the list of infoblock properties, values for which need to be emptied when copying infoblock element.
     *
     * @param int $iblockID						Iblock id.
     * @param array $propertyCodes			Property codes.
     * @return array
     */
    public static function getClearedPropertiesID($iblockID, $propertyCodes = array())
    {
    }
    /**
     * Return exist property list.
     *
     * @param int $iblockID							Iblock id.
     * @param array|string $propertyCodes			Property codes.
     * @param bool $indexCode						Return codes as key.
     * @return array|bool
     */
    public static function getExistProperty($iblockID, $propertyCodes, $indexCode = \true)
    {
    }
    /**
     * Return property symbolic codes.
     *
     * @param bool $extendedMode		Get codes as keys.
     * @return array
     */
    public static function getPropertyCodes($extendedMode = \false)
    {
    }
    /**
     * Clear property symbolic codes.
     *
     * @param array|string $propertyCodes
     * @return array|string
     */
    public static function clearPropertyList($propertyCodes)
    {
    }
    /**
     * Modify getList params for property search.
     *
     * @param array &$getListParams			\Bitrix\Main\Entity\DataManager::getList params.
     * @param string $propertyCode			Property code.
     * @param array $propertyDescription	Property description.
     * @return void
     */
    protected static function modifyGetListParams(&$getListParams, $propertyCode, $propertyDescription)
    {
    }
    /**
     * Validate and modify exist property.
     *
     * @param string $propertyCode			Property code.
     * @param array $property				Current property data.
     * @return bool
     * @throws Exception
     */
    protected static function validateExistProperty($propertyCode, $property)
    {
    }
}