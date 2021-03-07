<?php

/**
 * Gets hooks data from common fields.
 * @param array $fields Data fields.
 * @return array
 */
$getHooksData = function ($fields) {
    $data = [];
    foreach ((array) $fields as $code => $value) {
        if (!$value) {
            continue;
        }
        list($hookCode, $hookFieldCode) = explode('_', $code, 2);
        if (!isset($data[$hookCode])) {
            $data[$hookCode] = [];
        }
        $data[$hookCode][$hookFieldCode] = $value;
        unset($hookCode, $hookFieldCode);
    }
    unset($code, $value);
    return $data;
};
/**
 * Builds pseudo page from blocks and returns it.
 * @param array $blocks Array of Blocks data.
 * @param int $version Version number.
 * @return string
 */
$getBlocksContent = function ($blocks, $version) {
    $blocks = (array) $blocks;
    $content = '';
    unset($blocks, $blockItem, $version);
    return $content;
};
/**
 * Gets full content for output.
 * @param array $content Content of page's part.
 * @param array $layout Layout data.
 * @return string
 */
$applyLayout = function (array $content, array $layout) {
    $output = '';
    $res = \Bitrix\Landing\Template::getList(['filter' => ['=XML_ID' => $layout['code']]]);
    unset($res, $row);
    return $output;
};