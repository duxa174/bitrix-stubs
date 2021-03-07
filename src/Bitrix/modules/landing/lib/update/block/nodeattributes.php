<?php

namespace Bitrix\Landing\Update\Block;

final class NodeAttributes extends \Bitrix\Main\Update\Stepper
{
    const CONTINUE_EXECUTING = true;
    const STOP_EXECUTING = false;
    const OPTION_NAME = 'blocks_attrs_update';
    const OPTION_STATUS_NAME = 'blocks_attrs_update_status';
    const STEP_PORTION = 1;
    //count of block CODES to step
    protected static $moduleId = 'landing';
    protected $dataToUpdate = array();
    protected $blocksToUpdate = array();
    protected $sitesToUpdate = array();
    protected $status = array();
    protected $codesToStep = array();
    /**
     * get progress from option or set default
     */
    private function loadCurrentStatus()
    {
    }
    /**
     * May be several Options for update data. They have uniqueId. Find ID of first option
     *
     * @return string
     */
    private function getUpdaterUniqueId()
    {
    }
    public function execute(array &$result)
    {
    }
    /**
     * Additional operations before stop executing
     */
    private static function finish()
    {
    }
    /**
     * If no more blocks to update - remove all data options and status
     *
     * @throws \Bitrix\Main\ArgumentNullException
     */
    private static function clearOptions()
    {
    }
    /**
     * Create option name by base name and unique ID
     * @return string
     */
    private function getOptionName()
    {
    }
    private function collectBlocks()
    {
    }
    private function processBlocks()
    {
    }
    private function updateBlock(\Bitrix\Landing\Block $block)
    {
    }
    private function finishStep()
    {
    }
    private function finishOption()
    {
    }
    private function updateSites()
    {
    }
    /**
     * Before delete block handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function disableBlockDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Before publication landing handler.
     * @param \Bitrix\Main\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function disablePublication(\Bitrix\Main\Event $event)
    {
    }
    /**
     * If agent not exist - we must broke events, to preserve infinity blocking publication and delete
     */
    public static function removeCustomEvents()
    {
    }
    /**
     * Update form domain, when updated b24 connector
     * F.e., when user remove and new portal
     * Other method, because different params
     *
     * @param Event $event
     */
    public static function updateFormDomainByConnector($event)
    {
    }
    /**
     * Set data for NodeUpdater to updating form domain
     *
     * @param array $domains
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function updateFormDomain($domains = array())
    {
    }
    /**
     * Do nothing for fix bug.
     * @return string
     */
    //	dbg: try to fix. May del this
    //	public static function execAgent()
    //	{
    //		return '';
    //	}
    /**
     * Code for updater.php see in landing/dev/updater/nodeattributesupdaters.pph
     */
}