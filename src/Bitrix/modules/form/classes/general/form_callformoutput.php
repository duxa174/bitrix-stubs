<?php

/**
 * Form output class - templates management & final output
 *
 */
class CAllFormOutput extends \CFormOutput_old
{
    var $__cache_path = "";
    var $__cache_file_header = "<?if(!defined(\"B_PROLOG_INCLUDED\") || B_PROLOG_INCLUDED!==true)die();?><?=\$FORM->ShowFormHeader();?>";
    var $__cache_file_footer = "<?=\$FORM->ShowFormFooter();?>";
    var $__admin;
    var $WEB_FORM_ID;
    var $WEB_FORM_NAME;
    var $arParams;
    var $arForm;
    var $arQuestions;
    var $arAnswers;
    var $arDropDown;
    var $arMultiSelect;
    var $arrRESULT_PERMISSION = array();
    var $arrVALUES;
    var $RESULT_ID;
    var $arResult;
    var $strFormNote;
    var $F_RIGHT;
    var $CAPTCHACode;
    var $bSimple;
    var $__error_msg = "";
    var $__form_validate_errors = "";
    var $__cache_file_name;
    var $__form_image_cache = "";
    var $__form_image_path_cache = "";
    var $__form_input_caption_image_cache = array();
    var $__form_input_caption_image_path_cache = array();
    var $comp2 = \false;
    var $bIsFormValidateErrors = \false;
    function CAllFormOutput()
    {
    }
    function InitializeTemplate($arParams, $arResult)
    {
    }
    function IncludeFormCustomTemplate()
    {
    }
    function IncludeFormTemplate()
    {
    }
    function isStatisticIncluded()
    {
    }
    /**
     * Private method used to check out for template and template cache file
     * Returns true whether tpl file exists and puts its path to private
     * property __cache_file_name. Otherwise returns false
     *
     * @return bool
     */
    function __check_form_cache()
    {
    }
    /*
    function __clear_form_cache_files()
    {
    	$path = $_SERVER['DOCUMENT_ROOT'].$this->__cache_path;
    	$fname_mask = "form_".$this->WEB_FORM_ID;
    
    	if ($dh = @opendir($path))
    	{
    		while (($fname = @readdir($dh)) !== false)
    		{
    			if (substr($fname, 0, strlen($fname_mask)) == $fname_mask) @unlink($path."/".$fname);
    		}
    		closedir($dh);
    	}
    }
    */
    /**
     * Public method used to check whether there were some form validation errors
     * Use: <?if($FORM->isFormErrors()):?>There're some errors!<?endif?>
     *
     * @return bool
     */
    function isFormErrors()
    {
    }
    /**
     * Public method used to show formatted form errors
     * Use: <?=$FORM->ShowFormErrors()?>
     *
     * @return string
     */
    function ShowFormErrors()
    {
    }
    /**
     * Public method used to show unformatted form errors
     * Use: <font color="red"><?=$FORM->ShowFormErrorsText()?></font>
     *
     * @return string
     */
    function ShowFormErrorsText()
    {
    }
    /**
     * Public: shows form note formatted string if any (like 'Changes saved')
     *
     * @return string
     */
    function ShowFormNote()
    {
    }
    /**
     * Public: shows form note unformatted string if any (like 'Changes saved')
     *
     * @return string
     */
    function ShowFormNoteText()
    {
    }
    /**
     * Public: check whether form has note string (like 'Changes saved')
     *
     * @return bool
     */
    function isFormNote()
    {
    }
    /**
     * Get current form runtime error code string
     * use $MESS from lang file to customize error messages
     *
     * @return string
     */
    function ShowErrorMsg()
    {
    }
    /**
     * Public method used to put form header (<form> tag and hidden fields)
     * Added to form template automatically
     *
     * @return string
     */
    function ShowFormHeader()
    {
    }
    /**
     * Public method used to put form footer (end <form> tag)
     * Added to form template automatically
     *
     * @return string
     */
    function ShowFormFooter()
    {
    }
    function __admin_GetInputType($FIELD_SID)
    {
    }
    function __admin_GetInputAnswersStructure($FIELD_SID)
    {
    }
    /**
     * Public method used to put input field title to template
     * Use: <?=$FORM->ShowInputCaption('MYFIELD_5')?>
     *
     * @param string $FIELD_SID
     * @param string $caption_css_class
     * @return string
     */
    function ShowInputCaption($FIELD_SID, $css_style = "")
    {
    }
    function __admin_ShowInputCaption($FIELD_SID, $caption_css_class = "", $unform = \false)
    {
    }
    /**
     * Public method used to put question image if exists onto form
     * Use: <?=$FORM->ShowInputCaptionImage('MYFIELD_5', 50, 50, "hspace=\"0\" vspace=\"0\" align=\"left\" border=\"0\"", "", true, GetMessage("FORM_ENLARGE"))?>
     * params like CFile::ShowImage()
     * Returns image code if image exists and empty string otherwise
     *
     * @param string $FIELD_SID
     * @param int $iMaxW
     * @param int $iMaxH
     * @param string $sParams
     * @param string $strImageUrl
     * @param bool $bPopup
     * @param string $strPopupTitle
     * @return string
     */
    function ShowInputCaptionImage($FIELD_SID, $sAlign = "", $iMaxW = "", $iMaxH = "", $bPopup = "N", $strPopupTitle = "", $sHSpace = "", $sVSpace = "", $sBorder = "")
    {
    }
    /**
     * Public method used to check wheter current question has image
     * Use: <?=($FORM->isInputCaptionImage('MYFIELD_5') ? "image: ".$FORM->ShowInputCaptionImage('MYFIELD_5') : "no image")?>
     *
     * @param string $FIELD_SID
     * @return bool
     */
    function isInputCaptionImage($FIELD_SID)
    {
    }
    /**
     * Public method used to put input fields to template
     * Use: <?=$FORM->ShowInput('MYFIELD_5')?>
     *
     * @param string $FIELD_SID
     * @param string $caption_css_class
     * @return string
     */
    function ShowInput($FIELD_SID, $caption_css_class = '')
    {
    }
    /**
     * Public method used to check whether current form uses captcha.
     * Use: <?if($FORM->isUseCaptcha()):?>form uses CAPTCHA<?else:?>form doesnt use CAPTCHA<?endif;?>
     *
     * @return bool
     */
    function isUseCaptcha()
    {
    }
    /**
     * Public method used to put CAPTCHA image onto form.
     * Use: <?=$FORM->ShowCaptchaImage()?>
     *
     * @return string
     */
    function ShowCaptchaImage()
    {
    }
    /**
     * Public method used to put CAPTCHA input field onto form.
     * Use: <?=$FORM->ShowCaptchaField()?>
     *
     * @return string
     */
    function ShowCaptchaField()
    {
    }
    /**
     * Public: show both CAPTCHA fields with default formating
     *
     * @return string
     */
    function ShowCaptcha()
    {
    }
    /**
     * Public method used to put submit button onto form.
     * Use: <?=$FORM->ShowSubmitButton()?>
     *
     * @return string
     */
    function ShowSubmitButton($caption = "", $css_style = "")
    {
    }
    /**
     * Public method used to put apply button onto form.
     * Use: <?=$FORM->ShowApplyButton()?>
     *
     * @return string
     */
    function ShowApplyButton($caption = "", $css_style = "")
    {
    }
    /**
     * Public method used to put reset button onto form.
     * Use: <?=$FORM->ShowResetButton()?>
     *
     * @return string
     */
    function ShowResetButton($caption = "", $css_style = "")
    {
    }
    /**
     * Public method used to put form description onto form page
     * Use: <?=$FORM->ShowFormDescription()?>
     *
     * @return string
     */
    function ShowFormDescription($css_style = "")
    {
    }
    /**
     * Public: check whether form has description
     *
     * @return bool
     */
    function isFormDescription()
    {
    }
    /**
     * Public: shows form image; params like CFile::ShowImage()
     * Use: <?=$FORM->ShowFormImage(250, 250, "hspace=\"0\" vspace=\"0\" align=\"left\" border=\"0\"", "", true, GetMessage("FORM_ENLARGE"))?>
     * Returns image code if image exists and empty string otherwise
     *
     * @param int $iMaxW
     * @param int $iMaxH
     * @param string $sParams
     * @param string $strImageUrl
     * @param bool $bPopup
     * @param mixed $strPopupTitle
     * @return string
     */
    //function ShowFormImage($iMaxW=0, $iMaxH=0, $sParams="border=\"0\"", $strImageUrl="", $bPopup=false, $strPopupTitle=false)
    function ShowFormImage($sAlign = "", $iMaxW = "", $iMaxH = "", $bPopup = "N", $strPopupTitle = "", $sHSpace = "", $sVSpace = "", $sBorder = "")
    {
    }
    /**
     * Public: check if form has image
     *
     * @return bool
     */
    function isFormImage()
    {
    }
    /**
     * Public: shows current form title
     *
     * @return string
     */
    function ShowFormTitle($css_style = "")
    {
    }
    /**
     * Public: check whether current form has title string
     *
     * @return bool
     */
    function isFormTitle()
    {
    }
    function ShowResultStatusForm()
    {
    }
    function ShowResultStatus($bNotShowCSS = "N")
    {
    }
    function ShowResultStatusText()
    {
    }
    function GetResultStatusCSSClass()
    {
    }
    function isResultStatusChangeAccess()
    {
    }
    function ShowDateFormat($css_style = "")
    {
    }
    /**
     * Public method used to show "required" label (red '*')
     * Use: <?=$FORM->ShowRequired()?>
     *
     * @return string
     */
    function ShowRequired()
    {
    }
    function CheckTemplate($FORM_TEMPLATE, &$arrFS)
    {
    }
    function PrepareFormData($arrFS)
    {
    }
    function setError($error)
    {
    }
    function isAccessFormParams()
    {
    }
    function isAccessForm()
    {
    }
    function isAccessFormResult($arrResult)
    {
    }
    function isAccessFormResultEdit()
    {
    }
    function isAccessFormResultView()
    {
    }
    function isAccessFormResultList()
    {
    }
    function getFormImagePath()
    {
    }
    function getInputCaptionImagePath($FIELD_SID)
    {
    }
    function setInputDefaultValue($FIELD_SID, $value, $ANSWER_ID = \false)
    {
    }
}