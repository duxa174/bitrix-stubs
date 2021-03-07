<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Wizard {
    abstract class Step
    {
        protected $siteId = "";
        protected $ebaySettings = array();
        public static $useCache = true;
        protected static $errors = array();
        public abstract function getHtml();
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
        public static function mustBeCompletedBeforeNext()
        {
        }
        public static function getName()
        {
        }
        public function __construct($siteId, array $ebaySettings, $cleanCache = false)
        {
        }
        /**
         * @return \CAdminMessage|null
         */
        public function getAdminMessage()
        {
        }
        public function save()
        {
        }
        public static function getLampHtml($isGreen = true)
        {
        }
        protected static function getUserId($siteId, $ebaySettings)
        {
        }
        protected static function getUserInfo($siteId, array $ebaySettings)
        {
        }
        protected static function getPolicyInfo($siteId, $ebaySettings)
        {
        }
        protected static function cleanCache()
        {
        }
    }
    class StepWelcome extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
    }
    class StepSite extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function mustBeCompletedBeforeNext()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepPersonType extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        protected function createStatusMapHtml()
        {
        }
        protected function createPropsMapHtml($personTypeId)
        {
        }
        public static function mustBeCompletedBeforeNext()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepEbayAccount extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function mustBeCompletedBeforeNext()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
        public function save()
        {
        }
    }
    class StepGetApiToken extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function mustBeCompletedBeforeNext()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepPayPalAccount extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public function __construct($siteId, array $ebaySettings, $cleanCache = false)
        {
        }
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepConfirmContacts extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public function __construct($siteId, array $ebaySettings, $cleanCache = false)
        {
        }
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepLinkPaypal extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepEbayAccountRussianConfirm extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepEbayPolicies extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        public static function mustBeCompletedBeforeNext()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepEbayDefaultPolicies extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepPaymentMapping extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepShipmentMapping extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepMIPConnect extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function mustBeCompletedBeforeNext()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepImportEbayCategories extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        protected static function getCategoriesCount()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepIblock extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public function save()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepCategoriesMap extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        protected static function getMappedCount($siteId, $ebaySettings)
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
    }
    class StepStartExchange extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
        public static function hasState()
        {
        }
        public static function isSucceed($siteId, array $ebaySettings)
        {
        }
        public function save()
        {
        }
    }
    class StepFinish extends \Bitrix\Sale\TradingPlatform\Ebay\Wizard\Step
    {
        public static function getName()
        {
        }
        public function getHtml()
        {
        }
    }
}
namespace {
    /** @var Wizard\Step  $wizardStep */
    $wizardStepClassName = '\\Bitrix\\Sale\\TradingPlatform\\Ebay\\Wizard\\' . $stepClassesList[$step];
}