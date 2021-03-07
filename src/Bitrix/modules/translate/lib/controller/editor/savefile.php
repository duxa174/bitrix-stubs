<?php

namespace Bitrix\Translate\Controller\Editor;

/**
 * Update/create language file.
 */
class SaveFile extends \Bitrix\Translate\Controller\Editor\Operation
{
    /**
     * Runs controller action.
     *
     * @param string $file Path to update.
     *
     * @return array
     */
    public function run($file = '')
    {
    }
    /**
     * Generates name for form field.
     *
     * @param string $phraseId Phrase code.
     * @param string $suffix Append name with.
     * @param string $prefix Start name with.
     *
     * @return string
     */
    private function generateFieldName($phraseId, $suffix = '', $prefix = '')
    {
    }
}