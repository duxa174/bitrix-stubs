<?php

namespace Bitrix\Landing\PublicAction;

class Block
{
    /**
     * Local function for minimization code.
     * @param string $action Action code.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param string $selector Selector.
     * @param array $params Additional params.
     * @return \Bitrix\Landing\PublicActionResult
     */
    private static function cardAction($action, $lid, $block, $selector, array $params = array())
    {
    }
    /**
     * Clone card in block by selector.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param string $selector Selector.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function cloneCard($lid, $block, $selector)
    {
    }
    /**
     * Add card in block by selector.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param string $selector Selector.
     * @param string $content Content of card.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function addCard($lid, $block, $selector, $content)
    {
    }
    /**
     * Remove card from block by selector.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param string $selector Selector.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function removeCard($lid, $block, $selector)
    {
    }
    /**
     * Change cards multiple.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param array $data Array with cards.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function updateCards($lid, $block, array $data)
    {
    }
    /**
     * Change node name.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param array $data Array with selector and value.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function changeNodeName($lid, $block, array $data)
    {
    }
    /**
     * Set new anchor to the block.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param string $data New anchor.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function changeAnchor($lid, $block, $data)
    {
    }
    /**
     * Update nodes in block by selector.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param array $data Array with selector and value.
     * @param array $additional Additional prams for save.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function updateNodes($lid, $block, array $data, array $additional = array())
    {
    }
    /**
     * Update any attributes in block by selector.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param array $data Array with selector and data.
     * @param string $method Method for update.
     * @return \Bitrix\Landing\PublicActionResult
     */
    private static function updateAttributes($lid, $block, array $data, $method)
    {
    }
    /**
     * Update classes in block by selector.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param array $data Array with selector and data.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function updateStyles($lid, $block, array $data)
    {
    }
    /**
     * Update attributes in block by selector.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param array $data Array with selector and data.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function updateAttrs($lid, $block, array $data)
    {
    }
    /**
     * Get content as is from Block.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param boolean $editMode Edit mode if true.
     * @param array $params Some params.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getContent($lid, $block, $editMode = false, array $params = array())
    {
    }
    /**
     * Update content in the Block.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param string $content Block content.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function updateContent($lid, $block, $content)
    {
    }
    /**
     * Get available blocks of landing.
     * @param int $lid Landing id.
     * @param array $params Some params.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getList($lid, array $params = array())
    {
    }
    /**
     * Get one block of landing.
     * @param int $block Block id.
     * @param array $params Some params.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getById($block, array $params = array())
    {
    }
    /**
     * Get available blocks of landing.
     * @param int $lid Landing id.
     * @param int $block Block id.
     * @param array $params Some params.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getManifest($lid, $block, array $params = array())
    {
    }
    /**
     * Get manifest array as is from block.
     * @param string $code Code name, format "namespace:code".
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getManifestFile($code)
    {
    }
    /**
     * Get content of block from repository.
     * @param string $code Block code.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getContentFromRepository($code)
    {
    }
    /**
     * Get blocks from repository.
     * @param string $section Section code.
     * @param bool $withManifest Get repo with manifest.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getRepository($section = null, $withManifest = false)
    {
    }
    /**
     * Upload file by url or from FILE.
     * @param int $block Block id.
     * @param mixed $picture File url / file array.
     * @param string $ext File extension.
     * @param array $params Some file params.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function uploadFile($block, $picture, $ext = false, array $params = array())
    {
    }
}