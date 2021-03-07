<?php

class CCaptcha
{
    var $imageWidth = 180;
    var $imageHeight = 40;
    var $codeLength = 5;
    var $ttfFilesPath = "/bitrix/modules/main/fonts";
    var $arTTFFiles = array("font.ttf");
    var $textAngleFrom = -20;
    var $textAngleTo = 20;
    var $textStartX = 7;
    var $textDistanceFrom = 27;
    var $textDistanceTo = 32;
    var $textFontSize = 20;
    var $bTransparentText = \True;
    var $transparentTextPercent = 10;
    var $arTextColor = array(array(0, 100), array(0, 100), array(0, 100));
    var $arBGColor = array(array(255, 255), array(255, 255), array(255, 255));
    var $arRealBGColor = \false;
    var $numEllipses = 100;
    var $arEllipseColor = array(array(127, 255), array(127, 255), array(127, 255));
    var $numLines = 20;
    var $arLineColor = array(array(110, 250), array(110, 250), array(110, 250));
    var $bLinesOverText = \False;
    var $arBorderColor = array(0, 0, 0);
    var $bWaveTransformation = \False;
    var $bEmptyText = \False;
    var $arChars = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'W', 'X', 'Y', 'Z', '2', '3', '4', '5', '6', '7', '8', '9');
    //'1','I','O','0'
    var $image;
    var $code;
    var $codeCrypt;
    var $sid;
    public function __construct()
    {
    }
    /* SET */
    function SetImageSize($width, $height)
    {
    }
    function SetCodeLength($length)
    {
    }
    function SetTTFFontsPath($ttfFilesPath)
    {
    }
    function GetTTFFontsPath()
    {
    }
    function SetTTFFonts($arFonts)
    {
    }
    function SetTextWriting($angleFrom, $angleTo, $startX, $distanceFrom, $distanceTo, $fontSize)
    {
    }
    function SetTextTransparent($bTransparentText, $transparentTextPercent = 10)
    {
    }
    function SetColor($arColor)
    {
    }
    function SetBGColor($arColor)
    {
    }
    function SetBGColorRGB($color_1, $color_2)
    {
    }
    function SetTextColor($arColor)
    {
    }
    function SetTextColorRGB($color_1, $color_2)
    {
    }
    function SetEllipseColor($arColor)
    {
    }
    function SetEllipseColorRGB($color_1, $color_2)
    {
    }
    function SetLineColor($arColor)
    {
    }
    function SetLineColorRGB($color_1, $color_2)
    {
    }
    function SetBorderColor($arColor)
    {
    }
    function SetBorderColorRGB($color)
    {
    }
    function SetEllipsesNumber($num)
    {
    }
    function SetLinesNumber($num)
    {
    }
    function SetLinesOverText($bLinesOverText)
    {
    }
    function SetCodeChars($arChars)
    {
    }
    function SetWaveTransformation($bWaveTransformation)
    {
    }
    function SetEmptyText($bEmptyText)
    {
    }
    /* UTIL */
    function GetColor($arColor)
    {
    }
    function InitImage($width = \false, $height = \false)
    {
    }
    function CreateImage()
    {
    }
    function CreateImageError($arMsg)
    {
    }
    function Wave()
    {
    }
    function EmptyText()
    {
    }
    function DestroyImage()
    {
    }
    function ShowImage()
    {
    }
    function DrawText()
    {
    }
    function DrawEllipses()
    {
    }
    function DrawLines()
    {
    }
    /* OUTPUT */
    function Output()
    {
    }
    function OutputError()
    {
    }
    /* CODE */
    function SetCode()
    {
    }
    function SetCodeCrypt($password = "")
    {
    }
    function SetCaptchaCode($sid = \false)
    {
    }
    function Generate32RandomString()
    {
    }
    function InitCaptchaCode($sid)
    {
    }
    function InitCode($sid)
    {
    }
    function InitCodeCrypt($codeCrypt, $password = "")
    {
    }
    function GetSID()
    {
    }
    function GetCodeCrypt()
    {
    }
    function CheckCaptchaCode($userCode, $sid, $bUpperCode = \true)
    {
    }
    function CheckCode($userCode, $sid, $bUpperCode = \True)
    {
    }
    function CheckCodeCrypt($userCode, $codeCrypt, $password = "", $bUpperCode = \True)
    {
    }
    function CryptData($data, $type, $pwdString)
    {
    }
    function Add($arFields)
    {
    }
    function Delete($sid)
    {
    }
}