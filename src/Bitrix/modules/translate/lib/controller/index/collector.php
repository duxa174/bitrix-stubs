<?php

namespace Bitrix\Translate\Controller\Index;

class Collector extends \Bitrix\Translate\Controller\Controller
{
    const SETTING_ID = 'TRANSLATE_INDEX';
    const ACTION_COLLECT_LANG_PATH = 'collectLangPath';
    const ACTION_COLLECT_PATH = 'collectPath';
    const ACTION_COLLECT_FILE = 'collectFile';
    const ACTION_COLLECT_PHRASE = 'collectPhrase';
    const ACTION_PURGE = 'purge';
    const ACTION_CANCEL = 'cancel';
    /**
     * Configures actions.
     *
     * @return array
     */
    public function configureActions()
    {
    }
    /**
     * @return array
     */
    public function cancelAction()
    {
    }
}