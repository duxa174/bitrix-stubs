<?php

class CListFileControl
{
    /** @var $_ob_file CListFile */
    private $_ob_file = \null;
    /** @var $_input_name string */
    private $_input_name = \null;
    /** @var $_counter int  */
    private static $_counter = 0;
    /**
     * @param $obFile CListFile File to display.
     * @param $input_name string Input control name.
     */
    function __construct($obFile, $input_name)
    {
    }
    /**
     * @param $params array Display parameters.
     * 	<ul>
     * 	<li>max_size - maximum file size to display IMG tag (default 100K).
     * 	<li>max_width - width to scale image to (default 150).
     * 	<li>max_height - height to scale image to (default 150).
     * 	<li>url_template - template for image path builder (default '').
     * 	<li>show_input - if set to true file control will be displayed.
     * 	<li>show_info - if set to true file information will be displayed.
     * 	<li>download_text - text to be shown on download link.
     * 	</ul>
     * @return string Html to display.
     */
    function GetHTML($params)
    {
    }
}