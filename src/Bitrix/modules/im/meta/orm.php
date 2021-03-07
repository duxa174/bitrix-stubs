<?php

namespace Bitrix\Im\Model;

/**
 * EO_Alias
 * @see \Bitrix\Im\Model\AliasTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_Alias setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \string getAlias()
 * @method \Bitrix\Im\Model\EO_Alias setAlias(\string|\Bitrix\Main\DB\SqlExpression $alias)
 * @method bool hasAlias()
 * @method bool isAliasFilled()
 * @method bool isAliasChanged()
 * @method \string remindActualAlias()
 * @method \string requireAlias()
 * @method \Bitrix\Im\Model\EO_Alias resetAlias()
 * @method \Bitrix\Im\Model\EO_Alias unsetAlias()
 * @method \string fillAlias()
 * @method \string getEntityType()
 * @method \Bitrix\Im\Model\EO_Alias setEntityType(\string|\Bitrix\Main\DB\SqlExpression $entityType)
 * @method bool hasEntityType()
 * @method bool isEntityTypeFilled()
 * @method bool isEntityTypeChanged()
 * @method \string remindActualEntityType()
 * @method \string requireEntityType()
 * @method \Bitrix\Im\Model\EO_Alias resetEntityType()
 * @method \Bitrix\Im\Model\EO_Alias unsetEntityType()
 * @method \string fillEntityType()
 * @method \string getEntityId()
 * @method \Bitrix\Im\Model\EO_Alias setEntityId(\string|\Bitrix\Main\DB\SqlExpression $entityId)
 * @method bool hasEntityId()
 * @method bool isEntityIdFilled()
 * @method bool isEntityIdChanged()
 * @method \string remindActualEntityId()
 * @method \string requireEntityId()
 * @method \Bitrix\Im\Model\EO_Alias resetEntityId()
 * @method \Bitrix\Im\Model\EO_Alias unsetEntityId()
 * @method \string fillEntityId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_Alias set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_Alias reset($fieldName)
 * @method \Bitrix\Im\Model\EO_Alias unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_Alias wakeUp($data)
 */
class EO_Alias
{
    /* @var \Bitrix\Im\Model\AliasTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\AliasTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_Alias_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \string[] getAliasList()
 * @method \string[] fillAlias()
 * @method \string[] getEntityTypeList()
 * @method \string[] fillEntityType()
 * @method \string[] getEntityIdList()
 * @method \string[] fillEntityId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_Alias $object)
 * @method bool has(\Bitrix\Im\Model\EO_Alias $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Alias getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Alias[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_Alias $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_Alias_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_Alias current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_Alias_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\AliasTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\AliasTable';
}
/**
 * @method static EO_Alias_Query query()
 * @method static EO_Alias_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_Alias_Result getById($id)
 * @method static EO_Alias_Result getList(array $parameters = array())
 * @method static EO_Alias_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_Alias createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_Alias_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_Alias wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_Alias_Collection wakeUpCollection($rows)
 */
class AliasTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_Alias_Result exec()
 * @method \Bitrix\Im\Model\EO_Alias fetchObject()
 * @method \Bitrix\Im\Model\EO_Alias_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_Alias_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_Alias fetchObject()
 * @method \Bitrix\Im\Model\EO_Alias_Collection fetchCollection()
 */
class EO_Alias_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_Alias createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_Alias_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_Alias wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_Alias_Collection wakeUpCollection($rows)
 */
class EO_Alias_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_App
 * @see \Bitrix\Im\Model\AppTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_App setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \string getModuleId()
 * @method \Bitrix\Im\Model\EO_App setModuleId(\string|\Bitrix\Main\DB\SqlExpression $moduleId)
 * @method bool hasModuleId()
 * @method bool isModuleIdFilled()
 * @method bool isModuleIdChanged()
 * @method \string remindActualModuleId()
 * @method \string requireModuleId()
 * @method \Bitrix\Im\Model\EO_App resetModuleId()
 * @method \Bitrix\Im\Model\EO_App unsetModuleId()
 * @method \string fillModuleId()
 * @method \int getBotId()
 * @method \Bitrix\Im\Model\EO_App setBotId(\int|\Bitrix\Main\DB\SqlExpression $botId)
 * @method bool hasBotId()
 * @method bool isBotIdFilled()
 * @method bool isBotIdChanged()
 * @method \int remindActualBotId()
 * @method \int requireBotId()
 * @method \Bitrix\Im\Model\EO_App resetBotId()
 * @method \Bitrix\Im\Model\EO_App unsetBotId()
 * @method \int fillBotId()
 * @method \string getAppId()
 * @method \Bitrix\Im\Model\EO_App setAppId(\string|\Bitrix\Main\DB\SqlExpression $appId)
 * @method bool hasAppId()
 * @method bool isAppIdFilled()
 * @method bool isAppIdChanged()
 * @method \string remindActualAppId()
 * @method \string requireAppId()
 * @method \Bitrix\Im\Model\EO_App resetAppId()
 * @method \Bitrix\Im\Model\EO_App unsetAppId()
 * @method \string fillAppId()
 * @method \string getHash()
 * @method \Bitrix\Im\Model\EO_App setHash(\string|\Bitrix\Main\DB\SqlExpression $hash)
 * @method bool hasHash()
 * @method bool isHashFilled()
 * @method bool isHashChanged()
 * @method \string remindActualHash()
 * @method \string requireHash()
 * @method \Bitrix\Im\Model\EO_App resetHash()
 * @method \Bitrix\Im\Model\EO_App unsetHash()
 * @method \string fillHash()
 * @method \string getRegistered()
 * @method \Bitrix\Im\Model\EO_App setRegistered(\string|\Bitrix\Main\DB\SqlExpression $registered)
 * @method bool hasRegistered()
 * @method bool isRegisteredFilled()
 * @method bool isRegisteredChanged()
 * @method \string remindActualRegistered()
 * @method \string requireRegistered()
 * @method \Bitrix\Im\Model\EO_App resetRegistered()
 * @method \Bitrix\Im\Model\EO_App unsetRegistered()
 * @method \string fillRegistered()
 * @method \string getCode()
 * @method \Bitrix\Im\Model\EO_App setCode(\string|\Bitrix\Main\DB\SqlExpression $code)
 * @method bool hasCode()
 * @method bool isCodeFilled()
 * @method bool isCodeChanged()
 * @method \string remindActualCode()
 * @method \string requireCode()
 * @method \Bitrix\Im\Model\EO_App resetCode()
 * @method \Bitrix\Im\Model\EO_App unsetCode()
 * @method \string fillCode()
 * @method \string getIconFileId()
 * @method \Bitrix\Im\Model\EO_App setIconFileId(\string|\Bitrix\Main\DB\SqlExpression $iconFileId)
 * @method bool hasIconFileId()
 * @method bool isIconFileIdFilled()
 * @method bool isIconFileIdChanged()
 * @method \string remindActualIconFileId()
 * @method \string requireIconFileId()
 * @method \Bitrix\Im\Model\EO_App resetIconFileId()
 * @method \Bitrix\Im\Model\EO_App unsetIconFileId()
 * @method \string fillIconFileId()
 * @method \string getContext()
 * @method \Bitrix\Im\Model\EO_App setContext(\string|\Bitrix\Main\DB\SqlExpression $context)
 * @method bool hasContext()
 * @method bool isContextFilled()
 * @method bool isContextChanged()
 * @method \string remindActualContext()
 * @method \string requireContext()
 * @method \Bitrix\Im\Model\EO_App resetContext()
 * @method \Bitrix\Im\Model\EO_App unsetContext()
 * @method \string fillContext()
 * @method \string getIframe()
 * @method \Bitrix\Im\Model\EO_App setIframe(\string|\Bitrix\Main\DB\SqlExpression $iframe)
 * @method bool hasIframe()
 * @method bool isIframeFilled()
 * @method bool isIframeChanged()
 * @method \string remindActualIframe()
 * @method \string requireIframe()
 * @method \Bitrix\Im\Model\EO_App resetIframe()
 * @method \Bitrix\Im\Model\EO_App unsetIframe()
 * @method \string fillIframe()
 * @method \int getIframeWidth()
 * @method \Bitrix\Im\Model\EO_App setIframeWidth(\int|\Bitrix\Main\DB\SqlExpression $iframeWidth)
 * @method bool hasIframeWidth()
 * @method bool isIframeWidthFilled()
 * @method bool isIframeWidthChanged()
 * @method \int remindActualIframeWidth()
 * @method \int requireIframeWidth()
 * @method \Bitrix\Im\Model\EO_App resetIframeWidth()
 * @method \Bitrix\Im\Model\EO_App unsetIframeWidth()
 * @method \int fillIframeWidth()
 * @method \int getIframeHeight()
 * @method \Bitrix\Im\Model\EO_App setIframeHeight(\int|\Bitrix\Main\DB\SqlExpression $iframeHeight)
 * @method bool hasIframeHeight()
 * @method bool isIframeHeightFilled()
 * @method bool isIframeHeightChanged()
 * @method \int remindActualIframeHeight()
 * @method \int requireIframeHeight()
 * @method \Bitrix\Im\Model\EO_App resetIframeHeight()
 * @method \Bitrix\Im\Model\EO_App unsetIframeHeight()
 * @method \int fillIframeHeight()
 * @method \boolean getIframePopup()
 * @method \Bitrix\Im\Model\EO_App setIframePopup(\boolean|\Bitrix\Main\DB\SqlExpression $iframePopup)
 * @method bool hasIframePopup()
 * @method bool isIframePopupFilled()
 * @method bool isIframePopupChanged()
 * @method \boolean remindActualIframePopup()
 * @method \boolean requireIframePopup()
 * @method \Bitrix\Im\Model\EO_App resetIframePopup()
 * @method \Bitrix\Im\Model\EO_App unsetIframePopup()
 * @method \boolean fillIframePopup()
 * @method \string getJs()
 * @method \Bitrix\Im\Model\EO_App setJs(\string|\Bitrix\Main\DB\SqlExpression $js)
 * @method bool hasJs()
 * @method bool isJsFilled()
 * @method bool isJsChanged()
 * @method \string remindActualJs()
 * @method \string requireJs()
 * @method \Bitrix\Im\Model\EO_App resetJs()
 * @method \Bitrix\Im\Model\EO_App unsetJs()
 * @method \string fillJs()
 * @method \boolean getExtranetSupport()
 * @method \Bitrix\Im\Model\EO_App setExtranetSupport(\boolean|\Bitrix\Main\DB\SqlExpression $extranetSupport)
 * @method bool hasExtranetSupport()
 * @method bool isExtranetSupportFilled()
 * @method bool isExtranetSupportChanged()
 * @method \boolean remindActualExtranetSupport()
 * @method \boolean requireExtranetSupport()
 * @method \Bitrix\Im\Model\EO_App resetExtranetSupport()
 * @method \Bitrix\Im\Model\EO_App unsetExtranetSupport()
 * @method \boolean fillExtranetSupport()
 * @method \boolean getLivechatSupport()
 * @method \Bitrix\Im\Model\EO_App setLivechatSupport(\boolean|\Bitrix\Main\DB\SqlExpression $livechatSupport)
 * @method bool hasLivechatSupport()
 * @method bool isLivechatSupportFilled()
 * @method bool isLivechatSupportChanged()
 * @method \boolean remindActualLivechatSupport()
 * @method \boolean requireLivechatSupport()
 * @method \Bitrix\Im\Model\EO_App resetLivechatSupport()
 * @method \Bitrix\Im\Model\EO_App unsetLivechatSupport()
 * @method \boolean fillLivechatSupport()
 * @method \boolean getHidden()
 * @method \Bitrix\Im\Model\EO_App setHidden(\boolean|\Bitrix\Main\DB\SqlExpression $hidden)
 * @method bool hasHidden()
 * @method bool isHiddenFilled()
 * @method bool isHiddenChanged()
 * @method \boolean remindActualHidden()
 * @method \boolean requireHidden()
 * @method \Bitrix\Im\Model\EO_App resetHidden()
 * @method \Bitrix\Im\Model\EO_App unsetHidden()
 * @method \boolean fillHidden()
 * @method \string getClass()
 * @method \Bitrix\Im\Model\EO_App setClass(\string|\Bitrix\Main\DB\SqlExpression $class)
 * @method bool hasClass()
 * @method bool isClassFilled()
 * @method bool isClassChanged()
 * @method \string remindActualClass()
 * @method \string requireClass()
 * @method \Bitrix\Im\Model\EO_App resetClass()
 * @method \Bitrix\Im\Model\EO_App unsetClass()
 * @method \string fillClass()
 * @method \string getMethodLangGet()
 * @method \Bitrix\Im\Model\EO_App setMethodLangGet(\string|\Bitrix\Main\DB\SqlExpression $methodLangGet)
 * @method bool hasMethodLangGet()
 * @method bool isMethodLangGetFilled()
 * @method bool isMethodLangGetChanged()
 * @method \string remindActualMethodLangGet()
 * @method \string requireMethodLangGet()
 * @method \Bitrix\Im\Model\EO_App resetMethodLangGet()
 * @method \Bitrix\Im\Model\EO_App unsetMethodLangGet()
 * @method \string fillMethodLangGet()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_App set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_App reset($fieldName)
 * @method \Bitrix\Im\Model\EO_App unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_App wakeUp($data)
 */
class EO_App
{
    /* @var \Bitrix\Im\Model\AppTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\AppTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_App_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \string[] getModuleIdList()
 * @method \string[] fillModuleId()
 * @method \int[] getBotIdList()
 * @method \int[] fillBotId()
 * @method \string[] getAppIdList()
 * @method \string[] fillAppId()
 * @method \string[] getHashList()
 * @method \string[] fillHash()
 * @method \string[] getRegisteredList()
 * @method \string[] fillRegistered()
 * @method \string[] getCodeList()
 * @method \string[] fillCode()
 * @method \string[] getIconFileIdList()
 * @method \string[] fillIconFileId()
 * @method \string[] getContextList()
 * @method \string[] fillContext()
 * @method \string[] getIframeList()
 * @method \string[] fillIframe()
 * @method \int[] getIframeWidthList()
 * @method \int[] fillIframeWidth()
 * @method \int[] getIframeHeightList()
 * @method \int[] fillIframeHeight()
 * @method \boolean[] getIframePopupList()
 * @method \boolean[] fillIframePopup()
 * @method \string[] getJsList()
 * @method \string[] fillJs()
 * @method \boolean[] getExtranetSupportList()
 * @method \boolean[] fillExtranetSupport()
 * @method \boolean[] getLivechatSupportList()
 * @method \boolean[] fillLivechatSupport()
 * @method \boolean[] getHiddenList()
 * @method \boolean[] fillHidden()
 * @method \string[] getClassList()
 * @method \string[] fillClass()
 * @method \string[] getMethodLangGetList()
 * @method \string[] fillMethodLangGet()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_App $object)
 * @method bool has(\Bitrix\Im\Model\EO_App $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_App getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_App[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_App $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_App_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_App current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_App_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\AppTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\AppTable';
}
/**
 * @method static EO_App_Query query()
 * @method static EO_App_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_App_Result getById($id)
 * @method static EO_App_Result getList(array $parameters = array())
 * @method static EO_App_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_App createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_App_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_App wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_App_Collection wakeUpCollection($rows)
 */
class AppTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_App_Result exec()
 * @method \Bitrix\Im\Model\EO_App fetchObject()
 * @method \Bitrix\Im\Model\EO_App_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_App_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_App fetchObject()
 * @method \Bitrix\Im\Model\EO_App_Collection fetchCollection()
 */
class EO_App_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_App createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_App_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_App wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_App_Collection wakeUpCollection($rows)
 */
class EO_App_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_AppLang
 * @see \Bitrix\Im\Model\AppLangTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_AppLang setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getAppId()
 * @method \Bitrix\Im\Model\EO_AppLang setAppId(\int|\Bitrix\Main\DB\SqlExpression $appId)
 * @method bool hasAppId()
 * @method bool isAppIdFilled()
 * @method bool isAppIdChanged()
 * @method \int remindActualAppId()
 * @method \int requireAppId()
 * @method \Bitrix\Im\Model\EO_AppLang resetAppId()
 * @method \Bitrix\Im\Model\EO_AppLang unsetAppId()
 * @method \int fillAppId()
 * @method \string getLanguageId()
 * @method \Bitrix\Im\Model\EO_AppLang setLanguageId(\string|\Bitrix\Main\DB\SqlExpression $languageId)
 * @method bool hasLanguageId()
 * @method bool isLanguageIdFilled()
 * @method bool isLanguageIdChanged()
 * @method \string remindActualLanguageId()
 * @method \string requireLanguageId()
 * @method \Bitrix\Im\Model\EO_AppLang resetLanguageId()
 * @method \Bitrix\Im\Model\EO_AppLang unsetLanguageId()
 * @method \string fillLanguageId()
 * @method \string getTitle()
 * @method \Bitrix\Im\Model\EO_AppLang setTitle(\string|\Bitrix\Main\DB\SqlExpression $title)
 * @method bool hasTitle()
 * @method bool isTitleFilled()
 * @method bool isTitleChanged()
 * @method \string remindActualTitle()
 * @method \string requireTitle()
 * @method \Bitrix\Im\Model\EO_AppLang resetTitle()
 * @method \Bitrix\Im\Model\EO_AppLang unsetTitle()
 * @method \string fillTitle()
 * @method \string getDescription()
 * @method \Bitrix\Im\Model\EO_AppLang setDescription(\string|\Bitrix\Main\DB\SqlExpression $description)
 * @method bool hasDescription()
 * @method bool isDescriptionFilled()
 * @method bool isDescriptionChanged()
 * @method \string remindActualDescription()
 * @method \string requireDescription()
 * @method \Bitrix\Im\Model\EO_AppLang resetDescription()
 * @method \Bitrix\Im\Model\EO_AppLang unsetDescription()
 * @method \string fillDescription()
 * @method \string getCopyright()
 * @method \Bitrix\Im\Model\EO_AppLang setCopyright(\string|\Bitrix\Main\DB\SqlExpression $copyright)
 * @method bool hasCopyright()
 * @method bool isCopyrightFilled()
 * @method bool isCopyrightChanged()
 * @method \string remindActualCopyright()
 * @method \string requireCopyright()
 * @method \Bitrix\Im\Model\EO_AppLang resetCopyright()
 * @method \Bitrix\Im\Model\EO_AppLang unsetCopyright()
 * @method \string fillCopyright()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_AppLang set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_AppLang reset($fieldName)
 * @method \Bitrix\Im\Model\EO_AppLang unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_AppLang wakeUp($data)
 */
class EO_AppLang
{
    /* @var \Bitrix\Im\Model\AppLangTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\AppLangTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_AppLang_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getAppIdList()
 * @method \int[] fillAppId()
 * @method \string[] getLanguageIdList()
 * @method \string[] fillLanguageId()
 * @method \string[] getTitleList()
 * @method \string[] fillTitle()
 * @method \string[] getDescriptionList()
 * @method \string[] fillDescription()
 * @method \string[] getCopyrightList()
 * @method \string[] fillCopyright()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_AppLang $object)
 * @method bool has(\Bitrix\Im\Model\EO_AppLang $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_AppLang getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_AppLang[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_AppLang $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_AppLang_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_AppLang current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_AppLang_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\AppLangTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\AppLangTable';
}
/**
 * @method static EO_AppLang_Query query()
 * @method static EO_AppLang_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_AppLang_Result getById($id)
 * @method static EO_AppLang_Result getList(array $parameters = array())
 * @method static EO_AppLang_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_AppLang createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_AppLang_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_AppLang wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_AppLang_Collection wakeUpCollection($rows)
 */
class AppLangTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_AppLang_Result exec()
 * @method \Bitrix\Im\Model\EO_AppLang fetchObject()
 * @method \Bitrix\Im\Model\EO_AppLang_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_AppLang_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_AppLang fetchObject()
 * @method \Bitrix\Im\Model\EO_AppLang_Collection fetchCollection()
 */
class EO_AppLang_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_AppLang createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_AppLang_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_AppLang wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_AppLang_Collection wakeUpCollection($rows)
 */
class EO_AppLang_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_BlockUser
 * @see \Bitrix\Im\Model\BlockUserTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_BlockUser setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getChatId()
 * @method \Bitrix\Im\Model\EO_BlockUser setChatId(\int|\Bitrix\Main\DB\SqlExpression $chatId)
 * @method bool hasChatId()
 * @method bool isChatIdFilled()
 * @method bool isChatIdChanged()
 * @method \int remindActualChatId()
 * @method \int requireChatId()
 * @method \Bitrix\Im\Model\EO_BlockUser resetChatId()
 * @method \Bitrix\Im\Model\EO_BlockUser unsetChatId()
 * @method \int fillChatId()
 * @method \int getUserId()
 * @method \Bitrix\Im\Model\EO_BlockUser setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
 * @method bool hasUserId()
 * @method bool isUserIdFilled()
 * @method bool isUserIdChanged()
 * @method \int remindActualUserId()
 * @method \int requireUserId()
 * @method \Bitrix\Im\Model\EO_BlockUser resetUserId()
 * @method \Bitrix\Im\Model\EO_BlockUser unsetUserId()
 * @method \int fillUserId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_BlockUser set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_BlockUser reset($fieldName)
 * @method \Bitrix\Im\Model\EO_BlockUser unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_BlockUser wakeUp($data)
 */
class EO_BlockUser
{
    /* @var \Bitrix\Im\Model\BlockUserTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\BlockUserTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_BlockUser_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getChatIdList()
 * @method \int[] fillChatId()
 * @method \int[] getUserIdList()
 * @method \int[] fillUserId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_BlockUser $object)
 * @method bool has(\Bitrix\Im\Model\EO_BlockUser $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_BlockUser getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_BlockUser[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_BlockUser $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_BlockUser_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_BlockUser current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_BlockUser_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\BlockUserTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\BlockUserTable';
}
/**
 * @method static EO_BlockUser_Query query()
 * @method static EO_BlockUser_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_BlockUser_Result getById($id)
 * @method static EO_BlockUser_Result getList(array $parameters = array())
 * @method static EO_BlockUser_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_BlockUser createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_BlockUser_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_BlockUser wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_BlockUser_Collection wakeUpCollection($rows)
 */
class BlockUserTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_BlockUser_Result exec()
 * @method \Bitrix\Im\Model\EO_BlockUser fetchObject()
 * @method \Bitrix\Im\Model\EO_BlockUser_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_BlockUser_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_BlockUser fetchObject()
 * @method \Bitrix\Im\Model\EO_BlockUser_Collection fetchCollection()
 */
class EO_BlockUser_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_BlockUser createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_BlockUser_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_BlockUser wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_BlockUser_Collection wakeUpCollection($rows)
 */
class EO_BlockUser_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_Bot
 * @see \Bitrix\Im\Model\BotTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getBotId()
 * @method \Bitrix\Im\Model\EO_Bot setBotId(\int|\Bitrix\Main\DB\SqlExpression $botId)
 * @method bool hasBotId()
 * @method bool isBotIdFilled()
 * @method bool isBotIdChanged()
 * @method \string getModuleId()
 * @method \Bitrix\Im\Model\EO_Bot setModuleId(\string|\Bitrix\Main\DB\SqlExpression $moduleId)
 * @method bool hasModuleId()
 * @method bool isModuleIdFilled()
 * @method bool isModuleIdChanged()
 * @method \string remindActualModuleId()
 * @method \string requireModuleId()
 * @method \Bitrix\Im\Model\EO_Bot resetModuleId()
 * @method \Bitrix\Im\Model\EO_Bot unsetModuleId()
 * @method \string fillModuleId()
 * @method \string getCode()
 * @method \Bitrix\Im\Model\EO_Bot setCode(\string|\Bitrix\Main\DB\SqlExpression $code)
 * @method bool hasCode()
 * @method bool isCodeFilled()
 * @method bool isCodeChanged()
 * @method \string remindActualCode()
 * @method \string requireCode()
 * @method \Bitrix\Im\Model\EO_Bot resetCode()
 * @method \Bitrix\Im\Model\EO_Bot unsetCode()
 * @method \string fillCode()
 * @method \string getType()
 * @method \Bitrix\Im\Model\EO_Bot setType(\string|\Bitrix\Main\DB\SqlExpression $type)
 * @method bool hasType()
 * @method bool isTypeFilled()
 * @method bool isTypeChanged()
 * @method \string remindActualType()
 * @method \string requireType()
 * @method \Bitrix\Im\Model\EO_Bot resetType()
 * @method \Bitrix\Im\Model\EO_Bot unsetType()
 * @method \string fillType()
 * @method \string getClass()
 * @method \Bitrix\Im\Model\EO_Bot setClass(\string|\Bitrix\Main\DB\SqlExpression $class)
 * @method bool hasClass()
 * @method bool isClassFilled()
 * @method bool isClassChanged()
 * @method \string remindActualClass()
 * @method \string requireClass()
 * @method \Bitrix\Im\Model\EO_Bot resetClass()
 * @method \Bitrix\Im\Model\EO_Bot unsetClass()
 * @method \string fillClass()
 * @method \string getLang()
 * @method \Bitrix\Im\Model\EO_Bot setLang(\string|\Bitrix\Main\DB\SqlExpression $lang)
 * @method bool hasLang()
 * @method bool isLangFilled()
 * @method bool isLangChanged()
 * @method \string remindActualLang()
 * @method \string requireLang()
 * @method \Bitrix\Im\Model\EO_Bot resetLang()
 * @method \Bitrix\Im\Model\EO_Bot unsetLang()
 * @method \string fillLang()
 * @method \string getMethodBotDelete()
 * @method \Bitrix\Im\Model\EO_Bot setMethodBotDelete(\string|\Bitrix\Main\DB\SqlExpression $methodBotDelete)
 * @method bool hasMethodBotDelete()
 * @method bool isMethodBotDeleteFilled()
 * @method bool isMethodBotDeleteChanged()
 * @method \string remindActualMethodBotDelete()
 * @method \string requireMethodBotDelete()
 * @method \Bitrix\Im\Model\EO_Bot resetMethodBotDelete()
 * @method \Bitrix\Im\Model\EO_Bot unsetMethodBotDelete()
 * @method \string fillMethodBotDelete()
 * @method \string getMethodMessageAdd()
 * @method \Bitrix\Im\Model\EO_Bot setMethodMessageAdd(\string|\Bitrix\Main\DB\SqlExpression $methodMessageAdd)
 * @method bool hasMethodMessageAdd()
 * @method bool isMethodMessageAddFilled()
 * @method bool isMethodMessageAddChanged()
 * @method \string remindActualMethodMessageAdd()
 * @method \string requireMethodMessageAdd()
 * @method \Bitrix\Im\Model\EO_Bot resetMethodMessageAdd()
 * @method \Bitrix\Im\Model\EO_Bot unsetMethodMessageAdd()
 * @method \string fillMethodMessageAdd()
 * @method \string getMethodMessageUpdate()
 * @method \Bitrix\Im\Model\EO_Bot setMethodMessageUpdate(\string|\Bitrix\Main\DB\SqlExpression $methodMessageUpdate)
 * @method bool hasMethodMessageUpdate()
 * @method bool isMethodMessageUpdateFilled()
 * @method bool isMethodMessageUpdateChanged()
 * @method \string remindActualMethodMessageUpdate()
 * @method \string requireMethodMessageUpdate()
 * @method \Bitrix\Im\Model\EO_Bot resetMethodMessageUpdate()
 * @method \Bitrix\Im\Model\EO_Bot unsetMethodMessageUpdate()
 * @method \string fillMethodMessageUpdate()
 * @method \string getMethodMessageDelete()
 * @method \Bitrix\Im\Model\EO_Bot setMethodMessageDelete(\string|\Bitrix\Main\DB\SqlExpression $methodMessageDelete)
 * @method bool hasMethodMessageDelete()
 * @method bool isMethodMessageDeleteFilled()
 * @method bool isMethodMessageDeleteChanged()
 * @method \string remindActualMethodMessageDelete()
 * @method \string requireMethodMessageDelete()
 * @method \Bitrix\Im\Model\EO_Bot resetMethodMessageDelete()
 * @method \Bitrix\Im\Model\EO_Bot unsetMethodMessageDelete()
 * @method \string fillMethodMessageDelete()
 * @method \string getMethodWelcomeMessage()
 * @method \Bitrix\Im\Model\EO_Bot setMethodWelcomeMessage(\string|\Bitrix\Main\DB\SqlExpression $methodWelcomeMessage)
 * @method bool hasMethodWelcomeMessage()
 * @method bool isMethodWelcomeMessageFilled()
 * @method bool isMethodWelcomeMessageChanged()
 * @method \string remindActualMethodWelcomeMessage()
 * @method \string requireMethodWelcomeMessage()
 * @method \Bitrix\Im\Model\EO_Bot resetMethodWelcomeMessage()
 * @method \Bitrix\Im\Model\EO_Bot unsetMethodWelcomeMessage()
 * @method \string fillMethodWelcomeMessage()
 * @method \string getTextPrivateWelcomeMessage()
 * @method \Bitrix\Im\Model\EO_Bot setTextPrivateWelcomeMessage(\string|\Bitrix\Main\DB\SqlExpression $textPrivateWelcomeMessage)
 * @method bool hasTextPrivateWelcomeMessage()
 * @method bool isTextPrivateWelcomeMessageFilled()
 * @method bool isTextPrivateWelcomeMessageChanged()
 * @method \string remindActualTextPrivateWelcomeMessage()
 * @method \string requireTextPrivateWelcomeMessage()
 * @method \Bitrix\Im\Model\EO_Bot resetTextPrivateWelcomeMessage()
 * @method \Bitrix\Im\Model\EO_Bot unsetTextPrivateWelcomeMessage()
 * @method \string fillTextPrivateWelcomeMessage()
 * @method \string getTextChatWelcomeMessage()
 * @method \Bitrix\Im\Model\EO_Bot setTextChatWelcomeMessage(\string|\Bitrix\Main\DB\SqlExpression $textChatWelcomeMessage)
 * @method bool hasTextChatWelcomeMessage()
 * @method bool isTextChatWelcomeMessageFilled()
 * @method bool isTextChatWelcomeMessageChanged()
 * @method \string remindActualTextChatWelcomeMessage()
 * @method \string requireTextChatWelcomeMessage()
 * @method \Bitrix\Im\Model\EO_Bot resetTextChatWelcomeMessage()
 * @method \Bitrix\Im\Model\EO_Bot unsetTextChatWelcomeMessage()
 * @method \string fillTextChatWelcomeMessage()
 * @method \int getCountMessage()
 * @method \Bitrix\Im\Model\EO_Bot setCountMessage(\int|\Bitrix\Main\DB\SqlExpression $countMessage)
 * @method bool hasCountMessage()
 * @method bool isCountMessageFilled()
 * @method bool isCountMessageChanged()
 * @method \int remindActualCountMessage()
 * @method \int requireCountMessage()
 * @method \Bitrix\Im\Model\EO_Bot resetCountMessage()
 * @method \Bitrix\Im\Model\EO_Bot unsetCountMessage()
 * @method \int fillCountMessage()
 * @method \int getCountCommand()
 * @method \Bitrix\Im\Model\EO_Bot setCountCommand(\int|\Bitrix\Main\DB\SqlExpression $countCommand)
 * @method bool hasCountCommand()
 * @method bool isCountCommandFilled()
 * @method bool isCountCommandChanged()
 * @method \int remindActualCountCommand()
 * @method \int requireCountCommand()
 * @method \Bitrix\Im\Model\EO_Bot resetCountCommand()
 * @method \Bitrix\Im\Model\EO_Bot unsetCountCommand()
 * @method \int fillCountCommand()
 * @method \int getCountChat()
 * @method \Bitrix\Im\Model\EO_Bot setCountChat(\int|\Bitrix\Main\DB\SqlExpression $countChat)
 * @method bool hasCountChat()
 * @method bool isCountChatFilled()
 * @method bool isCountChatChanged()
 * @method \int remindActualCountChat()
 * @method \int requireCountChat()
 * @method \Bitrix\Im\Model\EO_Bot resetCountChat()
 * @method \Bitrix\Im\Model\EO_Bot unsetCountChat()
 * @method \int fillCountChat()
 * @method \int getCountUser()
 * @method \Bitrix\Im\Model\EO_Bot setCountUser(\int|\Bitrix\Main\DB\SqlExpression $countUser)
 * @method bool hasCountUser()
 * @method bool isCountUserFilled()
 * @method bool isCountUserChanged()
 * @method \int remindActualCountUser()
 * @method \int requireCountUser()
 * @method \Bitrix\Im\Model\EO_Bot resetCountUser()
 * @method \Bitrix\Im\Model\EO_Bot unsetCountUser()
 * @method \int fillCountUser()
 * @method \string getAppId()
 * @method \Bitrix\Im\Model\EO_Bot setAppId(\string|\Bitrix\Main\DB\SqlExpression $appId)
 * @method bool hasAppId()
 * @method bool isAppIdFilled()
 * @method bool isAppIdChanged()
 * @method \string remindActualAppId()
 * @method \string requireAppId()
 * @method \Bitrix\Im\Model\EO_Bot resetAppId()
 * @method \Bitrix\Im\Model\EO_Bot unsetAppId()
 * @method \string fillAppId()
 * @method \boolean getVerified()
 * @method \Bitrix\Im\Model\EO_Bot setVerified(\boolean|\Bitrix\Main\DB\SqlExpression $verified)
 * @method bool hasVerified()
 * @method bool isVerifiedFilled()
 * @method bool isVerifiedChanged()
 * @method \boolean remindActualVerified()
 * @method \boolean requireVerified()
 * @method \Bitrix\Im\Model\EO_Bot resetVerified()
 * @method \Bitrix\Im\Model\EO_Bot unsetVerified()
 * @method \boolean fillVerified()
 * @method \boolean getOpenline()
 * @method \Bitrix\Im\Model\EO_Bot setOpenline(\boolean|\Bitrix\Main\DB\SqlExpression $openline)
 * @method bool hasOpenline()
 * @method bool isOpenlineFilled()
 * @method bool isOpenlineChanged()
 * @method \boolean remindActualOpenline()
 * @method \boolean requireOpenline()
 * @method \Bitrix\Im\Model\EO_Bot resetOpenline()
 * @method \Bitrix\Im\Model\EO_Bot unsetOpenline()
 * @method \boolean fillOpenline()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_Bot set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_Bot reset($fieldName)
 * @method \Bitrix\Im\Model\EO_Bot unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_Bot wakeUp($data)
 */
class EO_Bot
{
    /* @var \Bitrix\Im\Model\BotTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\BotTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_Bot_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getBotIdList()
 * @method \string[] getModuleIdList()
 * @method \string[] fillModuleId()
 * @method \string[] getCodeList()
 * @method \string[] fillCode()
 * @method \string[] getTypeList()
 * @method \string[] fillType()
 * @method \string[] getClassList()
 * @method \string[] fillClass()
 * @method \string[] getLangList()
 * @method \string[] fillLang()
 * @method \string[] getMethodBotDeleteList()
 * @method \string[] fillMethodBotDelete()
 * @method \string[] getMethodMessageAddList()
 * @method \string[] fillMethodMessageAdd()
 * @method \string[] getMethodMessageUpdateList()
 * @method \string[] fillMethodMessageUpdate()
 * @method \string[] getMethodMessageDeleteList()
 * @method \string[] fillMethodMessageDelete()
 * @method \string[] getMethodWelcomeMessageList()
 * @method \string[] fillMethodWelcomeMessage()
 * @method \string[] getTextPrivateWelcomeMessageList()
 * @method \string[] fillTextPrivateWelcomeMessage()
 * @method \string[] getTextChatWelcomeMessageList()
 * @method \string[] fillTextChatWelcomeMessage()
 * @method \int[] getCountMessageList()
 * @method \int[] fillCountMessage()
 * @method \int[] getCountCommandList()
 * @method \int[] fillCountCommand()
 * @method \int[] getCountChatList()
 * @method \int[] fillCountChat()
 * @method \int[] getCountUserList()
 * @method \int[] fillCountUser()
 * @method \string[] getAppIdList()
 * @method \string[] fillAppId()
 * @method \boolean[] getVerifiedList()
 * @method \boolean[] fillVerified()
 * @method \boolean[] getOpenlineList()
 * @method \boolean[] fillOpenline()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_Bot $object)
 * @method bool has(\Bitrix\Im\Model\EO_Bot $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Bot getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Bot[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_Bot $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_Bot_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_Bot current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_Bot_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\BotTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\BotTable';
}
/**
 * @method static EO_Bot_Query query()
 * @method static EO_Bot_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_Bot_Result getById($id)
 * @method static EO_Bot_Result getList(array $parameters = array())
 * @method static EO_Bot_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_Bot createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_Bot_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_Bot wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_Bot_Collection wakeUpCollection($rows)
 */
class BotTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_Bot_Result exec()
 * @method \Bitrix\Im\Model\EO_Bot fetchObject()
 * @method \Bitrix\Im\Model\EO_Bot_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_Bot_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_Bot fetchObject()
 * @method \Bitrix\Im\Model\EO_Bot_Collection fetchCollection()
 */
class EO_Bot_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_Bot createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_Bot_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_Bot wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_Bot_Collection wakeUpCollection($rows)
 */
class EO_Bot_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_BotChat
 * @see \Bitrix\Im\Model\BotChatTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_BotChat setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getBotId()
 * @method \Bitrix\Im\Model\EO_BotChat setBotId(\int|\Bitrix\Main\DB\SqlExpression $botId)
 * @method bool hasBotId()
 * @method bool isBotIdFilled()
 * @method bool isBotIdChanged()
 * @method \int remindActualBotId()
 * @method \int requireBotId()
 * @method \Bitrix\Im\Model\EO_BotChat resetBotId()
 * @method \Bitrix\Im\Model\EO_BotChat unsetBotId()
 * @method \int fillBotId()
 * @method \int getChatId()
 * @method \Bitrix\Im\Model\EO_BotChat setChatId(\int|\Bitrix\Main\DB\SqlExpression $chatId)
 * @method bool hasChatId()
 * @method bool isChatIdFilled()
 * @method bool isChatIdChanged()
 * @method \int remindActualChatId()
 * @method \int requireChatId()
 * @method \Bitrix\Im\Model\EO_BotChat resetChatId()
 * @method \Bitrix\Im\Model\EO_BotChat unsetChatId()
 * @method \int fillChatId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_BotChat set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_BotChat reset($fieldName)
 * @method \Bitrix\Im\Model\EO_BotChat unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_BotChat wakeUp($data)
 */
class EO_BotChat
{
    /* @var \Bitrix\Im\Model\BotChatTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\BotChatTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_BotChat_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getBotIdList()
 * @method \int[] fillBotId()
 * @method \int[] getChatIdList()
 * @method \int[] fillChatId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_BotChat $object)
 * @method bool has(\Bitrix\Im\Model\EO_BotChat $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_BotChat getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_BotChat[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_BotChat $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_BotChat_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_BotChat current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_BotChat_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\BotChatTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\BotChatTable';
}
/**
 * @method static EO_BotChat_Query query()
 * @method static EO_BotChat_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_BotChat_Result getById($id)
 * @method static EO_BotChat_Result getList(array $parameters = array())
 * @method static EO_BotChat_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_BotChat createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_BotChat_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_BotChat wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_BotChat_Collection wakeUpCollection($rows)
 */
class BotChatTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_BotChat_Result exec()
 * @method \Bitrix\Im\Model\EO_BotChat fetchObject()
 * @method \Bitrix\Im\Model\EO_BotChat_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_BotChat_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_BotChat fetchObject()
 * @method \Bitrix\Im\Model\EO_BotChat_Collection fetchCollection()
 */
class EO_BotChat_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_BotChat createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_BotChat_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_BotChat wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_BotChat_Collection wakeUpCollection($rows)
 */
class EO_BotChat_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_BotToken
 * @see \Bitrix\Im\Model\BotTokenTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_BotToken setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \string getToken()
 * @method \Bitrix\Im\Model\EO_BotToken setToken(\string|\Bitrix\Main\DB\SqlExpression $token)
 * @method bool hasToken()
 * @method bool isTokenFilled()
 * @method bool isTokenChanged()
 * @method \string remindActualToken()
 * @method \string requireToken()
 * @method \Bitrix\Im\Model\EO_BotToken resetToken()
 * @method \Bitrix\Im\Model\EO_BotToken unsetToken()
 * @method \string fillToken()
 * @method \Bitrix\Main\Type\DateTime getDateCreate()
 * @method \Bitrix\Im\Model\EO_BotToken setDateCreate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $dateCreate)
 * @method bool hasDateCreate()
 * @method bool isDateCreateFilled()
 * @method bool isDateCreateChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualDateCreate()
 * @method \Bitrix\Main\Type\DateTime requireDateCreate()
 * @method \Bitrix\Im\Model\EO_BotToken resetDateCreate()
 * @method \Bitrix\Im\Model\EO_BotToken unsetDateCreate()
 * @method \Bitrix\Main\Type\DateTime fillDateCreate()
 * @method \Bitrix\Main\Type\DateTime getDateExpire()
 * @method \Bitrix\Im\Model\EO_BotToken setDateExpire(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $dateExpire)
 * @method bool hasDateExpire()
 * @method bool isDateExpireFilled()
 * @method bool isDateExpireChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualDateExpire()
 * @method \Bitrix\Main\Type\DateTime requireDateExpire()
 * @method \Bitrix\Im\Model\EO_BotToken resetDateExpire()
 * @method \Bitrix\Im\Model\EO_BotToken unsetDateExpire()
 * @method \Bitrix\Main\Type\DateTime fillDateExpire()
 * @method \int getBotId()
 * @method \Bitrix\Im\Model\EO_BotToken setBotId(\int|\Bitrix\Main\DB\SqlExpression $botId)
 * @method bool hasBotId()
 * @method bool isBotIdFilled()
 * @method bool isBotIdChanged()
 * @method \int remindActualBotId()
 * @method \int requireBotId()
 * @method \Bitrix\Im\Model\EO_BotToken resetBotId()
 * @method \Bitrix\Im\Model\EO_BotToken unsetBotId()
 * @method \int fillBotId()
 * @method \string getDialogId()
 * @method \Bitrix\Im\Model\EO_BotToken setDialogId(\string|\Bitrix\Main\DB\SqlExpression $dialogId)
 * @method bool hasDialogId()
 * @method bool isDialogIdFilled()
 * @method bool isDialogIdChanged()
 * @method \string remindActualDialogId()
 * @method \string requireDialogId()
 * @method \Bitrix\Im\Model\EO_BotToken resetDialogId()
 * @method \Bitrix\Im\Model\EO_BotToken unsetDialogId()
 * @method \string fillDialogId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_BotToken set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_BotToken reset($fieldName)
 * @method \Bitrix\Im\Model\EO_BotToken unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_BotToken wakeUp($data)
 */
class EO_BotToken
{
    /* @var \Bitrix\Im\Model\BotTokenTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\BotTokenTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_BotToken_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \string[] getTokenList()
 * @method \string[] fillToken()
 * @method \Bitrix\Main\Type\DateTime[] getDateCreateList()
 * @method \Bitrix\Main\Type\DateTime[] fillDateCreate()
 * @method \Bitrix\Main\Type\DateTime[] getDateExpireList()
 * @method \Bitrix\Main\Type\DateTime[] fillDateExpire()
 * @method \int[] getBotIdList()
 * @method \int[] fillBotId()
 * @method \string[] getDialogIdList()
 * @method \string[] fillDialogId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_BotToken $object)
 * @method bool has(\Bitrix\Im\Model\EO_BotToken $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_BotToken getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_BotToken[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_BotToken $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_BotToken_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_BotToken current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_BotToken_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\BotTokenTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\BotTokenTable';
}
/**
 * @method static EO_BotToken_Query query()
 * @method static EO_BotToken_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_BotToken_Result getById($id)
 * @method static EO_BotToken_Result getList(array $parameters = array())
 * @method static EO_BotToken_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_BotToken createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_BotToken_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_BotToken wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_BotToken_Collection wakeUpCollection($rows)
 */
class BotTokenTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_BotToken_Result exec()
 * @method \Bitrix\Im\Model\EO_BotToken fetchObject()
 * @method \Bitrix\Im\Model\EO_BotToken_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_BotToken_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_BotToken fetchObject()
 * @method \Bitrix\Im\Model\EO_BotToken_Collection fetchCollection()
 */
class EO_BotToken_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_BotToken createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_BotToken_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_BotToken wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_BotToken_Collection wakeUpCollection($rows)
 */
class EO_BotToken_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_Call
 * @see \Bitrix\Im\Model\CallTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_Call setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getType()
 * @method \Bitrix\Im\Model\EO_Call setType(\int|\Bitrix\Main\DB\SqlExpression $type)
 * @method bool hasType()
 * @method bool isTypeFilled()
 * @method bool isTypeChanged()
 * @method \int remindActualType()
 * @method \int requireType()
 * @method \Bitrix\Im\Model\EO_Call resetType()
 * @method \Bitrix\Im\Model\EO_Call unsetType()
 * @method \int fillType()
 * @method \int getInitiatorId()
 * @method \Bitrix\Im\Model\EO_Call setInitiatorId(\int|\Bitrix\Main\DB\SqlExpression $initiatorId)
 * @method bool hasInitiatorId()
 * @method bool isInitiatorIdFilled()
 * @method bool isInitiatorIdChanged()
 * @method \int remindActualInitiatorId()
 * @method \int requireInitiatorId()
 * @method \Bitrix\Im\Model\EO_Call resetInitiatorId()
 * @method \Bitrix\Im\Model\EO_Call unsetInitiatorId()
 * @method \int fillInitiatorId()
 * @method \string getIsPublic()
 * @method \Bitrix\Im\Model\EO_Call setIsPublic(\string|\Bitrix\Main\DB\SqlExpression $isPublic)
 * @method bool hasIsPublic()
 * @method bool isIsPublicFilled()
 * @method bool isIsPublicChanged()
 * @method \string remindActualIsPublic()
 * @method \string requireIsPublic()
 * @method \Bitrix\Im\Model\EO_Call resetIsPublic()
 * @method \Bitrix\Im\Model\EO_Call unsetIsPublic()
 * @method \string fillIsPublic()
 * @method \string getPublicId()
 * @method \Bitrix\Im\Model\EO_Call setPublicId(\string|\Bitrix\Main\DB\SqlExpression $publicId)
 * @method bool hasPublicId()
 * @method bool isPublicIdFilled()
 * @method bool isPublicIdChanged()
 * @method \string remindActualPublicId()
 * @method \string requirePublicId()
 * @method \Bitrix\Im\Model\EO_Call resetPublicId()
 * @method \Bitrix\Im\Model\EO_Call unsetPublicId()
 * @method \string fillPublicId()
 * @method \string getProvider()
 * @method \Bitrix\Im\Model\EO_Call setProvider(\string|\Bitrix\Main\DB\SqlExpression $provider)
 * @method bool hasProvider()
 * @method bool isProviderFilled()
 * @method bool isProviderChanged()
 * @method \string remindActualProvider()
 * @method \string requireProvider()
 * @method \Bitrix\Im\Model\EO_Call resetProvider()
 * @method \Bitrix\Im\Model\EO_Call unsetProvider()
 * @method \string fillProvider()
 * @method \string getEntityType()
 * @method \Bitrix\Im\Model\EO_Call setEntityType(\string|\Bitrix\Main\DB\SqlExpression $entityType)
 * @method bool hasEntityType()
 * @method bool isEntityTypeFilled()
 * @method bool isEntityTypeChanged()
 * @method \string remindActualEntityType()
 * @method \string requireEntityType()
 * @method \Bitrix\Im\Model\EO_Call resetEntityType()
 * @method \Bitrix\Im\Model\EO_Call unsetEntityType()
 * @method \string fillEntityType()
 * @method \string getEntityId()
 * @method \Bitrix\Im\Model\EO_Call setEntityId(\string|\Bitrix\Main\DB\SqlExpression $entityId)
 * @method bool hasEntityId()
 * @method bool isEntityIdFilled()
 * @method bool isEntityIdChanged()
 * @method \string remindActualEntityId()
 * @method \string requireEntityId()
 * @method \Bitrix\Im\Model\EO_Call resetEntityId()
 * @method \Bitrix\Im\Model\EO_Call unsetEntityId()
 * @method \string fillEntityId()
 * @method \int getParentId()
 * @method \Bitrix\Im\Model\EO_Call setParentId(\int|\Bitrix\Main\DB\SqlExpression $parentId)
 * @method bool hasParentId()
 * @method bool isParentIdFilled()
 * @method bool isParentIdChanged()
 * @method \int remindActualParentId()
 * @method \int requireParentId()
 * @method \Bitrix\Im\Model\EO_Call resetParentId()
 * @method \Bitrix\Im\Model\EO_Call unsetParentId()
 * @method \int fillParentId()
 * @method \string getState()
 * @method \Bitrix\Im\Model\EO_Call setState(\string|\Bitrix\Main\DB\SqlExpression $state)
 * @method bool hasState()
 * @method bool isStateFilled()
 * @method bool isStateChanged()
 * @method \string remindActualState()
 * @method \string requireState()
 * @method \Bitrix\Im\Model\EO_Call resetState()
 * @method \Bitrix\Im\Model\EO_Call unsetState()
 * @method \string fillState()
 * @method \Bitrix\Main\Type\DateTime getStartDate()
 * @method \Bitrix\Im\Model\EO_Call setStartDate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $startDate)
 * @method bool hasStartDate()
 * @method bool isStartDateFilled()
 * @method bool isStartDateChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualStartDate()
 * @method \Bitrix\Main\Type\DateTime requireStartDate()
 * @method \Bitrix\Im\Model\EO_Call resetStartDate()
 * @method \Bitrix\Im\Model\EO_Call unsetStartDate()
 * @method \Bitrix\Main\Type\DateTime fillStartDate()
 * @method \Bitrix\Main\Type\DateTime getEndDate()
 * @method \Bitrix\Im\Model\EO_Call setEndDate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $endDate)
 * @method bool hasEndDate()
 * @method bool isEndDateFilled()
 * @method bool isEndDateChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualEndDate()
 * @method \Bitrix\Main\Type\DateTime requireEndDate()
 * @method \Bitrix\Im\Model\EO_Call resetEndDate()
 * @method \Bitrix\Im\Model\EO_Call unsetEndDate()
 * @method \Bitrix\Main\Type\DateTime fillEndDate()
 * @method \int getChatId()
 * @method \Bitrix\Im\Model\EO_Call setChatId(\int|\Bitrix\Main\DB\SqlExpression $chatId)
 * @method bool hasChatId()
 * @method bool isChatIdFilled()
 * @method bool isChatIdChanged()
 * @method \int remindActualChatId()
 * @method \int requireChatId()
 * @method \Bitrix\Im\Model\EO_Call resetChatId()
 * @method \Bitrix\Im\Model\EO_Call unsetChatId()
 * @method \int fillChatId()
 * @method \string getLogUrl()
 * @method \Bitrix\Im\Model\EO_Call setLogUrl(\string|\Bitrix\Main\DB\SqlExpression $logUrl)
 * @method bool hasLogUrl()
 * @method bool isLogUrlFilled()
 * @method bool isLogUrlChanged()
 * @method \string remindActualLogUrl()
 * @method \string requireLogUrl()
 * @method \Bitrix\Im\Model\EO_Call resetLogUrl()
 * @method \Bitrix\Im\Model\EO_Call unsetLogUrl()
 * @method \string fillLogUrl()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_Call set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_Call reset($fieldName)
 * @method \Bitrix\Im\Model\EO_Call unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_Call wakeUp($data)
 */
class EO_Call
{
    /* @var \Bitrix\Im\Model\CallTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\CallTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_Call_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getTypeList()
 * @method \int[] fillType()
 * @method \int[] getInitiatorIdList()
 * @method \int[] fillInitiatorId()
 * @method \string[] getIsPublicList()
 * @method \string[] fillIsPublic()
 * @method \string[] getPublicIdList()
 * @method \string[] fillPublicId()
 * @method \string[] getProviderList()
 * @method \string[] fillProvider()
 * @method \string[] getEntityTypeList()
 * @method \string[] fillEntityType()
 * @method \string[] getEntityIdList()
 * @method \string[] fillEntityId()
 * @method \int[] getParentIdList()
 * @method \int[] fillParentId()
 * @method \string[] getStateList()
 * @method \string[] fillState()
 * @method \Bitrix\Main\Type\DateTime[] getStartDateList()
 * @method \Bitrix\Main\Type\DateTime[] fillStartDate()
 * @method \Bitrix\Main\Type\DateTime[] getEndDateList()
 * @method \Bitrix\Main\Type\DateTime[] fillEndDate()
 * @method \int[] getChatIdList()
 * @method \int[] fillChatId()
 * @method \string[] getLogUrlList()
 * @method \string[] fillLogUrl()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_Call $object)
 * @method bool has(\Bitrix\Im\Model\EO_Call $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Call getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Call[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_Call $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_Call_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_Call current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_Call_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\CallTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\CallTable';
}
/**
 * @method static EO_Call_Query query()
 * @method static EO_Call_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_Call_Result getById($id)
 * @method static EO_Call_Result getList(array $parameters = array())
 * @method static EO_Call_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_Call createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_Call_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_Call wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_Call_Collection wakeUpCollection($rows)
 */
class CallTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_Call_Result exec()
 * @method \Bitrix\Im\Model\EO_Call fetchObject()
 * @method \Bitrix\Im\Model\EO_Call_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_Call_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_Call fetchObject()
 * @method \Bitrix\Im\Model\EO_Call_Collection fetchCollection()
 */
class EO_Call_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_Call createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_Call_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_Call wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_Call_Collection wakeUpCollection($rows)
 */
class EO_Call_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_CallUser
 * @see \Bitrix\Im\Model\CallUserTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getCallId()
 * @method \Bitrix\Im\Model\EO_CallUser setCallId(\int|\Bitrix\Main\DB\SqlExpression $callId)
 * @method bool hasCallId()
 * @method bool isCallIdFilled()
 * @method bool isCallIdChanged()
 * @method \int getUserId()
 * @method \Bitrix\Im\Model\EO_CallUser setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
 * @method bool hasUserId()
 * @method bool isUserIdFilled()
 * @method bool isUserIdChanged()
 * @method \string getState()
 * @method \Bitrix\Im\Model\EO_CallUser setState(\string|\Bitrix\Main\DB\SqlExpression $state)
 * @method bool hasState()
 * @method bool isStateFilled()
 * @method bool isStateChanged()
 * @method \string remindActualState()
 * @method \string requireState()
 * @method \Bitrix\Im\Model\EO_CallUser resetState()
 * @method \Bitrix\Im\Model\EO_CallUser unsetState()
 * @method \string fillState()
 * @method \Bitrix\Main\Type\DateTime getLastSeen()
 * @method \Bitrix\Im\Model\EO_CallUser setLastSeen(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $lastSeen)
 * @method bool hasLastSeen()
 * @method bool isLastSeenFilled()
 * @method bool isLastSeenChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualLastSeen()
 * @method \Bitrix\Main\Type\DateTime requireLastSeen()
 * @method \Bitrix\Im\Model\EO_CallUser resetLastSeen()
 * @method \Bitrix\Im\Model\EO_CallUser unsetLastSeen()
 * @method \Bitrix\Main\Type\DateTime fillLastSeen()
 * @method \boolean getIsMobile()
 * @method \Bitrix\Im\Model\EO_CallUser setIsMobile(\boolean|\Bitrix\Main\DB\SqlExpression $isMobile)
 * @method bool hasIsMobile()
 * @method bool isIsMobileFilled()
 * @method bool isIsMobileChanged()
 * @method \boolean remindActualIsMobile()
 * @method \boolean requireIsMobile()
 * @method \Bitrix\Im\Model\EO_CallUser resetIsMobile()
 * @method \Bitrix\Im\Model\EO_CallUser unsetIsMobile()
 * @method \boolean fillIsMobile()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_CallUser set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_CallUser reset($fieldName)
 * @method \Bitrix\Im\Model\EO_CallUser unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_CallUser wakeUp($data)
 */
class EO_CallUser
{
    /* @var \Bitrix\Im\Model\CallUserTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\CallUserTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_CallUser_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getCallIdList()
 * @method \int[] getUserIdList()
 * @method \string[] getStateList()
 * @method \string[] fillState()
 * @method \Bitrix\Main\Type\DateTime[] getLastSeenList()
 * @method \Bitrix\Main\Type\DateTime[] fillLastSeen()
 * @method \boolean[] getIsMobileList()
 * @method \boolean[] fillIsMobile()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_CallUser $object)
 * @method bool has(\Bitrix\Im\Model\EO_CallUser $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_CallUser getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_CallUser[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_CallUser $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_CallUser_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_CallUser current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_CallUser_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\CallUserTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\CallUserTable';
}
/**
 * @method static EO_CallUser_Query query()
 * @method static EO_CallUser_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_CallUser_Result getById($id)
 * @method static EO_CallUser_Result getList(array $parameters = array())
 * @method static EO_CallUser_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_CallUser createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_CallUser_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_CallUser wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_CallUser_Collection wakeUpCollection($rows)
 */
class CallUserTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_CallUser_Result exec()
 * @method \Bitrix\Im\Model\EO_CallUser fetchObject()
 * @method \Bitrix\Im\Model\EO_CallUser_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_CallUser_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_CallUser fetchObject()
 * @method \Bitrix\Im\Model\EO_CallUser_Collection fetchCollection()
 */
class EO_CallUser_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_CallUser createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_CallUser_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_CallUser wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_CallUser_Collection wakeUpCollection($rows)
 */
class EO_CallUser_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_Chat
 * @see \Bitrix\Im\Model\ChatTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_Chat setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getParentId()
 * @method \Bitrix\Im\Model\EO_Chat setParentId(\int|\Bitrix\Main\DB\SqlExpression $parentId)
 * @method bool hasParentId()
 * @method bool isParentIdFilled()
 * @method bool isParentIdChanged()
 * @method \int remindActualParentId()
 * @method \int requireParentId()
 * @method \Bitrix\Im\Model\EO_Chat resetParentId()
 * @method \Bitrix\Im\Model\EO_Chat unsetParentId()
 * @method \int fillParentId()
 * @method \int getParentMid()
 * @method \Bitrix\Im\Model\EO_Chat setParentMid(\int|\Bitrix\Main\DB\SqlExpression $parentMid)
 * @method bool hasParentMid()
 * @method bool isParentMidFilled()
 * @method bool isParentMidChanged()
 * @method \int remindActualParentMid()
 * @method \int requireParentMid()
 * @method \Bitrix\Im\Model\EO_Chat resetParentMid()
 * @method \Bitrix\Im\Model\EO_Chat unsetParentMid()
 * @method \int fillParentMid()
 * @method \string getTitle()
 * @method \Bitrix\Im\Model\EO_Chat setTitle(\string|\Bitrix\Main\DB\SqlExpression $title)
 * @method bool hasTitle()
 * @method bool isTitleFilled()
 * @method bool isTitleChanged()
 * @method \string remindActualTitle()
 * @method \string requireTitle()
 * @method \Bitrix\Im\Model\EO_Chat resetTitle()
 * @method \Bitrix\Im\Model\EO_Chat unsetTitle()
 * @method \string fillTitle()
 * @method \string getDescription()
 * @method \Bitrix\Im\Model\EO_Chat setDescription(\string|\Bitrix\Main\DB\SqlExpression $description)
 * @method bool hasDescription()
 * @method bool isDescriptionFilled()
 * @method bool isDescriptionChanged()
 * @method \string remindActualDescription()
 * @method \string requireDescription()
 * @method \Bitrix\Im\Model\EO_Chat resetDescription()
 * @method \Bitrix\Im\Model\EO_Chat unsetDescription()
 * @method \string fillDescription()
 * @method \string getColor()
 * @method \Bitrix\Im\Model\EO_Chat setColor(\string|\Bitrix\Main\DB\SqlExpression $color)
 * @method bool hasColor()
 * @method bool isColorFilled()
 * @method bool isColorChanged()
 * @method \string remindActualColor()
 * @method \string requireColor()
 * @method \Bitrix\Im\Model\EO_Chat resetColor()
 * @method \Bitrix\Im\Model\EO_Chat unsetColor()
 * @method \string fillColor()
 * @method \string getType()
 * @method \Bitrix\Im\Model\EO_Chat setType(\string|\Bitrix\Main\DB\SqlExpression $type)
 * @method bool hasType()
 * @method bool isTypeFilled()
 * @method bool isTypeChanged()
 * @method \string remindActualType()
 * @method \string requireType()
 * @method \Bitrix\Im\Model\EO_Chat resetType()
 * @method \Bitrix\Im\Model\EO_Chat unsetType()
 * @method \string fillType()
 * @method \boolean getExtranet()
 * @method \Bitrix\Im\Model\EO_Chat setExtranet(\boolean|\Bitrix\Main\DB\SqlExpression $extranet)
 * @method bool hasExtranet()
 * @method bool isExtranetFilled()
 * @method bool isExtranetChanged()
 * @method \boolean remindActualExtranet()
 * @method \boolean requireExtranet()
 * @method \Bitrix\Im\Model\EO_Chat resetExtranet()
 * @method \Bitrix\Im\Model\EO_Chat unsetExtranet()
 * @method \boolean fillExtranet()
 * @method \int getAuthorId()
 * @method \Bitrix\Im\Model\EO_Chat setAuthorId(\int|\Bitrix\Main\DB\SqlExpression $authorId)
 * @method bool hasAuthorId()
 * @method bool isAuthorIdFilled()
 * @method bool isAuthorIdChanged()
 * @method \int remindActualAuthorId()
 * @method \int requireAuthorId()
 * @method \Bitrix\Im\Model\EO_Chat resetAuthorId()
 * @method \Bitrix\Im\Model\EO_Chat unsetAuthorId()
 * @method \int fillAuthorId()
 * @method \int getAvatar()
 * @method \Bitrix\Im\Model\EO_Chat setAvatar(\int|\Bitrix\Main\DB\SqlExpression $avatar)
 * @method bool hasAvatar()
 * @method bool isAvatarFilled()
 * @method bool isAvatarChanged()
 * @method \int remindActualAvatar()
 * @method \int requireAvatar()
 * @method \Bitrix\Im\Model\EO_Chat resetAvatar()
 * @method \Bitrix\Im\Model\EO_Chat unsetAvatar()
 * @method \int fillAvatar()
 * @method \int getCallType()
 * @method \Bitrix\Im\Model\EO_Chat setCallType(\int|\Bitrix\Main\DB\SqlExpression $callType)
 * @method bool hasCallType()
 * @method bool isCallTypeFilled()
 * @method bool isCallTypeChanged()
 * @method \int remindActualCallType()
 * @method \int requireCallType()
 * @method \Bitrix\Im\Model\EO_Chat resetCallType()
 * @method \Bitrix\Im\Model\EO_Chat unsetCallType()
 * @method \int fillCallType()
 * @method \string getCallNumber()
 * @method \Bitrix\Im\Model\EO_Chat setCallNumber(\string|\Bitrix\Main\DB\SqlExpression $callNumber)
 * @method bool hasCallNumber()
 * @method bool isCallNumberFilled()
 * @method bool isCallNumberChanged()
 * @method \string remindActualCallNumber()
 * @method \string requireCallNumber()
 * @method \Bitrix\Im\Model\EO_Chat resetCallNumber()
 * @method \Bitrix\Im\Model\EO_Chat unsetCallNumber()
 * @method \string fillCallNumber()
 * @method \string getEntityType()
 * @method \Bitrix\Im\Model\EO_Chat setEntityType(\string|\Bitrix\Main\DB\SqlExpression $entityType)
 * @method bool hasEntityType()
 * @method bool isEntityTypeFilled()
 * @method bool isEntityTypeChanged()
 * @method \string remindActualEntityType()
 * @method \string requireEntityType()
 * @method \Bitrix\Im\Model\EO_Chat resetEntityType()
 * @method \Bitrix\Im\Model\EO_Chat unsetEntityType()
 * @method \string fillEntityType()
 * @method \string getEntityId()
 * @method \Bitrix\Im\Model\EO_Chat setEntityId(\string|\Bitrix\Main\DB\SqlExpression $entityId)
 * @method bool hasEntityId()
 * @method bool isEntityIdFilled()
 * @method bool isEntityIdChanged()
 * @method \string remindActualEntityId()
 * @method \string requireEntityId()
 * @method \Bitrix\Im\Model\EO_Chat resetEntityId()
 * @method \Bitrix\Im\Model\EO_Chat unsetEntityId()
 * @method \string fillEntityId()
 * @method \string getEntityData1()
 * @method \Bitrix\Im\Model\EO_Chat setEntityData1(\string|\Bitrix\Main\DB\SqlExpression $entityData1)
 * @method bool hasEntityData1()
 * @method bool isEntityData1Filled()
 * @method bool isEntityData1Changed()
 * @method \string remindActualEntityData1()
 * @method \string requireEntityData1()
 * @method \Bitrix\Im\Model\EO_Chat resetEntityData1()
 * @method \Bitrix\Im\Model\EO_Chat unsetEntityData1()
 * @method \string fillEntityData1()
 * @method \string getEntityData2()
 * @method \Bitrix\Im\Model\EO_Chat setEntityData2(\string|\Bitrix\Main\DB\SqlExpression $entityData2)
 * @method bool hasEntityData2()
 * @method bool isEntityData2Filled()
 * @method bool isEntityData2Changed()
 * @method \string remindActualEntityData2()
 * @method \string requireEntityData2()
 * @method \Bitrix\Im\Model\EO_Chat resetEntityData2()
 * @method \Bitrix\Im\Model\EO_Chat unsetEntityData2()
 * @method \string fillEntityData2()
 * @method \string getEntityData3()
 * @method \Bitrix\Im\Model\EO_Chat setEntityData3(\string|\Bitrix\Main\DB\SqlExpression $entityData3)
 * @method bool hasEntityData3()
 * @method bool isEntityData3Filled()
 * @method bool isEntityData3Changed()
 * @method \string remindActualEntityData3()
 * @method \string requireEntityData3()
 * @method \Bitrix\Im\Model\EO_Chat resetEntityData3()
 * @method \Bitrix\Im\Model\EO_Chat unsetEntityData3()
 * @method \string fillEntityData3()
 * @method \Bitrix\Main\EO_User getAuthor()
 * @method \Bitrix\Main\EO_User remindActualAuthor()
 * @method \Bitrix\Main\EO_User requireAuthor()
 * @method \Bitrix\Im\Model\EO_Chat setAuthor(\Bitrix\Main\EO_User $object)
 * @method \Bitrix\Im\Model\EO_Chat resetAuthor()
 * @method \Bitrix\Im\Model\EO_Chat unsetAuthor()
 * @method bool hasAuthor()
 * @method bool isAuthorFilled()
 * @method bool isAuthorChanged()
 * @method \Bitrix\Main\EO_User fillAuthor()
 * @method \int getDiskFolderId()
 * @method \Bitrix\Im\Model\EO_Chat setDiskFolderId(\int|\Bitrix\Main\DB\SqlExpression $diskFolderId)
 * @method bool hasDiskFolderId()
 * @method bool isDiskFolderIdFilled()
 * @method bool isDiskFolderIdChanged()
 * @method \int remindActualDiskFolderId()
 * @method \int requireDiskFolderId()
 * @method \Bitrix\Im\Model\EO_Chat resetDiskFolderId()
 * @method \Bitrix\Im\Model\EO_Chat unsetDiskFolderId()
 * @method \int fillDiskFolderId()
 * @method \int getPinMessageId()
 * @method \Bitrix\Im\Model\EO_Chat setPinMessageId(\int|\Bitrix\Main\DB\SqlExpression $pinMessageId)
 * @method bool hasPinMessageId()
 * @method bool isPinMessageIdFilled()
 * @method bool isPinMessageIdChanged()
 * @method \int remindActualPinMessageId()
 * @method \int requirePinMessageId()
 * @method \Bitrix\Im\Model\EO_Chat resetPinMessageId()
 * @method \Bitrix\Im\Model\EO_Chat unsetPinMessageId()
 * @method \int fillPinMessageId()
 * @method \int getMessageCount()
 * @method \Bitrix\Im\Model\EO_Chat setMessageCount(\int|\Bitrix\Main\DB\SqlExpression $messageCount)
 * @method bool hasMessageCount()
 * @method bool isMessageCountFilled()
 * @method bool isMessageCountChanged()
 * @method \int remindActualMessageCount()
 * @method \int requireMessageCount()
 * @method \Bitrix\Im\Model\EO_Chat resetMessageCount()
 * @method \Bitrix\Im\Model\EO_Chat unsetMessageCount()
 * @method \int fillMessageCount()
 * @method \int getUserCount()
 * @method \Bitrix\Im\Model\EO_Chat setUserCount(\int|\Bitrix\Main\DB\SqlExpression $userCount)
 * @method bool hasUserCount()
 * @method bool isUserCountFilled()
 * @method bool isUserCountChanged()
 * @method \int remindActualUserCount()
 * @method \int requireUserCount()
 * @method \Bitrix\Im\Model\EO_Chat resetUserCount()
 * @method \Bitrix\Im\Model\EO_Chat unsetUserCount()
 * @method \int fillUserCount()
 * @method \int getPrevMessageId()
 * @method \Bitrix\Im\Model\EO_Chat setPrevMessageId(\int|\Bitrix\Main\DB\SqlExpression $prevMessageId)
 * @method bool hasPrevMessageId()
 * @method bool isPrevMessageIdFilled()
 * @method bool isPrevMessageIdChanged()
 * @method \int remindActualPrevMessageId()
 * @method \int requirePrevMessageId()
 * @method \Bitrix\Im\Model\EO_Chat resetPrevMessageId()
 * @method \Bitrix\Im\Model\EO_Chat unsetPrevMessageId()
 * @method \int fillPrevMessageId()
 * @method \int getLastMessageId()
 * @method \Bitrix\Im\Model\EO_Chat setLastMessageId(\int|\Bitrix\Main\DB\SqlExpression $lastMessageId)
 * @method bool hasLastMessageId()
 * @method bool isLastMessageIdFilled()
 * @method bool isLastMessageIdChanged()
 * @method \int remindActualLastMessageId()
 * @method \int requireLastMessageId()
 * @method \Bitrix\Im\Model\EO_Chat resetLastMessageId()
 * @method \Bitrix\Im\Model\EO_Chat unsetLastMessageId()
 * @method \int fillLastMessageId()
 * @method \string getLastMessageStatus()
 * @method \Bitrix\Im\Model\EO_Chat setLastMessageStatus(\string|\Bitrix\Main\DB\SqlExpression $lastMessageStatus)
 * @method bool hasLastMessageStatus()
 * @method bool isLastMessageStatusFilled()
 * @method bool isLastMessageStatusChanged()
 * @method \string remindActualLastMessageStatus()
 * @method \string requireLastMessageStatus()
 * @method \Bitrix\Im\Model\EO_Chat resetLastMessageStatus()
 * @method \Bitrix\Im\Model\EO_Chat unsetLastMessageStatus()
 * @method \string fillLastMessageStatus()
 * @method \Bitrix\Main\Type\DateTime getDateCreate()
 * @method \Bitrix\Im\Model\EO_Chat setDateCreate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $dateCreate)
 * @method bool hasDateCreate()
 * @method bool isDateCreateFilled()
 * @method bool isDateCreateChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualDateCreate()
 * @method \Bitrix\Main\Type\DateTime requireDateCreate()
 * @method \Bitrix\Im\Model\EO_Chat resetDateCreate()
 * @method \Bitrix\Im\Model\EO_Chat unsetDateCreate()
 * @method \Bitrix\Main\Type\DateTime fillDateCreate()
 * @method \Bitrix\Im\Model\EO_ChatIndex getIndex()
 * @method \Bitrix\Im\Model\EO_ChatIndex remindActualIndex()
 * @method \Bitrix\Im\Model\EO_ChatIndex requireIndex()
 * @method \Bitrix\Im\Model\EO_Chat setIndex(\Bitrix\Im\Model\EO_ChatIndex $object)
 * @method \Bitrix\Im\Model\EO_Chat resetIndex()
 * @method \Bitrix\Im\Model\EO_Chat unsetIndex()
 * @method bool hasIndex()
 * @method bool isIndexFilled()
 * @method bool isIndexChanged()
 * @method \Bitrix\Im\Model\EO_ChatIndex fillIndex()
 * @method \Bitrix\Im\Model\EO_Alias getAlias()
 * @method \Bitrix\Im\Model\EO_Alias remindActualAlias()
 * @method \Bitrix\Im\Model\EO_Alias requireAlias()
 * @method \Bitrix\Im\Model\EO_Chat setAlias(\Bitrix\Im\Model\EO_Alias $object)
 * @method \Bitrix\Im\Model\EO_Chat resetAlias()
 * @method \Bitrix\Im\Model\EO_Chat unsetAlias()
 * @method bool hasAlias()
 * @method bool isAliasFilled()
 * @method bool isAliasChanged()
 * @method \Bitrix\Im\Model\EO_Alias fillAlias()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_Chat set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_Chat reset($fieldName)
 * @method \Bitrix\Im\Model\EO_Chat unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_Chat wakeUp($data)
 */
class EO_Chat
{
    /* @var \Bitrix\Im\Model\ChatTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\ChatTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_Chat_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getParentIdList()
 * @method \int[] fillParentId()
 * @method \int[] getParentMidList()
 * @method \int[] fillParentMid()
 * @method \string[] getTitleList()
 * @method \string[] fillTitle()
 * @method \string[] getDescriptionList()
 * @method \string[] fillDescription()
 * @method \string[] getColorList()
 * @method \string[] fillColor()
 * @method \string[] getTypeList()
 * @method \string[] fillType()
 * @method \boolean[] getExtranetList()
 * @method \boolean[] fillExtranet()
 * @method \int[] getAuthorIdList()
 * @method \int[] fillAuthorId()
 * @method \int[] getAvatarList()
 * @method \int[] fillAvatar()
 * @method \int[] getCallTypeList()
 * @method \int[] fillCallType()
 * @method \string[] getCallNumberList()
 * @method \string[] fillCallNumber()
 * @method \string[] getEntityTypeList()
 * @method \string[] fillEntityType()
 * @method \string[] getEntityIdList()
 * @method \string[] fillEntityId()
 * @method \string[] getEntityData1List()
 * @method \string[] fillEntityData1()
 * @method \string[] getEntityData2List()
 * @method \string[] fillEntityData2()
 * @method \string[] getEntityData3List()
 * @method \string[] fillEntityData3()
 * @method \Bitrix\Main\EO_User[] getAuthorList()
 * @method \Bitrix\Im\Model\EO_Chat_Collection getAuthorCollection()
 * @method \Bitrix\Main\EO_User_Collection fillAuthor()
 * @method \int[] getDiskFolderIdList()
 * @method \int[] fillDiskFolderId()
 * @method \int[] getPinMessageIdList()
 * @method \int[] fillPinMessageId()
 * @method \int[] getMessageCountList()
 * @method \int[] fillMessageCount()
 * @method \int[] getUserCountList()
 * @method \int[] fillUserCount()
 * @method \int[] getPrevMessageIdList()
 * @method \int[] fillPrevMessageId()
 * @method \int[] getLastMessageIdList()
 * @method \int[] fillLastMessageId()
 * @method \string[] getLastMessageStatusList()
 * @method \string[] fillLastMessageStatus()
 * @method \Bitrix\Main\Type\DateTime[] getDateCreateList()
 * @method \Bitrix\Main\Type\DateTime[] fillDateCreate()
 * @method \Bitrix\Im\Model\EO_ChatIndex[] getIndexList()
 * @method \Bitrix\Im\Model\EO_Chat_Collection getIndexCollection()
 * @method \Bitrix\Im\Model\EO_ChatIndex_Collection fillIndex()
 * @method \Bitrix\Im\Model\EO_Alias[] getAliasList()
 * @method \Bitrix\Im\Model\EO_Chat_Collection getAliasCollection()
 * @method \Bitrix\Im\Model\EO_Alias_Collection fillAlias()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_Chat $object)
 * @method bool has(\Bitrix\Im\Model\EO_Chat $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Chat getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Chat[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_Chat $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_Chat_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_Chat current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_Chat_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\ChatTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\ChatTable';
}
/**
 * @method static EO_Chat_Query query()
 * @method static EO_Chat_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_Chat_Result getById($id)
 * @method static EO_Chat_Result getList(array $parameters = array())
 * @method static EO_Chat_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_Chat createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_Chat_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_Chat wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_Chat_Collection wakeUpCollection($rows)
 */
class ChatTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_Chat_Result exec()
 * @method \Bitrix\Im\Model\EO_Chat fetchObject()
 * @method \Bitrix\Im\Model\EO_Chat_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_Chat_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_Chat fetchObject()
 * @method \Bitrix\Im\Model\EO_Chat_Collection fetchCollection()
 */
class EO_Chat_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_Chat createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_Chat_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_Chat wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_Chat_Collection wakeUpCollection($rows)
 */
class EO_Chat_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_ChatIndex
 * @see \Bitrix\Im\Model\ChatIndexTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getChatId()
 * @method \Bitrix\Im\Model\EO_ChatIndex setChatId(\int|\Bitrix\Main\DB\SqlExpression $chatId)
 * @method bool hasChatId()
 * @method bool isChatIdFilled()
 * @method bool isChatIdChanged()
 * @method \string getSearchTitle()
 * @method \Bitrix\Im\Model\EO_ChatIndex setSearchTitle(\string|\Bitrix\Main\DB\SqlExpression $searchTitle)
 * @method bool hasSearchTitle()
 * @method bool isSearchTitleFilled()
 * @method bool isSearchTitleChanged()
 * @method \string remindActualSearchTitle()
 * @method \string requireSearchTitle()
 * @method \Bitrix\Im\Model\EO_ChatIndex resetSearchTitle()
 * @method \Bitrix\Im\Model\EO_ChatIndex unsetSearchTitle()
 * @method \string fillSearchTitle()
 * @method \string getSearchContent()
 * @method \Bitrix\Im\Model\EO_ChatIndex setSearchContent(\string|\Bitrix\Main\DB\SqlExpression $searchContent)
 * @method bool hasSearchContent()
 * @method bool isSearchContentFilled()
 * @method bool isSearchContentChanged()
 * @method \string remindActualSearchContent()
 * @method \string requireSearchContent()
 * @method \Bitrix\Im\Model\EO_ChatIndex resetSearchContent()
 * @method \Bitrix\Im\Model\EO_ChatIndex unsetSearchContent()
 * @method \string fillSearchContent()
 * @method \string getSearchUsers()
 * @method \Bitrix\Im\Model\EO_ChatIndex setSearchUsers(\string|\Bitrix\Main\DB\SqlExpression $searchUsers)
 * @method bool hasSearchUsers()
 * @method bool isSearchUsersFilled()
 * @method bool isSearchUsersChanged()
 * @method \string remindActualSearchUsers()
 * @method \string requireSearchUsers()
 * @method \Bitrix\Im\Model\EO_ChatIndex resetSearchUsers()
 * @method \Bitrix\Im\Model\EO_ChatIndex unsetSearchUsers()
 * @method \string fillSearchUsers()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_ChatIndex set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_ChatIndex reset($fieldName)
 * @method \Bitrix\Im\Model\EO_ChatIndex unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_ChatIndex wakeUp($data)
 */
class EO_ChatIndex
{
    /* @var \Bitrix\Im\Model\ChatIndexTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\ChatIndexTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_ChatIndex_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getChatIdList()
 * @method \string[] getSearchTitleList()
 * @method \string[] fillSearchTitle()
 * @method \string[] getSearchContentList()
 * @method \string[] fillSearchContent()
 * @method \string[] getSearchUsersList()
 * @method \string[] fillSearchUsers()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_ChatIndex $object)
 * @method bool has(\Bitrix\Im\Model\EO_ChatIndex $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_ChatIndex getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_ChatIndex[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_ChatIndex $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_ChatIndex_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_ChatIndex current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_ChatIndex_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\ChatIndexTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\ChatIndexTable';
}
/**
 * @method static EO_ChatIndex_Query query()
 * @method static EO_ChatIndex_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_ChatIndex_Result getById($id)
 * @method static EO_ChatIndex_Result getList(array $parameters = array())
 * @method static EO_ChatIndex_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_ChatIndex createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_ChatIndex_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_ChatIndex wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_ChatIndex_Collection wakeUpCollection($rows)
 */
class ChatIndexTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_ChatIndex_Result exec()
 * @method \Bitrix\Im\Model\EO_ChatIndex fetchObject()
 * @method \Bitrix\Im\Model\EO_ChatIndex_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_ChatIndex_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_ChatIndex fetchObject()
 * @method \Bitrix\Im\Model\EO_ChatIndex_Collection fetchCollection()
 */
class EO_ChatIndex_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_ChatIndex createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_ChatIndex_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_ChatIndex wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_ChatIndex_Collection wakeUpCollection($rows)
 */
class EO_ChatIndex_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_Command
 * @see \Bitrix\Im\Model\CommandTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_Command setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getBotId()
 * @method \Bitrix\Im\Model\EO_Command setBotId(\int|\Bitrix\Main\DB\SqlExpression $botId)
 * @method bool hasBotId()
 * @method bool isBotIdFilled()
 * @method bool isBotIdChanged()
 * @method \int remindActualBotId()
 * @method \int requireBotId()
 * @method \Bitrix\Im\Model\EO_Command resetBotId()
 * @method \Bitrix\Im\Model\EO_Command unsetBotId()
 * @method \int fillBotId()
 * @method \string getAppId()
 * @method \Bitrix\Im\Model\EO_Command setAppId(\string|\Bitrix\Main\DB\SqlExpression $appId)
 * @method bool hasAppId()
 * @method bool isAppIdFilled()
 * @method bool isAppIdChanged()
 * @method \string remindActualAppId()
 * @method \string requireAppId()
 * @method \Bitrix\Im\Model\EO_Command resetAppId()
 * @method \Bitrix\Im\Model\EO_Command unsetAppId()
 * @method \string fillAppId()
 * @method \string getCommand()
 * @method \Bitrix\Im\Model\EO_Command setCommand(\string|\Bitrix\Main\DB\SqlExpression $command)
 * @method bool hasCommand()
 * @method bool isCommandFilled()
 * @method bool isCommandChanged()
 * @method \string remindActualCommand()
 * @method \string requireCommand()
 * @method \Bitrix\Im\Model\EO_Command resetCommand()
 * @method \Bitrix\Im\Model\EO_Command unsetCommand()
 * @method \string fillCommand()
 * @method \boolean getCommon()
 * @method \Bitrix\Im\Model\EO_Command setCommon(\boolean|\Bitrix\Main\DB\SqlExpression $common)
 * @method bool hasCommon()
 * @method bool isCommonFilled()
 * @method bool isCommonChanged()
 * @method \boolean remindActualCommon()
 * @method \boolean requireCommon()
 * @method \Bitrix\Im\Model\EO_Command resetCommon()
 * @method \Bitrix\Im\Model\EO_Command unsetCommon()
 * @method \boolean fillCommon()
 * @method \boolean getHidden()
 * @method \Bitrix\Im\Model\EO_Command setHidden(\boolean|\Bitrix\Main\DB\SqlExpression $hidden)
 * @method bool hasHidden()
 * @method bool isHiddenFilled()
 * @method bool isHiddenChanged()
 * @method \boolean remindActualHidden()
 * @method \boolean requireHidden()
 * @method \Bitrix\Im\Model\EO_Command resetHidden()
 * @method \Bitrix\Im\Model\EO_Command unsetHidden()
 * @method \boolean fillHidden()
 * @method \boolean getExtranetSupport()
 * @method \Bitrix\Im\Model\EO_Command setExtranetSupport(\boolean|\Bitrix\Main\DB\SqlExpression $extranetSupport)
 * @method bool hasExtranetSupport()
 * @method bool isExtranetSupportFilled()
 * @method bool isExtranetSupportChanged()
 * @method \boolean remindActualExtranetSupport()
 * @method \boolean requireExtranetSupport()
 * @method \Bitrix\Im\Model\EO_Command resetExtranetSupport()
 * @method \Bitrix\Im\Model\EO_Command unsetExtranetSupport()
 * @method \boolean fillExtranetSupport()
 * @method \boolean getSonetSupport()
 * @method \Bitrix\Im\Model\EO_Command setSonetSupport(\boolean|\Bitrix\Main\DB\SqlExpression $sonetSupport)
 * @method bool hasSonetSupport()
 * @method bool isSonetSupportFilled()
 * @method bool isSonetSupportChanged()
 * @method \boolean remindActualSonetSupport()
 * @method \boolean requireSonetSupport()
 * @method \Bitrix\Im\Model\EO_Command resetSonetSupport()
 * @method \Bitrix\Im\Model\EO_Command unsetSonetSupport()
 * @method \boolean fillSonetSupport()
 * @method \string getClass()
 * @method \Bitrix\Im\Model\EO_Command setClass(\string|\Bitrix\Main\DB\SqlExpression $class)
 * @method bool hasClass()
 * @method bool isClassFilled()
 * @method bool isClassChanged()
 * @method \string remindActualClass()
 * @method \string requireClass()
 * @method \Bitrix\Im\Model\EO_Command resetClass()
 * @method \Bitrix\Im\Model\EO_Command unsetClass()
 * @method \string fillClass()
 * @method \string getMethodCommandAdd()
 * @method \Bitrix\Im\Model\EO_Command setMethodCommandAdd(\string|\Bitrix\Main\DB\SqlExpression $methodCommandAdd)
 * @method bool hasMethodCommandAdd()
 * @method bool isMethodCommandAddFilled()
 * @method bool isMethodCommandAddChanged()
 * @method \string remindActualMethodCommandAdd()
 * @method \string requireMethodCommandAdd()
 * @method \Bitrix\Im\Model\EO_Command resetMethodCommandAdd()
 * @method \Bitrix\Im\Model\EO_Command unsetMethodCommandAdd()
 * @method \string fillMethodCommandAdd()
 * @method \string getMethodLangGet()
 * @method \Bitrix\Im\Model\EO_Command setMethodLangGet(\string|\Bitrix\Main\DB\SqlExpression $methodLangGet)
 * @method bool hasMethodLangGet()
 * @method bool isMethodLangGetFilled()
 * @method bool isMethodLangGetChanged()
 * @method \string remindActualMethodLangGet()
 * @method \string requireMethodLangGet()
 * @method \Bitrix\Im\Model\EO_Command resetMethodLangGet()
 * @method \Bitrix\Im\Model\EO_Command unsetMethodLangGet()
 * @method \string fillMethodLangGet()
 * @method \string getModuleId()
 * @method \Bitrix\Im\Model\EO_Command setModuleId(\string|\Bitrix\Main\DB\SqlExpression $moduleId)
 * @method bool hasModuleId()
 * @method bool isModuleIdFilled()
 * @method bool isModuleIdChanged()
 * @method \string remindActualModuleId()
 * @method \string requireModuleId()
 * @method \Bitrix\Im\Model\EO_Command resetModuleId()
 * @method \Bitrix\Im\Model\EO_Command unsetModuleId()
 * @method \string fillModuleId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_Command set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_Command reset($fieldName)
 * @method \Bitrix\Im\Model\EO_Command unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_Command wakeUp($data)
 */
class EO_Command
{
    /* @var \Bitrix\Im\Model\CommandTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\CommandTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_Command_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getBotIdList()
 * @method \int[] fillBotId()
 * @method \string[] getAppIdList()
 * @method \string[] fillAppId()
 * @method \string[] getCommandList()
 * @method \string[] fillCommand()
 * @method \boolean[] getCommonList()
 * @method \boolean[] fillCommon()
 * @method \boolean[] getHiddenList()
 * @method \boolean[] fillHidden()
 * @method \boolean[] getExtranetSupportList()
 * @method \boolean[] fillExtranetSupport()
 * @method \boolean[] getSonetSupportList()
 * @method \boolean[] fillSonetSupport()
 * @method \string[] getClassList()
 * @method \string[] fillClass()
 * @method \string[] getMethodCommandAddList()
 * @method \string[] fillMethodCommandAdd()
 * @method \string[] getMethodLangGetList()
 * @method \string[] fillMethodLangGet()
 * @method \string[] getModuleIdList()
 * @method \string[] fillModuleId()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_Command $object)
 * @method bool has(\Bitrix\Im\Model\EO_Command $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Command getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Command[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_Command $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_Command_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_Command current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_Command_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\CommandTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\CommandTable';
}
/**
 * @method static EO_Command_Query query()
 * @method static EO_Command_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_Command_Result getById($id)
 * @method static EO_Command_Result getList(array $parameters = array())
 * @method static EO_Command_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_Command createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_Command_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_Command wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_Command_Collection wakeUpCollection($rows)
 */
class CommandTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_Command_Result exec()
 * @method \Bitrix\Im\Model\EO_Command fetchObject()
 * @method \Bitrix\Im\Model\EO_Command_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_Command_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_Command fetchObject()
 * @method \Bitrix\Im\Model\EO_Command_Collection fetchCollection()
 */
class EO_Command_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_Command createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_Command_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_Command wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_Command_Collection wakeUpCollection($rows)
 */
class EO_Command_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_CommandLang
 * @see \Bitrix\Im\Model\CommandLangTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_CommandLang setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getCommandId()
 * @method \Bitrix\Im\Model\EO_CommandLang setCommandId(\int|\Bitrix\Main\DB\SqlExpression $commandId)
 * @method bool hasCommandId()
 * @method bool isCommandIdFilled()
 * @method bool isCommandIdChanged()
 * @method \int remindActualCommandId()
 * @method \int requireCommandId()
 * @method \Bitrix\Im\Model\EO_CommandLang resetCommandId()
 * @method \Bitrix\Im\Model\EO_CommandLang unsetCommandId()
 * @method \int fillCommandId()
 * @method \string getLanguageId()
 * @method \Bitrix\Im\Model\EO_CommandLang setLanguageId(\string|\Bitrix\Main\DB\SqlExpression $languageId)
 * @method bool hasLanguageId()
 * @method bool isLanguageIdFilled()
 * @method bool isLanguageIdChanged()
 * @method \string remindActualLanguageId()
 * @method \string requireLanguageId()
 * @method \Bitrix\Im\Model\EO_CommandLang resetLanguageId()
 * @method \Bitrix\Im\Model\EO_CommandLang unsetLanguageId()
 * @method \string fillLanguageId()
 * @method \string getTitle()
 * @method \Bitrix\Im\Model\EO_CommandLang setTitle(\string|\Bitrix\Main\DB\SqlExpression $title)
 * @method bool hasTitle()
 * @method bool isTitleFilled()
 * @method bool isTitleChanged()
 * @method \string remindActualTitle()
 * @method \string requireTitle()
 * @method \Bitrix\Im\Model\EO_CommandLang resetTitle()
 * @method \Bitrix\Im\Model\EO_CommandLang unsetTitle()
 * @method \string fillTitle()
 * @method \string getParams()
 * @method \Bitrix\Im\Model\EO_CommandLang setParams(\string|\Bitrix\Main\DB\SqlExpression $params)
 * @method bool hasParams()
 * @method bool isParamsFilled()
 * @method bool isParamsChanged()
 * @method \string remindActualParams()
 * @method \string requireParams()
 * @method \Bitrix\Im\Model\EO_CommandLang resetParams()
 * @method \Bitrix\Im\Model\EO_CommandLang unsetParams()
 * @method \string fillParams()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_CommandLang set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_CommandLang reset($fieldName)
 * @method \Bitrix\Im\Model\EO_CommandLang unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_CommandLang wakeUp($data)
 */
class EO_CommandLang
{
    /* @var \Bitrix\Im\Model\CommandLangTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\CommandLangTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_CommandLang_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getCommandIdList()
 * @method \int[] fillCommandId()
 * @method \string[] getLanguageIdList()
 * @method \string[] fillLanguageId()
 * @method \string[] getTitleList()
 * @method \string[] fillTitle()
 * @method \string[] getParamsList()
 * @method \string[] fillParams()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_CommandLang $object)
 * @method bool has(\Bitrix\Im\Model\EO_CommandLang $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_CommandLang getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_CommandLang[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_CommandLang $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_CommandLang_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_CommandLang current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_CommandLang_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\CommandLangTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\CommandLangTable';
}
/**
 * @method static EO_CommandLang_Query query()
 * @method static EO_CommandLang_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_CommandLang_Result getById($id)
 * @method static EO_CommandLang_Result getList(array $parameters = array())
 * @method static EO_CommandLang_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_CommandLang createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_CommandLang_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_CommandLang wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_CommandLang_Collection wakeUpCollection($rows)
 */
class CommandLangTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_CommandLang_Result exec()
 * @method \Bitrix\Im\Model\EO_CommandLang fetchObject()
 * @method \Bitrix\Im\Model\EO_CommandLang_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_CommandLang_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_CommandLang fetchObject()
 * @method \Bitrix\Im\Model\EO_CommandLang_Collection fetchCollection()
 */
class EO_CommandLang_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_CommandLang createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_CommandLang_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_CommandLang wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_CommandLang_Collection wakeUpCollection($rows)
 */
class EO_CommandLang_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_ExternalAvatar
 * @see \Bitrix\Im\Model\ExternalAvatarTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \string getLinkMd5()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar setLinkMd5(\string|\Bitrix\Main\DB\SqlExpression $linkMd5)
 * @method bool hasLinkMd5()
 * @method bool isLinkMd5Filled()
 * @method bool isLinkMd5Changed()
 * @method \string remindActualLinkMd5()
 * @method \string requireLinkMd5()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar resetLinkMd5()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar unsetLinkMd5()
 * @method \string fillLinkMd5()
 * @method \int getAvatarId()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar setAvatarId(\int|\Bitrix\Main\DB\SqlExpression $avatarId)
 * @method bool hasAvatarId()
 * @method bool isAvatarIdFilled()
 * @method bool isAvatarIdChanged()
 * @method \int remindActualAvatarId()
 * @method \int requireAvatarId()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar resetAvatarId()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar unsetAvatarId()
 * @method \int fillAvatarId()
 * @method \Bitrix\Main\EO_File getFile()
 * @method \Bitrix\Main\EO_File remindActualFile()
 * @method \Bitrix\Main\EO_File requireFile()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar setFile(\Bitrix\Main\EO_File $object)
 * @method \Bitrix\Im\Model\EO_ExternalAvatar resetFile()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar unsetFile()
 * @method bool hasFile()
 * @method bool isFileFilled()
 * @method bool isFileChanged()
 * @method \Bitrix\Main\EO_File fillFile()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_ExternalAvatar set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_ExternalAvatar reset($fieldName)
 * @method \Bitrix\Im\Model\EO_ExternalAvatar unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_ExternalAvatar wakeUp($data)
 */
class EO_ExternalAvatar
{
    /* @var \Bitrix\Im\Model\ExternalAvatarTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\ExternalAvatarTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_ExternalAvatar_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \string[] getLinkMd5List()
 * @method \string[] fillLinkMd5()
 * @method \int[] getAvatarIdList()
 * @method \int[] fillAvatarId()
 * @method \Bitrix\Main\EO_File[] getFileList()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar_Collection getFileCollection()
 * @method \Bitrix\Main\EO_File_Collection fillFile()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_ExternalAvatar $object)
 * @method bool has(\Bitrix\Im\Model\EO_ExternalAvatar $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_ExternalAvatar getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_ExternalAvatar[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_ExternalAvatar $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_ExternalAvatar_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_ExternalAvatar current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_ExternalAvatar_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\ExternalAvatarTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\ExternalAvatarTable';
}
/**
 * @method static EO_ExternalAvatar_Query query()
 * @method static EO_ExternalAvatar_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_ExternalAvatar_Result getById($id)
 * @method static EO_ExternalAvatar_Result getList(array $parameters = array())
 * @method static EO_ExternalAvatar_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_ExternalAvatar createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_ExternalAvatar_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_ExternalAvatar wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_ExternalAvatar_Collection wakeUpCollection($rows)
 */
class ExternalAvatarTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_ExternalAvatar_Result exec()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar fetchObject()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_ExternalAvatar_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_ExternalAvatar fetchObject()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar_Collection fetchCollection()
 */
class EO_ExternalAvatar_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_ExternalAvatar createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_ExternalAvatar_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_ExternalAvatar wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_ExternalAvatar_Collection wakeUpCollection($rows)
 */
class EO_ExternalAvatar_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_LastSearch
 * @see \Bitrix\Im\Model\LastSearchTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_LastSearch setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getUserId()
 * @method \Bitrix\Im\Model\EO_LastSearch setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
 * @method bool hasUserId()
 * @method bool isUserIdFilled()
 * @method bool isUserIdChanged()
 * @method \int remindActualUserId()
 * @method \int requireUserId()
 * @method \Bitrix\Im\Model\EO_LastSearch resetUserId()
 * @method \Bitrix\Im\Model\EO_LastSearch unsetUserId()
 * @method \int fillUserId()
 * @method \string getDialogId()
 * @method \Bitrix\Im\Model\EO_LastSearch setDialogId(\string|\Bitrix\Main\DB\SqlExpression $dialogId)
 * @method bool hasDialogId()
 * @method bool isDialogIdFilled()
 * @method bool isDialogIdChanged()
 * @method \string remindActualDialogId()
 * @method \string requireDialogId()
 * @method \Bitrix\Im\Model\EO_LastSearch resetDialogId()
 * @method \Bitrix\Im\Model\EO_LastSearch unsetDialogId()
 * @method \string fillDialogId()
 * @method \int getItemRid()
 * @method \Bitrix\Im\Model\EO_LastSearch setItemRid(\int|\Bitrix\Main\DB\SqlExpression $itemRid)
 * @method bool hasItemRid()
 * @method bool isItemRidFilled()
 * @method bool isItemRidChanged()
 * @method \int remindActualItemRid()
 * @method \int requireItemRid()
 * @method \Bitrix\Im\Model\EO_LastSearch resetItemRid()
 * @method \Bitrix\Im\Model\EO_LastSearch unsetItemRid()
 * @method \int fillItemRid()
 * @method \int getItemCid()
 * @method \Bitrix\Im\Model\EO_LastSearch setItemCid(\int|\Bitrix\Main\DB\SqlExpression $itemCid)
 * @method bool hasItemCid()
 * @method bool isItemCidFilled()
 * @method bool isItemCidChanged()
 * @method \int remindActualItemCid()
 * @method \int requireItemCid()
 * @method \Bitrix\Im\Model\EO_LastSearch resetItemCid()
 * @method \Bitrix\Im\Model\EO_LastSearch unsetItemCid()
 * @method \int fillItemCid()
 * @method \Bitrix\Im\Model\EO_Relation getRelation()
 * @method \Bitrix\Im\Model\EO_Relation remindActualRelation()
 * @method \Bitrix\Im\Model\EO_Relation requireRelation()
 * @method \Bitrix\Im\Model\EO_LastSearch setRelation(\Bitrix\Im\Model\EO_Relation $object)
 * @method \Bitrix\Im\Model\EO_LastSearch resetRelation()
 * @method \Bitrix\Im\Model\EO_LastSearch unsetRelation()
 * @method bool hasRelation()
 * @method bool isRelationFilled()
 * @method bool isRelationChanged()
 * @method \Bitrix\Im\Model\EO_Relation fillRelation()
 * @method \Bitrix\Im\Model\EO_Chat getChat()
 * @method \Bitrix\Im\Model\EO_Chat remindActualChat()
 * @method \Bitrix\Im\Model\EO_Chat requireChat()
 * @method \Bitrix\Im\Model\EO_LastSearch setChat(\Bitrix\Im\Model\EO_Chat $object)
 * @method \Bitrix\Im\Model\EO_LastSearch resetChat()
 * @method \Bitrix\Im\Model\EO_LastSearch unsetChat()
 * @method bool hasChat()
 * @method bool isChatFilled()
 * @method bool isChatChanged()
 * @method \Bitrix\Im\Model\EO_Chat fillChat()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_LastSearch set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_LastSearch reset($fieldName)
 * @method \Bitrix\Im\Model\EO_LastSearch unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_LastSearch wakeUp($data)
 */
class EO_LastSearch
{
    /* @var \Bitrix\Im\Model\LastSearchTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\LastSearchTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_LastSearch_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getUserIdList()
 * @method \int[] fillUserId()
 * @method \string[] getDialogIdList()
 * @method \string[] fillDialogId()
 * @method \int[] getItemRidList()
 * @method \int[] fillItemRid()
 * @method \int[] getItemCidList()
 * @method \int[] fillItemCid()
 * @method \Bitrix\Im\Model\EO_Relation[] getRelationList()
 * @method \Bitrix\Im\Model\EO_LastSearch_Collection getRelationCollection()
 * @method \Bitrix\Im\Model\EO_Relation_Collection fillRelation()
 * @method \Bitrix\Im\Model\EO_Chat[] getChatList()
 * @method \Bitrix\Im\Model\EO_LastSearch_Collection getChatCollection()
 * @method \Bitrix\Im\Model\EO_Chat_Collection fillChat()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_LastSearch $object)
 * @method bool has(\Bitrix\Im\Model\EO_LastSearch $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_LastSearch getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_LastSearch[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_LastSearch $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_LastSearch_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_LastSearch current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_LastSearch_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\LastSearchTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\LastSearchTable';
}
/**
 * @method static EO_LastSearch_Query query()
 * @method static EO_LastSearch_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_LastSearch_Result getById($id)
 * @method static EO_LastSearch_Result getList(array $parameters = array())
 * @method static EO_LastSearch_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_LastSearch createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_LastSearch_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_LastSearch wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_LastSearch_Collection wakeUpCollection($rows)
 */
class LastSearchTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_LastSearch_Result exec()
 * @method \Bitrix\Im\Model\EO_LastSearch fetchObject()
 * @method \Bitrix\Im\Model\EO_LastSearch_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_LastSearch_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_LastSearch fetchObject()
 * @method \Bitrix\Im\Model\EO_LastSearch_Collection fetchCollection()
 */
class EO_LastSearch_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_LastSearch createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_LastSearch_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_LastSearch wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_LastSearch_Collection wakeUpCollection($rows)
 */
class EO_LastSearch_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_Message
 * @see \Bitrix\Im\Model\MessageTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_Message setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getChatId()
 * @method \Bitrix\Im\Model\EO_Message setChatId(\int|\Bitrix\Main\DB\SqlExpression $chatId)
 * @method bool hasChatId()
 * @method bool isChatIdFilled()
 * @method bool isChatIdChanged()
 * @method \int remindActualChatId()
 * @method \int requireChatId()
 * @method \Bitrix\Im\Model\EO_Message resetChatId()
 * @method \Bitrix\Im\Model\EO_Message unsetChatId()
 * @method \int fillChatId()
 * @method \int getAuthorId()
 * @method \Bitrix\Im\Model\EO_Message setAuthorId(\int|\Bitrix\Main\DB\SqlExpression $authorId)
 * @method bool hasAuthorId()
 * @method bool isAuthorIdFilled()
 * @method bool isAuthorIdChanged()
 * @method \int remindActualAuthorId()
 * @method \int requireAuthorId()
 * @method \Bitrix\Im\Model\EO_Message resetAuthorId()
 * @method \Bitrix\Im\Model\EO_Message unsetAuthorId()
 * @method \int fillAuthorId()
 * @method \string getMessage()
 * @method \Bitrix\Im\Model\EO_Message setMessage(\string|\Bitrix\Main\DB\SqlExpression $message)
 * @method bool hasMessage()
 * @method bool isMessageFilled()
 * @method bool isMessageChanged()
 * @method \string remindActualMessage()
 * @method \string requireMessage()
 * @method \Bitrix\Im\Model\EO_Message resetMessage()
 * @method \Bitrix\Im\Model\EO_Message unsetMessage()
 * @method \string fillMessage()
 * @method \string getMessageOut()
 * @method \Bitrix\Im\Model\EO_Message setMessageOut(\string|\Bitrix\Main\DB\SqlExpression $messageOut)
 * @method bool hasMessageOut()
 * @method bool isMessageOutFilled()
 * @method bool isMessageOutChanged()
 * @method \string remindActualMessageOut()
 * @method \string requireMessageOut()
 * @method \Bitrix\Im\Model\EO_Message resetMessageOut()
 * @method \Bitrix\Im\Model\EO_Message unsetMessageOut()
 * @method \string fillMessageOut()
 * @method \Bitrix\Main\Type\DateTime getDateCreate()
 * @method \Bitrix\Im\Model\EO_Message setDateCreate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $dateCreate)
 * @method bool hasDateCreate()
 * @method bool isDateCreateFilled()
 * @method bool isDateCreateChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualDateCreate()
 * @method \Bitrix\Main\Type\DateTime requireDateCreate()
 * @method \Bitrix\Im\Model\EO_Message resetDateCreate()
 * @method \Bitrix\Im\Model\EO_Message unsetDateCreate()
 * @method \Bitrix\Main\Type\DateTime fillDateCreate()
 * @method \string getEmailTemplate()
 * @method \Bitrix\Im\Model\EO_Message setEmailTemplate(\string|\Bitrix\Main\DB\SqlExpression $emailTemplate)
 * @method bool hasEmailTemplate()
 * @method bool isEmailTemplateFilled()
 * @method bool isEmailTemplateChanged()
 * @method \string remindActualEmailTemplate()
 * @method \string requireEmailTemplate()
 * @method \Bitrix\Im\Model\EO_Message resetEmailTemplate()
 * @method \Bitrix\Im\Model\EO_Message unsetEmailTemplate()
 * @method \string fillEmailTemplate()
 * @method \int getNotifyType()
 * @method \Bitrix\Im\Model\EO_Message setNotifyType(\int|\Bitrix\Main\DB\SqlExpression $notifyType)
 * @method bool hasNotifyType()
 * @method bool isNotifyTypeFilled()
 * @method bool isNotifyTypeChanged()
 * @method \int remindActualNotifyType()
 * @method \int requireNotifyType()
 * @method \Bitrix\Im\Model\EO_Message resetNotifyType()
 * @method \Bitrix\Im\Model\EO_Message unsetNotifyType()
 * @method \int fillNotifyType()
 * @method \string getNotifyModule()
 * @method \Bitrix\Im\Model\EO_Message setNotifyModule(\string|\Bitrix\Main\DB\SqlExpression $notifyModule)
 * @method bool hasNotifyModule()
 * @method bool isNotifyModuleFilled()
 * @method bool isNotifyModuleChanged()
 * @method \string remindActualNotifyModule()
 * @method \string requireNotifyModule()
 * @method \Bitrix\Im\Model\EO_Message resetNotifyModule()
 * @method \Bitrix\Im\Model\EO_Message unsetNotifyModule()
 * @method \string fillNotifyModule()
 * @method \string getNotifyEvent()
 * @method \Bitrix\Im\Model\EO_Message setNotifyEvent(\string|\Bitrix\Main\DB\SqlExpression $notifyEvent)
 * @method bool hasNotifyEvent()
 * @method bool isNotifyEventFilled()
 * @method bool isNotifyEventChanged()
 * @method \string remindActualNotifyEvent()
 * @method \string requireNotifyEvent()
 * @method \Bitrix\Im\Model\EO_Message resetNotifyEvent()
 * @method \Bitrix\Im\Model\EO_Message unsetNotifyEvent()
 * @method \string fillNotifyEvent()
 * @method \string getNotifyTag()
 * @method \Bitrix\Im\Model\EO_Message setNotifyTag(\string|\Bitrix\Main\DB\SqlExpression $notifyTag)
 * @method bool hasNotifyTag()
 * @method bool isNotifyTagFilled()
 * @method bool isNotifyTagChanged()
 * @method \string remindActualNotifyTag()
 * @method \string requireNotifyTag()
 * @method \Bitrix\Im\Model\EO_Message resetNotifyTag()
 * @method \Bitrix\Im\Model\EO_Message unsetNotifyTag()
 * @method \string fillNotifyTag()
 * @method \string getNotifySubTag()
 * @method \Bitrix\Im\Model\EO_Message setNotifySubTag(\string|\Bitrix\Main\DB\SqlExpression $notifySubTag)
 * @method bool hasNotifySubTag()
 * @method bool isNotifySubTagFilled()
 * @method bool isNotifySubTagChanged()
 * @method \string remindActualNotifySubTag()
 * @method \string requireNotifySubTag()
 * @method \Bitrix\Im\Model\EO_Message resetNotifySubTag()
 * @method \Bitrix\Im\Model\EO_Message unsetNotifySubTag()
 * @method \string fillNotifySubTag()
 * @method \string getNotifyTitle()
 * @method \Bitrix\Im\Model\EO_Message setNotifyTitle(\string|\Bitrix\Main\DB\SqlExpression $notifyTitle)
 * @method bool hasNotifyTitle()
 * @method bool isNotifyTitleFilled()
 * @method bool isNotifyTitleChanged()
 * @method \string remindActualNotifyTitle()
 * @method \string requireNotifyTitle()
 * @method \Bitrix\Im\Model\EO_Message resetNotifyTitle()
 * @method \Bitrix\Im\Model\EO_Message unsetNotifyTitle()
 * @method \string fillNotifyTitle()
 * @method \string getNotifyButtons()
 * @method \Bitrix\Im\Model\EO_Message setNotifyButtons(\string|\Bitrix\Main\DB\SqlExpression $notifyButtons)
 * @method bool hasNotifyButtons()
 * @method bool isNotifyButtonsFilled()
 * @method bool isNotifyButtonsChanged()
 * @method \string remindActualNotifyButtons()
 * @method \string requireNotifyButtons()
 * @method \Bitrix\Im\Model\EO_Message resetNotifyButtons()
 * @method \Bitrix\Im\Model\EO_Message unsetNotifyButtons()
 * @method \string fillNotifyButtons()
 * @method \boolean getNotifyRead()
 * @method \Bitrix\Im\Model\EO_Message setNotifyRead(\boolean|\Bitrix\Main\DB\SqlExpression $notifyRead)
 * @method bool hasNotifyRead()
 * @method bool isNotifyReadFilled()
 * @method bool isNotifyReadChanged()
 * @method \boolean remindActualNotifyRead()
 * @method \boolean requireNotifyRead()
 * @method \Bitrix\Im\Model\EO_Message resetNotifyRead()
 * @method \Bitrix\Im\Model\EO_Message unsetNotifyRead()
 * @method \boolean fillNotifyRead()
 * @method \int getImportId()
 * @method \Bitrix\Im\Model\EO_Message setImportId(\int|\Bitrix\Main\DB\SqlExpression $importId)
 * @method bool hasImportId()
 * @method bool isImportIdFilled()
 * @method bool isImportIdChanged()
 * @method \int remindActualImportId()
 * @method \int requireImportId()
 * @method \Bitrix\Im\Model\EO_Message resetImportId()
 * @method \Bitrix\Im\Model\EO_Message unsetImportId()
 * @method \int fillImportId()
 * @method \Bitrix\Im\Model\EO_Chat getChat()
 * @method \Bitrix\Im\Model\EO_Chat remindActualChat()
 * @method \Bitrix\Im\Model\EO_Chat requireChat()
 * @method \Bitrix\Im\Model\EO_Message setChat(\Bitrix\Im\Model\EO_Chat $object)
 * @method \Bitrix\Im\Model\EO_Message resetChat()
 * @method \Bitrix\Im\Model\EO_Message unsetChat()
 * @method bool hasChat()
 * @method bool isChatFilled()
 * @method bool isChatChanged()
 * @method \Bitrix\Im\Model\EO_Chat fillChat()
 * @method \Bitrix\Main\EO_User getAuthor()
 * @method \Bitrix\Main\EO_User remindActualAuthor()
 * @method \Bitrix\Main\EO_User requireAuthor()
 * @method \Bitrix\Im\Model\EO_Message setAuthor(\Bitrix\Main\EO_User $object)
 * @method \Bitrix\Im\Model\EO_Message resetAuthor()
 * @method \Bitrix\Im\Model\EO_Message unsetAuthor()
 * @method bool hasAuthor()
 * @method bool isAuthorFilled()
 * @method bool isAuthorChanged()
 * @method \Bitrix\Main\EO_User fillAuthor()
 * @method \Bitrix\Im\Model\EO_Relation getRelation()
 * @method \Bitrix\Im\Model\EO_Relation remindActualRelation()
 * @method \Bitrix\Im\Model\EO_Relation requireRelation()
 * @method \Bitrix\Im\Model\EO_Message setRelation(\Bitrix\Im\Model\EO_Relation $object)
 * @method \Bitrix\Im\Model\EO_Message resetRelation()
 * @method \Bitrix\Im\Model\EO_Message unsetRelation()
 * @method bool hasRelation()
 * @method bool isRelationFilled()
 * @method bool isRelationChanged()
 * @method \Bitrix\Im\Model\EO_Relation fillRelation()
 * @method \Bitrix\Im\Model\EO_MessageIndex getIndex()
 * @method \Bitrix\Im\Model\EO_MessageIndex remindActualIndex()
 * @method \Bitrix\Im\Model\EO_MessageIndex requireIndex()
 * @method \Bitrix\Im\Model\EO_Message setIndex(\Bitrix\Im\Model\EO_MessageIndex $object)
 * @method \Bitrix\Im\Model\EO_Message resetIndex()
 * @method \Bitrix\Im\Model\EO_Message unsetIndex()
 * @method bool hasIndex()
 * @method bool isIndexFilled()
 * @method bool isIndexChanged()
 * @method \Bitrix\Im\Model\EO_MessageIndex fillIndex()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_Message set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_Message reset($fieldName)
 * @method \Bitrix\Im\Model\EO_Message unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_Message wakeUp($data)
 */
class EO_Message
{
    /* @var \Bitrix\Im\Model\MessageTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\MessageTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_Message_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getChatIdList()
 * @method \int[] fillChatId()
 * @method \int[] getAuthorIdList()
 * @method \int[] fillAuthorId()
 * @method \string[] getMessageList()
 * @method \string[] fillMessage()
 * @method \string[] getMessageOutList()
 * @method \string[] fillMessageOut()
 * @method \Bitrix\Main\Type\DateTime[] getDateCreateList()
 * @method \Bitrix\Main\Type\DateTime[] fillDateCreate()
 * @method \string[] getEmailTemplateList()
 * @method \string[] fillEmailTemplate()
 * @method \int[] getNotifyTypeList()
 * @method \int[] fillNotifyType()
 * @method \string[] getNotifyModuleList()
 * @method \string[] fillNotifyModule()
 * @method \string[] getNotifyEventList()
 * @method \string[] fillNotifyEvent()
 * @method \string[] getNotifyTagList()
 * @method \string[] fillNotifyTag()
 * @method \string[] getNotifySubTagList()
 * @method \string[] fillNotifySubTag()
 * @method \string[] getNotifyTitleList()
 * @method \string[] fillNotifyTitle()
 * @method \string[] getNotifyButtonsList()
 * @method \string[] fillNotifyButtons()
 * @method \boolean[] getNotifyReadList()
 * @method \boolean[] fillNotifyRead()
 * @method \int[] getImportIdList()
 * @method \int[] fillImportId()
 * @method \Bitrix\Im\Model\EO_Chat[] getChatList()
 * @method \Bitrix\Im\Model\EO_Message_Collection getChatCollection()
 * @method \Bitrix\Im\Model\EO_Chat_Collection fillChat()
 * @method \Bitrix\Main\EO_User[] getAuthorList()
 * @method \Bitrix\Im\Model\EO_Message_Collection getAuthorCollection()
 * @method \Bitrix\Main\EO_User_Collection fillAuthor()
 * @method \Bitrix\Im\Model\EO_Relation[] getRelationList()
 * @method \Bitrix\Im\Model\EO_Message_Collection getRelationCollection()
 * @method \Bitrix\Im\Model\EO_Relation_Collection fillRelation()
 * @method \Bitrix\Im\Model\EO_MessageIndex[] getIndexList()
 * @method \Bitrix\Im\Model\EO_Message_Collection getIndexCollection()
 * @method \Bitrix\Im\Model\EO_MessageIndex_Collection fillIndex()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_Message $object)
 * @method bool has(\Bitrix\Im\Model\EO_Message $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Message getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Message[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_Message $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_Message_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_Message current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_Message_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\MessageTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\MessageTable';
}
/**
 * @method static EO_Message_Query query()
 * @method static EO_Message_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_Message_Result getById($id)
 * @method static EO_Message_Result getList(array $parameters = array())
 * @method static EO_Message_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_Message createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_Message_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_Message wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_Message_Collection wakeUpCollection($rows)
 */
class MessageTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_Message_Result exec()
 * @method \Bitrix\Im\Model\EO_Message fetchObject()
 * @method \Bitrix\Im\Model\EO_Message_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_Message_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_Message fetchObject()
 * @method \Bitrix\Im\Model\EO_Message_Collection fetchCollection()
 */
class EO_Message_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_Message createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_Message_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_Message wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_Message_Collection wakeUpCollection($rows)
 */
class EO_Message_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_MessageIndex
 * @see \Bitrix\Im\Model\MessageIndexTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getMessageId()
 * @method \Bitrix\Im\Model\EO_MessageIndex setMessageId(\int|\Bitrix\Main\DB\SqlExpression $messageId)
 * @method bool hasMessageId()
 * @method bool isMessageIdFilled()
 * @method bool isMessageIdChanged()
 * @method \string getSearchContent()
 * @method \Bitrix\Im\Model\EO_MessageIndex setSearchContent(\string|\Bitrix\Main\DB\SqlExpression $searchContent)
 * @method bool hasSearchContent()
 * @method bool isSearchContentFilled()
 * @method bool isSearchContentChanged()
 * @method \string remindActualSearchContent()
 * @method \string requireSearchContent()
 * @method \Bitrix\Im\Model\EO_MessageIndex resetSearchContent()
 * @method \Bitrix\Im\Model\EO_MessageIndex unsetSearchContent()
 * @method \string fillSearchContent()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_MessageIndex set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_MessageIndex reset($fieldName)
 * @method \Bitrix\Im\Model\EO_MessageIndex unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_MessageIndex wakeUp($data)
 */
class EO_MessageIndex
{
    /* @var \Bitrix\Im\Model\MessageIndexTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\MessageIndexTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_MessageIndex_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getMessageIdList()
 * @method \string[] getSearchContentList()
 * @method \string[] fillSearchContent()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_MessageIndex $object)
 * @method bool has(\Bitrix\Im\Model\EO_MessageIndex $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_MessageIndex getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_MessageIndex[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_MessageIndex $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_MessageIndex_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_MessageIndex current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_MessageIndex_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\MessageIndexTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\MessageIndexTable';
}
/**
 * @method static EO_MessageIndex_Query query()
 * @method static EO_MessageIndex_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_MessageIndex_Result getById($id)
 * @method static EO_MessageIndex_Result getList(array $parameters = array())
 * @method static EO_MessageIndex_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_MessageIndex createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_MessageIndex_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_MessageIndex wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_MessageIndex_Collection wakeUpCollection($rows)
 */
class MessageIndexTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_MessageIndex_Result exec()
 * @method \Bitrix\Im\Model\EO_MessageIndex fetchObject()
 * @method \Bitrix\Im\Model\EO_MessageIndex_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_MessageIndex_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_MessageIndex fetchObject()
 * @method \Bitrix\Im\Model\EO_MessageIndex_Collection fetchCollection()
 */
class EO_MessageIndex_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_MessageIndex createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_MessageIndex_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_MessageIndex wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_MessageIndex_Collection wakeUpCollection($rows)
 */
class EO_MessageIndex_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_MessageParam
 * @see \Bitrix\Im\Model\MessageParamTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_MessageParam setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getMessageId()
 * @method \Bitrix\Im\Model\EO_MessageParam setMessageId(\int|\Bitrix\Main\DB\SqlExpression $messageId)
 * @method bool hasMessageId()
 * @method bool isMessageIdFilled()
 * @method bool isMessageIdChanged()
 * @method \int remindActualMessageId()
 * @method \int requireMessageId()
 * @method \Bitrix\Im\Model\EO_MessageParam resetMessageId()
 * @method \Bitrix\Im\Model\EO_MessageParam unsetMessageId()
 * @method \int fillMessageId()
 * @method \string getParamName()
 * @method \Bitrix\Im\Model\EO_MessageParam setParamName(\string|\Bitrix\Main\DB\SqlExpression $paramName)
 * @method bool hasParamName()
 * @method bool isParamNameFilled()
 * @method bool isParamNameChanged()
 * @method \string remindActualParamName()
 * @method \string requireParamName()
 * @method \Bitrix\Im\Model\EO_MessageParam resetParamName()
 * @method \Bitrix\Im\Model\EO_MessageParam unsetParamName()
 * @method \string fillParamName()
 * @method \string getParamValue()
 * @method \Bitrix\Im\Model\EO_MessageParam setParamValue(\string|\Bitrix\Main\DB\SqlExpression $paramValue)
 * @method bool hasParamValue()
 * @method bool isParamValueFilled()
 * @method bool isParamValueChanged()
 * @method \string remindActualParamValue()
 * @method \string requireParamValue()
 * @method \Bitrix\Im\Model\EO_MessageParam resetParamValue()
 * @method \Bitrix\Im\Model\EO_MessageParam unsetParamValue()
 * @method \string fillParamValue()
 * @method \string getParamJson()
 * @method \Bitrix\Im\Model\EO_MessageParam setParamJson(\string|\Bitrix\Main\DB\SqlExpression $paramJson)
 * @method bool hasParamJson()
 * @method bool isParamJsonFilled()
 * @method bool isParamJsonChanged()
 * @method \string remindActualParamJson()
 * @method \string requireParamJson()
 * @method \Bitrix\Im\Model\EO_MessageParam resetParamJson()
 * @method \Bitrix\Im\Model\EO_MessageParam unsetParamJson()
 * @method \string fillParamJson()
 * @method \Bitrix\Im\Model\EO_Message getMessage()
 * @method \Bitrix\Im\Model\EO_Message remindActualMessage()
 * @method \Bitrix\Im\Model\EO_Message requireMessage()
 * @method \Bitrix\Im\Model\EO_MessageParam setMessage(\Bitrix\Im\Model\EO_Message $object)
 * @method \Bitrix\Im\Model\EO_MessageParam resetMessage()
 * @method \Bitrix\Im\Model\EO_MessageParam unsetMessage()
 * @method bool hasMessage()
 * @method bool isMessageFilled()
 * @method bool isMessageChanged()
 * @method \Bitrix\Im\Model\EO_Message fillMessage()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_MessageParam set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_MessageParam reset($fieldName)
 * @method \Bitrix\Im\Model\EO_MessageParam unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_MessageParam wakeUp($data)
 */
class EO_MessageParam
{
    /* @var \Bitrix\Im\Model\MessageParamTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\MessageParamTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_MessageParam_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getMessageIdList()
 * @method \int[] fillMessageId()
 * @method \string[] getParamNameList()
 * @method \string[] fillParamName()
 * @method \string[] getParamValueList()
 * @method \string[] fillParamValue()
 * @method \string[] getParamJsonList()
 * @method \string[] fillParamJson()
 * @method \Bitrix\Im\Model\EO_Message[] getMessageList()
 * @method \Bitrix\Im\Model\EO_MessageParam_Collection getMessageCollection()
 * @method \Bitrix\Im\Model\EO_Message_Collection fillMessage()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_MessageParam $object)
 * @method bool has(\Bitrix\Im\Model\EO_MessageParam $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_MessageParam getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_MessageParam[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_MessageParam $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_MessageParam_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_MessageParam current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_MessageParam_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\MessageParamTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\MessageParamTable';
}
/**
 * @method static EO_MessageParam_Query query()
 * @method static EO_MessageParam_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_MessageParam_Result getById($id)
 * @method static EO_MessageParam_Result getList(array $parameters = array())
 * @method static EO_MessageParam_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_MessageParam createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_MessageParam_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_MessageParam wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_MessageParam_Collection wakeUpCollection($rows)
 */
class MessageParamTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_MessageParam_Result exec()
 * @method \Bitrix\Im\Model\EO_MessageParam fetchObject()
 * @method \Bitrix\Im\Model\EO_MessageParam_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_MessageParam_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_MessageParam fetchObject()
 * @method \Bitrix\Im\Model\EO_MessageParam_Collection fetchCollection()
 */
class EO_MessageParam_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_MessageParam createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_MessageParam_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_MessageParam wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_MessageParam_Collection wakeUpCollection($rows)
 */
class EO_MessageParam_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_NoRelationPermissionDisk
 * @see \Bitrix\Im\Model\NoRelationPermissionDiskTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getChatId()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk setChatId(\int|\Bitrix\Main\DB\SqlExpression $chatId)
 * @method bool hasChatId()
 * @method bool isChatIdFilled()
 * @method bool isChatIdChanged()
 * @method \int remindActualChatId()
 * @method \int requireChatId()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk resetChatId()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk unsetChatId()
 * @method \int fillChatId()
 * @method \int getUserId()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
 * @method bool hasUserId()
 * @method bool isUserIdFilled()
 * @method bool isUserIdChanged()
 * @method \int remindActualUserId()
 * @method \int requireUserId()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk resetUserId()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk unsetUserId()
 * @method \int fillUserId()
 * @method \Bitrix\Main\Type\DateTime getActiveTo()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk setActiveTo(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $activeTo)
 * @method bool hasActiveTo()
 * @method bool isActiveToFilled()
 * @method bool isActiveToChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualActiveTo()
 * @method \Bitrix\Main\Type\DateTime requireActiveTo()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk resetActiveTo()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk unsetActiveTo()
 * @method \Bitrix\Main\Type\DateTime fillActiveTo()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk reset($fieldName)
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_NoRelationPermissionDisk wakeUp($data)
 */
class EO_NoRelationPermissionDisk
{
    /* @var \Bitrix\Im\Model\NoRelationPermissionDiskTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\NoRelationPermissionDiskTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_NoRelationPermissionDisk_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getChatIdList()
 * @method \int[] fillChatId()
 * @method \int[] getUserIdList()
 * @method \int[] fillUserId()
 * @method \Bitrix\Main\Type\DateTime[] getActiveToList()
 * @method \Bitrix\Main\Type\DateTime[] fillActiveTo()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_NoRelationPermissionDisk $object)
 * @method bool has(\Bitrix\Im\Model\EO_NoRelationPermissionDisk $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_NoRelationPermissionDisk $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_NoRelationPermissionDisk_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_NoRelationPermissionDisk_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\NoRelationPermissionDiskTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\NoRelationPermissionDiskTable';
}
/**
 * @method static EO_NoRelationPermissionDisk_Query query()
 * @method static EO_NoRelationPermissionDisk_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_NoRelationPermissionDisk_Result getById($id)
 * @method static EO_NoRelationPermissionDisk_Result getList(array $parameters = array())
 * @method static EO_NoRelationPermissionDisk_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_NoRelationPermissionDisk createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_NoRelationPermissionDisk_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_NoRelationPermissionDisk wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_NoRelationPermissionDisk_Collection wakeUpCollection($rows)
 */
class NoRelationPermissionDiskTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_NoRelationPermissionDisk_Result exec()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk fetchObject()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_NoRelationPermissionDisk_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk fetchObject()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk_Collection fetchCollection()
 */
class EO_NoRelationPermissionDisk_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_NoRelationPermissionDisk_Collection wakeUpCollection($rows)
 */
class EO_NoRelationPermissionDisk_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_Recent
 * @see \Bitrix\Im\Model\RecentTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getUserId()
 * @method \Bitrix\Im\Model\EO_Recent setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
 * @method bool hasUserId()
 * @method bool isUserIdFilled()
 * @method bool isUserIdChanged()
 * @method \string getItemType()
 * @method \Bitrix\Im\Model\EO_Recent setItemType(\string|\Bitrix\Main\DB\SqlExpression $itemType)
 * @method bool hasItemType()
 * @method bool isItemTypeFilled()
 * @method bool isItemTypeChanged()
 * @method \int getItemId()
 * @method \Bitrix\Im\Model\EO_Recent setItemId(\int|\Bitrix\Main\DB\SqlExpression $itemId)
 * @method bool hasItemId()
 * @method bool isItemIdFilled()
 * @method bool isItemIdChanged()
 * @method \int getItemMid()
 * @method \Bitrix\Im\Model\EO_Recent setItemMid(\int|\Bitrix\Main\DB\SqlExpression $itemMid)
 * @method bool hasItemMid()
 * @method bool isItemMidFilled()
 * @method bool isItemMidChanged()
 * @method \int remindActualItemMid()
 * @method \int requireItemMid()
 * @method \Bitrix\Im\Model\EO_Recent resetItemMid()
 * @method \Bitrix\Im\Model\EO_Recent unsetItemMid()
 * @method \int fillItemMid()
 * @method \int getItemCid()
 * @method \Bitrix\Im\Model\EO_Recent setItemCid(\int|\Bitrix\Main\DB\SqlExpression $itemCid)
 * @method bool hasItemCid()
 * @method bool isItemCidFilled()
 * @method bool isItemCidChanged()
 * @method \int remindActualItemCid()
 * @method \int requireItemCid()
 * @method \Bitrix\Im\Model\EO_Recent resetItemCid()
 * @method \Bitrix\Im\Model\EO_Recent unsetItemCid()
 * @method \int fillItemCid()
 * @method \int getItemRid()
 * @method \Bitrix\Im\Model\EO_Recent setItemRid(\int|\Bitrix\Main\DB\SqlExpression $itemRid)
 * @method bool hasItemRid()
 * @method bool isItemRidFilled()
 * @method bool isItemRidChanged()
 * @method \int remindActualItemRid()
 * @method \int requireItemRid()
 * @method \Bitrix\Im\Model\EO_Recent resetItemRid()
 * @method \Bitrix\Im\Model\EO_Recent unsetItemRid()
 * @method \int fillItemRid()
 * @method \int getItemOlid()
 * @method \Bitrix\Im\Model\EO_Recent setItemOlid(\int|\Bitrix\Main\DB\SqlExpression $itemOlid)
 * @method bool hasItemOlid()
 * @method bool isItemOlidFilled()
 * @method bool isItemOlidChanged()
 * @method \int remindActualItemOlid()
 * @method \int requireItemOlid()
 * @method \Bitrix\Im\Model\EO_Recent resetItemOlid()
 * @method \Bitrix\Im\Model\EO_Recent unsetItemOlid()
 * @method \int fillItemOlid()
 * @method \boolean getPinned()
 * @method \Bitrix\Im\Model\EO_Recent setPinned(\boolean|\Bitrix\Main\DB\SqlExpression $pinned)
 * @method bool hasPinned()
 * @method bool isPinnedFilled()
 * @method bool isPinnedChanged()
 * @method \boolean remindActualPinned()
 * @method \boolean requirePinned()
 * @method \Bitrix\Im\Model\EO_Recent resetPinned()
 * @method \Bitrix\Im\Model\EO_Recent unsetPinned()
 * @method \boolean fillPinned()
 * @method \boolean getUnread()
 * @method \Bitrix\Im\Model\EO_Recent setUnread(\boolean|\Bitrix\Main\DB\SqlExpression $unread)
 * @method bool hasUnread()
 * @method bool isUnreadFilled()
 * @method bool isUnreadChanged()
 * @method \boolean remindActualUnread()
 * @method \boolean requireUnread()
 * @method \Bitrix\Im\Model\EO_Recent resetUnread()
 * @method \Bitrix\Im\Model\EO_Recent unsetUnread()
 * @method \boolean fillUnread()
 * @method \Bitrix\Main\Type\DateTime getDateUpdate()
 * @method \Bitrix\Im\Model\EO_Recent setDateUpdate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $dateUpdate)
 * @method bool hasDateUpdate()
 * @method bool isDateUpdateFilled()
 * @method bool isDateUpdateChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualDateUpdate()
 * @method \Bitrix\Main\Type\DateTime requireDateUpdate()
 * @method \Bitrix\Im\Model\EO_Recent resetDateUpdate()
 * @method \Bitrix\Im\Model\EO_Recent unsetDateUpdate()
 * @method \Bitrix\Main\Type\DateTime fillDateUpdate()
 * @method \Bitrix\Im\Model\EO_Relation getRelation()
 * @method \Bitrix\Im\Model\EO_Relation remindActualRelation()
 * @method \Bitrix\Im\Model\EO_Relation requireRelation()
 * @method \Bitrix\Im\Model\EO_Recent setRelation(\Bitrix\Im\Model\EO_Relation $object)
 * @method \Bitrix\Im\Model\EO_Recent resetRelation()
 * @method \Bitrix\Im\Model\EO_Recent unsetRelation()
 * @method bool hasRelation()
 * @method bool isRelationFilled()
 * @method bool isRelationChanged()
 * @method \Bitrix\Im\Model\EO_Relation fillRelation()
 * @method \Bitrix\Im\Model\EO_Chat getChat()
 * @method \Bitrix\Im\Model\EO_Chat remindActualChat()
 * @method \Bitrix\Im\Model\EO_Chat requireChat()
 * @method \Bitrix\Im\Model\EO_Recent setChat(\Bitrix\Im\Model\EO_Chat $object)
 * @method \Bitrix\Im\Model\EO_Recent resetChat()
 * @method \Bitrix\Im\Model\EO_Recent unsetChat()
 * @method bool hasChat()
 * @method bool isChatFilled()
 * @method bool isChatChanged()
 * @method \Bitrix\Im\Model\EO_Chat fillChat()
 * @method \Bitrix\Im\Model\EO_Message getMessage()
 * @method \Bitrix\Im\Model\EO_Message remindActualMessage()
 * @method \Bitrix\Im\Model\EO_Message requireMessage()
 * @method \Bitrix\Im\Model\EO_Recent setMessage(\Bitrix\Im\Model\EO_Message $object)
 * @method \Bitrix\Im\Model\EO_Recent resetMessage()
 * @method \Bitrix\Im\Model\EO_Recent unsetMessage()
 * @method bool hasMessage()
 * @method bool isMessageFilled()
 * @method bool isMessageChanged()
 * @method \Bitrix\Im\Model\EO_Message fillMessage()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_Recent set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_Recent reset($fieldName)
 * @method \Bitrix\Im\Model\EO_Recent unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_Recent wakeUp($data)
 */
class EO_Recent
{
    /* @var \Bitrix\Im\Model\RecentTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\RecentTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_Recent_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getUserIdList()
 * @method \string[] getItemTypeList()
 * @method \int[] getItemIdList()
 * @method \int[] getItemMidList()
 * @method \int[] fillItemMid()
 * @method \int[] getItemCidList()
 * @method \int[] fillItemCid()
 * @method \int[] getItemRidList()
 * @method \int[] fillItemRid()
 * @method \int[] getItemOlidList()
 * @method \int[] fillItemOlid()
 * @method \boolean[] getPinnedList()
 * @method \boolean[] fillPinned()
 * @method \boolean[] getUnreadList()
 * @method \boolean[] fillUnread()
 * @method \Bitrix\Main\Type\DateTime[] getDateUpdateList()
 * @method \Bitrix\Main\Type\DateTime[] fillDateUpdate()
 * @method \Bitrix\Im\Model\EO_Relation[] getRelationList()
 * @method \Bitrix\Im\Model\EO_Recent_Collection getRelationCollection()
 * @method \Bitrix\Im\Model\EO_Relation_Collection fillRelation()
 * @method \Bitrix\Im\Model\EO_Chat[] getChatList()
 * @method \Bitrix\Im\Model\EO_Recent_Collection getChatCollection()
 * @method \Bitrix\Im\Model\EO_Chat_Collection fillChat()
 * @method \Bitrix\Im\Model\EO_Message[] getMessageList()
 * @method \Bitrix\Im\Model\EO_Recent_Collection getMessageCollection()
 * @method \Bitrix\Im\Model\EO_Message_Collection fillMessage()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_Recent $object)
 * @method bool has(\Bitrix\Im\Model\EO_Recent $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Recent getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Recent[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_Recent $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_Recent_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_Recent current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_Recent_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\RecentTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\RecentTable';
}
/**
 * @method static EO_Recent_Query query()
 * @method static EO_Recent_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_Recent_Result getById($id)
 * @method static EO_Recent_Result getList(array $parameters = array())
 * @method static EO_Recent_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_Recent createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_Recent_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_Recent wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_Recent_Collection wakeUpCollection($rows)
 */
class RecentTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_Recent_Result exec()
 * @method \Bitrix\Im\Model\EO_Recent fetchObject()
 * @method \Bitrix\Im\Model\EO_Recent_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_Recent_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_Recent fetchObject()
 * @method \Bitrix\Im\Model\EO_Recent_Collection fetchCollection()
 */
class EO_Recent_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_Recent createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_Recent_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_Recent wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_Recent_Collection wakeUpCollection($rows)
 */
class EO_Recent_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_Relation
 * @see \Bitrix\Im\Model\RelationTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getId()
 * @method \Bitrix\Im\Model\EO_Relation setId(\int|\Bitrix\Main\DB\SqlExpression $id)
 * @method bool hasId()
 * @method bool isIdFilled()
 * @method bool isIdChanged()
 * @method \int getChatId()
 * @method \Bitrix\Im\Model\EO_Relation setChatId(\int|\Bitrix\Main\DB\SqlExpression $chatId)
 * @method bool hasChatId()
 * @method bool isChatIdFilled()
 * @method bool isChatIdChanged()
 * @method \int remindActualChatId()
 * @method \int requireChatId()
 * @method \Bitrix\Im\Model\EO_Relation resetChatId()
 * @method \Bitrix\Im\Model\EO_Relation unsetChatId()
 * @method \int fillChatId()
 * @method \string getMessageType()
 * @method \Bitrix\Im\Model\EO_Relation setMessageType(\string|\Bitrix\Main\DB\SqlExpression $messageType)
 * @method bool hasMessageType()
 * @method bool isMessageTypeFilled()
 * @method bool isMessageTypeChanged()
 * @method \string remindActualMessageType()
 * @method \string requireMessageType()
 * @method \Bitrix\Im\Model\EO_Relation resetMessageType()
 * @method \Bitrix\Im\Model\EO_Relation unsetMessageType()
 * @method \string fillMessageType()
 * @method \int getUserId()
 * @method \Bitrix\Im\Model\EO_Relation setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
 * @method bool hasUserId()
 * @method bool isUserIdFilled()
 * @method bool isUserIdChanged()
 * @method \int remindActualUserId()
 * @method \int requireUserId()
 * @method \Bitrix\Im\Model\EO_Relation resetUserId()
 * @method \Bitrix\Im\Model\EO_Relation unsetUserId()
 * @method \int fillUserId()
 * @method \int getStartId()
 * @method \Bitrix\Im\Model\EO_Relation setStartId(\int|\Bitrix\Main\DB\SqlExpression $startId)
 * @method bool hasStartId()
 * @method bool isStartIdFilled()
 * @method bool isStartIdChanged()
 * @method \int remindActualStartId()
 * @method \int requireStartId()
 * @method \Bitrix\Im\Model\EO_Relation resetStartId()
 * @method \Bitrix\Im\Model\EO_Relation unsetStartId()
 * @method \int fillStartId()
 * @method \int getLastId()
 * @method \Bitrix\Im\Model\EO_Relation setLastId(\int|\Bitrix\Main\DB\SqlExpression $lastId)
 * @method bool hasLastId()
 * @method bool isLastIdFilled()
 * @method bool isLastIdChanged()
 * @method \int remindActualLastId()
 * @method \int requireLastId()
 * @method \Bitrix\Im\Model\EO_Relation resetLastId()
 * @method \Bitrix\Im\Model\EO_Relation unsetLastId()
 * @method \int fillLastId()
 * @method \int getUnreadId()
 * @method \Bitrix\Im\Model\EO_Relation setUnreadId(\int|\Bitrix\Main\DB\SqlExpression $unreadId)
 * @method bool hasUnreadId()
 * @method bool isUnreadIdFilled()
 * @method bool isUnreadIdChanged()
 * @method \int remindActualUnreadId()
 * @method \int requireUnreadId()
 * @method \Bitrix\Im\Model\EO_Relation resetUnreadId()
 * @method \Bitrix\Im\Model\EO_Relation unsetUnreadId()
 * @method \int fillUnreadId()
 * @method \int getLastSendId()
 * @method \Bitrix\Im\Model\EO_Relation setLastSendId(\int|\Bitrix\Main\DB\SqlExpression $lastSendId)
 * @method bool hasLastSendId()
 * @method bool isLastSendIdFilled()
 * @method bool isLastSendIdChanged()
 * @method \int remindActualLastSendId()
 * @method \int requireLastSendId()
 * @method \Bitrix\Im\Model\EO_Relation resetLastSendId()
 * @method \Bitrix\Im\Model\EO_Relation unsetLastSendId()
 * @method \int fillLastSendId()
 * @method \int getLastFileId()
 * @method \Bitrix\Im\Model\EO_Relation setLastFileId(\int|\Bitrix\Main\DB\SqlExpression $lastFileId)
 * @method bool hasLastFileId()
 * @method bool isLastFileIdFilled()
 * @method bool isLastFileIdChanged()
 * @method \int remindActualLastFileId()
 * @method \int requireLastFileId()
 * @method \Bitrix\Im\Model\EO_Relation resetLastFileId()
 * @method \Bitrix\Im\Model\EO_Relation unsetLastFileId()
 * @method \int fillLastFileId()
 * @method \Bitrix\Main\Type\DateTime getLastRead()
 * @method \Bitrix\Im\Model\EO_Relation setLastRead(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $lastRead)
 * @method bool hasLastRead()
 * @method bool isLastReadFilled()
 * @method bool isLastReadChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualLastRead()
 * @method \Bitrix\Main\Type\DateTime requireLastRead()
 * @method \Bitrix\Im\Model\EO_Relation resetLastRead()
 * @method \Bitrix\Im\Model\EO_Relation unsetLastRead()
 * @method \Bitrix\Main\Type\DateTime fillLastRead()
 * @method \int getStatus()
 * @method \Bitrix\Im\Model\EO_Relation setStatus(\int|\Bitrix\Main\DB\SqlExpression $status)
 * @method bool hasStatus()
 * @method bool isStatusFilled()
 * @method bool isStatusChanged()
 * @method \int remindActualStatus()
 * @method \int requireStatus()
 * @method \Bitrix\Im\Model\EO_Relation resetStatus()
 * @method \Bitrix\Im\Model\EO_Relation unsetStatus()
 * @method \int fillStatus()
 * @method \int getCallStatus()
 * @method \Bitrix\Im\Model\EO_Relation setCallStatus(\int|\Bitrix\Main\DB\SqlExpression $callStatus)
 * @method bool hasCallStatus()
 * @method bool isCallStatusFilled()
 * @method bool isCallStatusChanged()
 * @method \int remindActualCallStatus()
 * @method \int requireCallStatus()
 * @method \Bitrix\Im\Model\EO_Relation resetCallStatus()
 * @method \Bitrix\Im\Model\EO_Relation unsetCallStatus()
 * @method \int fillCallStatus()
 * @method \string getMessageStatus()
 * @method \Bitrix\Im\Model\EO_Relation setMessageStatus(\string|\Bitrix\Main\DB\SqlExpression $messageStatus)
 * @method bool hasMessageStatus()
 * @method bool isMessageStatusFilled()
 * @method bool isMessageStatusChanged()
 * @method \string remindActualMessageStatus()
 * @method \string requireMessageStatus()
 * @method \Bitrix\Im\Model\EO_Relation resetMessageStatus()
 * @method \Bitrix\Im\Model\EO_Relation unsetMessageStatus()
 * @method \string fillMessageStatus()
 * @method \boolean getNotifyBlock()
 * @method \Bitrix\Im\Model\EO_Relation setNotifyBlock(\boolean|\Bitrix\Main\DB\SqlExpression $notifyBlock)
 * @method bool hasNotifyBlock()
 * @method bool isNotifyBlockFilled()
 * @method bool isNotifyBlockChanged()
 * @method \boolean remindActualNotifyBlock()
 * @method \boolean requireNotifyBlock()
 * @method \Bitrix\Im\Model\EO_Relation resetNotifyBlock()
 * @method \Bitrix\Im\Model\EO_Relation unsetNotifyBlock()
 * @method \boolean fillNotifyBlock()
 * @method \boolean getManager()
 * @method \Bitrix\Im\Model\EO_Relation setManager(\boolean|\Bitrix\Main\DB\SqlExpression $manager)
 * @method bool hasManager()
 * @method bool isManagerFilled()
 * @method bool isManagerChanged()
 * @method \boolean remindActualManager()
 * @method \boolean requireManager()
 * @method \Bitrix\Im\Model\EO_Relation resetManager()
 * @method \Bitrix\Im\Model\EO_Relation unsetManager()
 * @method \boolean fillManager()
 * @method \int getCounter()
 * @method \Bitrix\Im\Model\EO_Relation setCounter(\int|\Bitrix\Main\DB\SqlExpression $counter)
 * @method bool hasCounter()
 * @method bool isCounterFilled()
 * @method bool isCounterChanged()
 * @method \int remindActualCounter()
 * @method \int requireCounter()
 * @method \Bitrix\Im\Model\EO_Relation resetCounter()
 * @method \Bitrix\Im\Model\EO_Relation unsetCounter()
 * @method \int fillCounter()
 * @method \Bitrix\Im\Model\EO_Chat getChat()
 * @method \Bitrix\Im\Model\EO_Chat remindActualChat()
 * @method \Bitrix\Im\Model\EO_Chat requireChat()
 * @method \Bitrix\Im\Model\EO_Relation setChat(\Bitrix\Im\Model\EO_Chat $object)
 * @method \Bitrix\Im\Model\EO_Relation resetChat()
 * @method \Bitrix\Im\Model\EO_Relation unsetChat()
 * @method bool hasChat()
 * @method bool isChatFilled()
 * @method bool isChatChanged()
 * @method \Bitrix\Im\Model\EO_Chat fillChat()
 * @method \Bitrix\Im\Model\EO_Message getStart()
 * @method \Bitrix\Im\Model\EO_Message remindActualStart()
 * @method \Bitrix\Im\Model\EO_Message requireStart()
 * @method \Bitrix\Im\Model\EO_Relation setStart(\Bitrix\Im\Model\EO_Message $object)
 * @method \Bitrix\Im\Model\EO_Relation resetStart()
 * @method \Bitrix\Im\Model\EO_Relation unsetStart()
 * @method bool hasStart()
 * @method bool isStartFilled()
 * @method bool isStartChanged()
 * @method \Bitrix\Im\Model\EO_Message fillStart()
 * @method \Bitrix\Im\Model\EO_Message getLastSend()
 * @method \Bitrix\Im\Model\EO_Message remindActualLastSend()
 * @method \Bitrix\Im\Model\EO_Message requireLastSend()
 * @method \Bitrix\Im\Model\EO_Relation setLastSend(\Bitrix\Im\Model\EO_Message $object)
 * @method \Bitrix\Im\Model\EO_Relation resetLastSend()
 * @method \Bitrix\Im\Model\EO_Relation unsetLastSend()
 * @method bool hasLastSend()
 * @method bool isLastSendFilled()
 * @method bool isLastSendChanged()
 * @method \Bitrix\Im\Model\EO_Message fillLastSend()
 * @method \Bitrix\Im\Model\EO_Message getLast()
 * @method \Bitrix\Im\Model\EO_Message remindActualLast()
 * @method \Bitrix\Im\Model\EO_Message requireLast()
 * @method \Bitrix\Im\Model\EO_Relation setLast(\Bitrix\Im\Model\EO_Message $object)
 * @method \Bitrix\Im\Model\EO_Relation resetLast()
 * @method \Bitrix\Im\Model\EO_Relation unsetLast()
 * @method bool hasLast()
 * @method bool isLastFilled()
 * @method bool isLastChanged()
 * @method \Bitrix\Im\Model\EO_Message fillLast()
 * @method \Bitrix\Main\EO_User getUser()
 * @method \Bitrix\Main\EO_User remindActualUser()
 * @method \Bitrix\Main\EO_User requireUser()
 * @method \Bitrix\Im\Model\EO_Relation setUser(\Bitrix\Main\EO_User $object)
 * @method \Bitrix\Im\Model\EO_Relation resetUser()
 * @method \Bitrix\Im\Model\EO_Relation unsetUser()
 * @method bool hasUser()
 * @method bool isUserFilled()
 * @method bool isUserChanged()
 * @method \Bitrix\Main\EO_User fillUser()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_Relation set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_Relation reset($fieldName)
 * @method \Bitrix\Im\Model\EO_Relation unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_Relation wakeUp($data)
 */
class EO_Relation
{
    /* @var \Bitrix\Im\Model\RelationTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\RelationTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_Relation_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getIdList()
 * @method \int[] getChatIdList()
 * @method \int[] fillChatId()
 * @method \string[] getMessageTypeList()
 * @method \string[] fillMessageType()
 * @method \int[] getUserIdList()
 * @method \int[] fillUserId()
 * @method \int[] getStartIdList()
 * @method \int[] fillStartId()
 * @method \int[] getLastIdList()
 * @method \int[] fillLastId()
 * @method \int[] getUnreadIdList()
 * @method \int[] fillUnreadId()
 * @method \int[] getLastSendIdList()
 * @method \int[] fillLastSendId()
 * @method \int[] getLastFileIdList()
 * @method \int[] fillLastFileId()
 * @method \Bitrix\Main\Type\DateTime[] getLastReadList()
 * @method \Bitrix\Main\Type\DateTime[] fillLastRead()
 * @method \int[] getStatusList()
 * @method \int[] fillStatus()
 * @method \int[] getCallStatusList()
 * @method \int[] fillCallStatus()
 * @method \string[] getMessageStatusList()
 * @method \string[] fillMessageStatus()
 * @method \boolean[] getNotifyBlockList()
 * @method \boolean[] fillNotifyBlock()
 * @method \boolean[] getManagerList()
 * @method \boolean[] fillManager()
 * @method \int[] getCounterList()
 * @method \int[] fillCounter()
 * @method \Bitrix\Im\Model\EO_Chat[] getChatList()
 * @method \Bitrix\Im\Model\EO_Relation_Collection getChatCollection()
 * @method \Bitrix\Im\Model\EO_Chat_Collection fillChat()
 * @method \Bitrix\Im\Model\EO_Message[] getStartList()
 * @method \Bitrix\Im\Model\EO_Relation_Collection getStartCollection()
 * @method \Bitrix\Im\Model\EO_Message_Collection fillStart()
 * @method \Bitrix\Im\Model\EO_Message[] getLastSendList()
 * @method \Bitrix\Im\Model\EO_Relation_Collection getLastSendCollection()
 * @method \Bitrix\Im\Model\EO_Message_Collection fillLastSend()
 * @method \Bitrix\Im\Model\EO_Message[] getLastList()
 * @method \Bitrix\Im\Model\EO_Relation_Collection getLastCollection()
 * @method \Bitrix\Im\Model\EO_Message_Collection fillLast()
 * @method \Bitrix\Main\EO_User[] getUserList()
 * @method \Bitrix\Im\Model\EO_Relation_Collection getUserCollection()
 * @method \Bitrix\Main\EO_User_Collection fillUser()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_Relation $object)
 * @method bool has(\Bitrix\Im\Model\EO_Relation $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Relation getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Relation[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_Relation $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_Relation_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_Relation current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_Relation_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\RelationTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\RelationTable';
}
/**
 * @method static EO_Relation_Query query()
 * @method static EO_Relation_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_Relation_Result getById($id)
 * @method static EO_Relation_Result getList(array $parameters = array())
 * @method static EO_Relation_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_Relation createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_Relation_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_Relation wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_Relation_Collection wakeUpCollection($rows)
 */
class RelationTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_Relation_Result exec()
 * @method \Bitrix\Im\Model\EO_Relation fetchObject()
 * @method \Bitrix\Im\Model\EO_Relation_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_Relation_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_Relation fetchObject()
 * @method \Bitrix\Im\Model\EO_Relation_Collection fetchCollection()
 */
class EO_Relation_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_Relation createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_Relation_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_Relation wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_Relation_Collection wakeUpCollection($rows)
 */
class EO_Relation_Entity extends \Bitrix\Main\ORM\Entity
{
}
/**
 * EO_Status
 * @see \Bitrix\Im\Model\StatusTable
 *
 * Custom methods:
 * ---------------
 *
 * @method \int getUserId()
 * @method \Bitrix\Im\Model\EO_Status setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
 * @method bool hasUserId()
 * @method bool isUserIdFilled()
 * @method bool isUserIdChanged()
 * @method \string getColor()
 * @method \Bitrix\Im\Model\EO_Status setColor(\string|\Bitrix\Main\DB\SqlExpression $color)
 * @method bool hasColor()
 * @method bool isColorFilled()
 * @method bool isColorChanged()
 * @method \string remindActualColor()
 * @method \string requireColor()
 * @method \Bitrix\Im\Model\EO_Status resetColor()
 * @method \Bitrix\Im\Model\EO_Status unsetColor()
 * @method \string fillColor()
 * @method \string getStatus()
 * @method \Bitrix\Im\Model\EO_Status setStatus(\string|\Bitrix\Main\DB\SqlExpression $status)
 * @method bool hasStatus()
 * @method bool isStatusFilled()
 * @method bool isStatusChanged()
 * @method \string remindActualStatus()
 * @method \string requireStatus()
 * @method \Bitrix\Im\Model\EO_Status resetStatus()
 * @method \Bitrix\Im\Model\EO_Status unsetStatus()
 * @method \string fillStatus()
 * @method \string getStatusText()
 * @method \Bitrix\Im\Model\EO_Status setStatusText(\string|\Bitrix\Main\DB\SqlExpression $statusText)
 * @method bool hasStatusText()
 * @method bool isStatusTextFilled()
 * @method bool isStatusTextChanged()
 * @method \string remindActualStatusText()
 * @method \string requireStatusText()
 * @method \Bitrix\Im\Model\EO_Status resetStatusText()
 * @method \Bitrix\Im\Model\EO_Status unsetStatusText()
 * @method \string fillStatusText()
 * @method \Bitrix\Main\Type\DateTime getIdle()
 * @method \Bitrix\Im\Model\EO_Status setIdle(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $idle)
 * @method bool hasIdle()
 * @method bool isIdleFilled()
 * @method bool isIdleChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualIdle()
 * @method \Bitrix\Main\Type\DateTime requireIdle()
 * @method \Bitrix\Im\Model\EO_Status resetIdle()
 * @method \Bitrix\Im\Model\EO_Status unsetIdle()
 * @method \Bitrix\Main\Type\DateTime fillIdle()
 * @method \Bitrix\Main\Type\DateTime getDesktopLastDate()
 * @method \Bitrix\Im\Model\EO_Status setDesktopLastDate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $desktopLastDate)
 * @method bool hasDesktopLastDate()
 * @method bool isDesktopLastDateFilled()
 * @method bool isDesktopLastDateChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualDesktopLastDate()
 * @method \Bitrix\Main\Type\DateTime requireDesktopLastDate()
 * @method \Bitrix\Im\Model\EO_Status resetDesktopLastDate()
 * @method \Bitrix\Im\Model\EO_Status unsetDesktopLastDate()
 * @method \Bitrix\Main\Type\DateTime fillDesktopLastDate()
 * @method \Bitrix\Main\Type\DateTime getMobileLastDate()
 * @method \Bitrix\Im\Model\EO_Status setMobileLastDate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $mobileLastDate)
 * @method bool hasMobileLastDate()
 * @method bool isMobileLastDateFilled()
 * @method bool isMobileLastDateChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualMobileLastDate()
 * @method \Bitrix\Main\Type\DateTime requireMobileLastDate()
 * @method \Bitrix\Im\Model\EO_Status resetMobileLastDate()
 * @method \Bitrix\Im\Model\EO_Status unsetMobileLastDate()
 * @method \Bitrix\Main\Type\DateTime fillMobileLastDate()
 * @method \int getEventId()
 * @method \Bitrix\Im\Model\EO_Status setEventId(\int|\Bitrix\Main\DB\SqlExpression $eventId)
 * @method bool hasEventId()
 * @method bool isEventIdFilled()
 * @method bool isEventIdChanged()
 * @method \int remindActualEventId()
 * @method \int requireEventId()
 * @method \Bitrix\Im\Model\EO_Status resetEventId()
 * @method \Bitrix\Im\Model\EO_Status unsetEventId()
 * @method \int fillEventId()
 * @method \Bitrix\Main\Type\DateTime getEventUntilDate()
 * @method \Bitrix\Im\Model\EO_Status setEventUntilDate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $eventUntilDate)
 * @method bool hasEventUntilDate()
 * @method bool isEventUntilDateFilled()
 * @method bool isEventUntilDateChanged()
 * @method \Bitrix\Main\Type\DateTime remindActualEventUntilDate()
 * @method \Bitrix\Main\Type\DateTime requireEventUntilDate()
 * @method \Bitrix\Im\Model\EO_Status resetEventUntilDate()
 * @method \Bitrix\Im\Model\EO_Status unsetEventUntilDate()
 * @method \Bitrix\Main\Type\DateTime fillEventUntilDate()
 * @method \Bitrix\Main\EO_User getUser()
 * @method \Bitrix\Main\EO_User remindActualUser()
 * @method \Bitrix\Main\EO_User requireUser()
 * @method \Bitrix\Im\Model\EO_Status setUser(\Bitrix\Main\EO_User $object)
 * @method \Bitrix\Im\Model\EO_Status resetUser()
 * @method \Bitrix\Im\Model\EO_Status unsetUser()
 * @method bool hasUser()
 * @method bool isUserFilled()
 * @method bool isUserChanged()
 * @method \Bitrix\Main\EO_User fillUser()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
 * @property-read \Bitrix\Main\Type\Dictionary $customData
 * @property \Bitrix\Main\Authentication\Context $authContext
 * @method mixed get($fieldName)
 * @method mixed remindActual($fieldName)
 * @method mixed require($fieldName)
 * @method bool has($fieldName)
 * @method bool isFilled($fieldName)
 * @method bool isChanged($fieldName)
 * @method \Bitrix\Im\Model\EO_Status set($fieldName, $value)
 * @method \Bitrix\Im\Model\EO_Status reset($fieldName)
 * @method \Bitrix\Im\Model\EO_Status unset($fieldName)
 * @method void addTo($fieldName, $value)
 * @method void removeFrom($fieldName, $value)
 * @method void removeAll($fieldName)
 * @method \Bitrix\Main\ORM\Data\Result delete()
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
 * @method static \Bitrix\Im\Model\EO_Status wakeUp($data)
 */
class EO_Status
{
    /* @var \Bitrix\Im\Model\StatusTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\StatusTable';
    /**
     * @param bool|array $setDefaultValues
     */
    public function __construct($setDefaultValues = true)
    {
    }
}
/**
 * EO_Status_Collection
 *
 * Custom methods:
 * ---------------
 *
 * @method \int[] getUserIdList()
 * @method \string[] getColorList()
 * @method \string[] fillColor()
 * @method \string[] getStatusList()
 * @method \string[] fillStatus()
 * @method \string[] getStatusTextList()
 * @method \string[] fillStatusText()
 * @method \Bitrix\Main\Type\DateTime[] getIdleList()
 * @method \Bitrix\Main\Type\DateTime[] fillIdle()
 * @method \Bitrix\Main\Type\DateTime[] getDesktopLastDateList()
 * @method \Bitrix\Main\Type\DateTime[] fillDesktopLastDate()
 * @method \Bitrix\Main\Type\DateTime[] getMobileLastDateList()
 * @method \Bitrix\Main\Type\DateTime[] fillMobileLastDate()
 * @method \int[] getEventIdList()
 * @method \int[] fillEventId()
 * @method \Bitrix\Main\Type\DateTime[] getEventUntilDateList()
 * @method \Bitrix\Main\Type\DateTime[] fillEventUntilDate()
 * @method \Bitrix\Main\EO_User[] getUserList()
 * @method \Bitrix\Im\Model\EO_Status_Collection getUserCollection()
 * @method \Bitrix\Main\EO_User_Collection fillUser()
 *
 * Common methods:
 * ---------------
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @method void add(\Bitrix\Im\Model\EO_Status $object)
 * @method bool has(\Bitrix\Im\Model\EO_Status $object)
 * @method bool hasByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Status getByPrimary($primary)
 * @method \Bitrix\Im\Model\EO_Status[] getAll()
 * @method bool remove(\Bitrix\Im\Model\EO_Status $object)
 * @method void removeByPrimary($primary)
 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
 * @method static \Bitrix\Im\Model\EO_Status_Collection wakeUp($data)
 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
 * @method void offsetSet() ArrayAccess
 * @method void offsetExists() ArrayAccess
 * @method void offsetUnset() ArrayAccess
 * @method void offsetGet() ArrayAccess
 * @method void rewind() Iterator
 * @method \Bitrix\Im\Model\EO_Status current() Iterator
 * @method mixed key() Iterator
 * @method void next() Iterator
 * @method bool valid() Iterator
 * @method int count() Countable
 */
class EO_Status_Collection implements \ArrayAccess, \Iterator, \Countable
{
    /* @var \Bitrix\Im\Model\StatusTable */
    public static $dataClass = '\\Bitrix\\Im\\Model\\StatusTable';
}
/**
 * @method static EO_Status_Query query()
 * @method static EO_Status_Result getByPrimary($primary, array $parameters = array())
 * @method static EO_Status_Result getById($id)
 * @method static EO_Status_Result getList(array $parameters = array())
 * @method static EO_Status_Entity getEntity()
 * @method static \Bitrix\Im\Model\EO_Status createObject($setDefaultValues = true)
 * @method static \Bitrix\Im\Model\EO_Status_Collection createCollection()
 * @method static \Bitrix\Im\Model\EO_Status wakeUpObject($row)
 * @method static \Bitrix\Im\Model\EO_Status_Collection wakeUpCollection($rows)
 */
class StatusTable extends \Bitrix\Main\ORM\Data\DataManager
{
}
/**
 * Common methods:
 * ---------------
 *
 * @method EO_Status_Result exec()
 * @method \Bitrix\Im\Model\EO_Status fetchObject()
 * @method \Bitrix\Im\Model\EO_Status_Collection fetchCollection()
 *
 * Custom methods:
 * ---------------
 *
 */
class EO_Status_Query extends \Bitrix\Main\ORM\Query\Query
{
}
/**
 * @method \Bitrix\Im\Model\EO_Status fetchObject()
 * @method \Bitrix\Im\Model\EO_Status_Collection fetchCollection()
 */
class EO_Status_Result extends \Bitrix\Main\ORM\Query\Result
{
}
/**
 * @method \Bitrix\Im\Model\EO_Status createObject($setDefaultValues = true)
 * @method \Bitrix\Im\Model\EO_Status_Collection createCollection()
 * @method \Bitrix\Im\Model\EO_Status wakeUpObject($row)
 * @method \Bitrix\Im\Model\EO_Status_Collection wakeUpCollection($rows)
 */
class EO_Status_Entity extends \Bitrix\Main\ORM\Entity
{
}