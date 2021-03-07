<?php

class CSaleTfpdf extends \tFPDF
{
    private $background;
    public function SetBackground($image, $bgHeight = 0, $bgWidth = 0, $style = 'none')
    {
    }
    public function Image($file, $x = \null, $y = \null, $w = 0, $h = 0, $type = '', $link = '')
    {
    }
    public function Header()
    {
    }
    public function GetPageWidth()
    {
    }
    public function GetPageHeight()
    {
    }
    public function Output($name = '', $dest = '', $utfName = '')
    {
    }
    function _parsebmp($file)
    {
    }
    public function calculateRowsWidth($cols, $cells, $countItems, $docWidth, $margin = \null)
    {
    }
    /**
     * @param $str
     * @return mixed
     */
    protected function getMaximumWord($str)
    {
    }
}
class CSalePdf
{
    protected $generator;
    public static function isPdfAvailable()
    {
    }
    public static function prepareToPdf($string)
    {
    }
    public function splitString($text, $width)
    {
    }
    public function __construct($orientation = 'P', $unit = 'mm', $size = 'A4')
    {
    }
    public function __call($name, $arguments)
    {
    }
    public function SetBackground($image, $style)
    {
    }
    public function GetImageSize($file)
    {
    }
    public function GetImagePath($file)
    {
    }
    public function Image($file, $x = \null, $y = \null, $w = 0, $h = 0, $type = '', $link = '')
    {
    }
    public static function CheckImage(array $file)
    {
    }
}