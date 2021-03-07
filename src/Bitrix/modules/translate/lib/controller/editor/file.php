<?php

namespace Bitrix\Translate\Controller\Editor;

class File extends \Bitrix\Translate\Controller\Controller
{
    const ACTION_SAVE = 'save';
    const ACTION_SAVE_SOURCE = 'saveSource';
    const ACTION_CLEAN_ETHALON = 'cleanEthalon';
    const ACTION_CANCEL = 'cancel';
    const ACTION_WIPE_EMPTY = 'wipeEmpty';
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