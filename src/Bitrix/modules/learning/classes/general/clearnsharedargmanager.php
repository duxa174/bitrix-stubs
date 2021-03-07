<?php

/**
 * This class can be used by other modules in bitrix kernel.
 * BEFORE using this class, this comment must be updated to
 * maintain external class dependencies.
 * 
 * Currently depended modules:
 * learning
 * tasks
 * ------
 * 
 * @access protected
 */
class CLearnSharedArgManager
{
    protected $parsedOptions = \NULL;
    /**
     * @param array of options to be checked and processed (by setting default values and type casting)
     * @param array of parameters, describes options checking and processing rules
     * 
     * @example of $arParseParams
     *		$arArgManagerParams = array(
     *		'includeInactiveEdges' => array('type'          => 'boolean',	// allowed are: boolean, integer, strictly_castable_to_integer, string
     *                                      'mandatory'     => true/false,	// is element mandatory
     *										'default_value' => true),
     *		'includeActiveEdges'   => array('type'          => 'boolean',
     *                                      'mandatory'     => true/false,
     *										'default_value' => true),
     *		);
     * 
     */
    public function __construct($arOptions, $arParseParams)
    {
    }
    public function GetParsedOptions()
    {
    }
    public static function StaticParser($arOptions, $arParseParams)
    {
    }
    protected function ParseOptions($arOptions, $arParseParams)
    {
    }
    protected function CheckParseParams($arParseParams)
    {
    }
}