<?php

namespace Bitrix\Translate\Controller\Editor;

/**
 * Common operation with language file.
 */
class Operation extends \Bitrix\Translate\Controller\Action
{
    /** @var string[] */
    static $enabledLanguagesList;
    /** @var string */
    static $documentRoot;
    /**
     * \Bitrix\Main\Engine\Action constructor.
     *
     * @param string $name Action name.
     * @param Main\Engine\Controller $controller Parent controller object.
     * @param array $config Additional configuration.
     */
    public function __construct($name, \Bitrix\Main\Engine\Controller $controller, $config = array())
    {
    }
    /**
     * Saves changed lang file.
     *
     * @param Translate\File $langFile File to update.
     *
     * @return bool
     */
    protected function updateLangFile(\Bitrix\Translate\File $langFile)
    {
    }
    /**
     * Delete lang file.
     *
     * @param Translate\File $langFile File to update.
     *
     * @return bool
     */
    protected function deleteLangFile(\Bitrix\Translate\File $langFile)
    {
    }
    /**
     * Updates phrase index.
     *
     * @param Translate\File $langFile File to update index of.
     *
     * @return bool
     */
    protected function updatePhraseIndex(\Bitrix\Translate\File $langFile)
    {
    }
    /**
     * Drops phrase index.
     *
     * @param Translate\File $langFile File to update index of.
     *
     * @return bool
     */
    protected function deletePhraseIndex(\Bitrix\Translate\File $langFile)
    {
    }
    /**
     * Runs through lang folder and collects full path to lang files.
     *
     * @param string $langPath Relative project path of the language folder.
     *
     * @return \Generator|array
     */
    protected function lookThroughLangFolder($langPath)
    {
    }
}