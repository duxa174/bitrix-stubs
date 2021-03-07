<?php

namespace Bitrix\Main\UI;

class FileInput
{
    protected $elementSetts = array("name" => "FILE[n#IND#]", "description" => true, "delete" => true, "edit" => true, "thumbSize" => 640);
    protected $uploadSetts = array("upload" => false, "uploadType" => "path", "medialib" => false, "fileDialog" => false, "cloud" => false, "maxCount" => 0, "maxSize" => 0);
    protected $id = "bx_iblockfileprop";
    protected $files = array();
    protected static $instance = null;
    protected $templates = array();
    public static $templatePatterns = array(
        'description' => <<<HTML
\t\t<input type="text" id="#id#Description" name="#description_name#" value="#description#" class="adm-fileinput-item-description" />
HTML
,
        'regularInput' => '<input class="bx-bxu-fileinput-value" type="hidden" id="#id#Value" name="#input_name#" value="#input_value#" />',
        'arrayInput' => <<<HTML
\t\t<input type="hidden" id="#id#Value" name="#input_name#[tmp_name]" value="#input_value#" />
\t\t<input type="hidden" name="#input_name#[type]" value="#type#" />
\t\t<input type="hidden" name="#input_name#[name]" value="#name#" />
\t\t<input type="hidden" name="#input_name#[size]" value="#size#" />
\t\t<input type="hidden" name="#input_name#[error]" value="0" />
HTML
,
        'new' => <<<HTML
\t<div class="adm-fileinput-item">
\t\t<div class="adm-fileinput-item-preview">
\t\t\t<span class="adm-fileinput-item-loading">
\t\t\t\t<span class="container-loading-title">#MESS_LOADING#</span>
\t\t\t\t<span class="container-loading-bg"><span class="container-loading-bg-progress" style="width: 5%;" id="#id#Progress"></span></span>
\t\t\t</span>
\t\t\t<div class="adm-fileinput-item-preview-icon">
\t\t\t\t<div class="bx-file-icon-container-medium icon-#ext#">
\t\t\t\t\t<div class="bx-file-icon-cover">
\t\t\t\t\t\t<div class="bx-file-icon-corner">
\t\t\t\t\t\t\t<div class="bx-file-icon-corner-fix"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class="bx-file-icon-images"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class="bx-file-icon-label"></div>
\t\t\t\t</div>
\t\t\t\t<span class="container-doc-title" id="#id#Name">#name#</span>
\t\t\t</div>
\t\t\t<div class="adm-fileinput-item-preview-img">#preview#</div>
\t\t\t<input class="bx-bxu-fileinput-value" type="hidden" id="#id#Value" name="#input_name#" value="#input_value#" />
\t\t</div>
\t\t#description#
\t\t<div class="adm-fileinput-item-panel">
\t\t\t<span class="adm-fileinput-item-panel-btn adm-btn-setting" id="#id#Edit">&nbsp;</span>
\t\t\t<span class="adm-fileinput-item-panel-btn adm-btn-del" id="#id#Del">&nbsp;</span>
\t\t</div>
\t\t<div id="#id#Properties" class="adm-fileinput-item-properties">#properties#</div>
\t</div>
HTML
,
        'unsaved' => <<<HTML
<div class="adm-fileinput-item-wrapper" id="#id#Block">
\t<div class="adm-fileinput-item">
\t\t<div class="adm-fileinput-item-preview">
\t\t\t<span class="adm-fileinput-item-loading">
\t\t\t\t<span class="container-loading-title">#MESS_LOADING#</span>
\t\t\t\t<span class="container-loading-bg"><span class="container-loading-bg-progress" style="width: 60%;" id="#id#Progress"></span></span>
\t\t\t</span>
\t\t\t<div class="adm-fileinput-item-preview-icon">
\t\t\t\t<div class="bx-file-icon-container-medium icon-#ext#">
\t\t\t\t\t<div class="bx-file-icon-cover">
\t\t\t\t\t\t<div class="bx-file-icon-corner">
\t\t\t\t\t\t\t<div class="bx-file-icon-corner-fix"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class="bx-file-icon-images"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class="bx-file-icon-label"></div>
\t\t\t\t</div>
\t\t\t\t<span class="container-doc-title" id="#id#Name">#name#</span>
\t\t\t</div>
\t\t\t<div class="adm-fileinput-item-preview-img" id="#id#Canvas"></div>
\t\t\t#input#
\t\t</div>
\t\t#description#
\t\t<div class="adm-fileinput-item-panel">
\t\t\t<span class="adm-fileinput-item-panel-btn adm-btn-setting" id="#id#Edit">&nbsp;</span>
\t\t\t<span class="adm-fileinput-item-panel-btn adm-btn-del" id="#id#Del">&nbsp;</span>
\t\t</div>
\t\t<div id="#id#Properties" class="adm-fileinput-item-properties">#properties#</div>
\t</div>
</div>
HTML
,
        /**
         * adm-fileinput-item-saved - saved
         * adm-fileinput-item-error - error
         * adm-fileinput-item-image - file is image
         *
         */
        'uploaded' => <<<HTML
<div class="adm-fileinput-item-wrapper" id="#id#Block">
\t<div class="adm-fileinput-item adm-fileinput-item-saved">
\t\t<div class="adm-fileinput-item-preview">
\t\t\t<span class="adm-fileinput-item-loading">
\t\t\t\t<span class="container-loading-title">#MESS_LOADING#</span>
\t\t\t\t<span class="container-loading-bg"><span class="container-loading-bg-progress" style="width: 60%;"></span></span>
\t\t\t</span>
\t\t\t<div class="adm-fileinput-item-preview-icon">
\t\t\t\t<div class="bx-file-icon-container-medium icon-#ext#">
\t\t\t\t\t<div class="bx-file-icon-cover">
\t\t\t\t\t\t<div class="bx-file-icon-corner">
\t\t\t\t\t\t\t<div class="bx-file-icon-corner-fix"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class="bx-file-icon-images"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class="bx-file-icon-label"></div>
\t\t\t\t</div>
\t\t\t\t<span class="container-doc-title" id="#id#Name">#name#</span>
\t\t\t</div>
\t\t\t<div class="adm-fileinput-item-preview-img" id="#id#Canvas"></div>
\t\t\t<input style="display: none;" type="hidden" id="#id#Value" readonly="readonly" name="#input_name#" value="#id#" />
\t\t</div>
\t\t#description#
\t\t<div class="adm-fileinput-item-panel">
\t\t\t<span class="adm-fileinput-item-panel-btn adm-btn-setting" id="#id#Edit">&nbsp;</span>
\t\t\t<span class="adm-fileinput-item-panel-btn adm-btn-del" id="#id#Del">&nbsp;</span>
\t\t</div>
\t\t<div id="#id#Properties" class="adm-fileinput-item-properties">#properties#</div>
\t</div>
</div>
HTML
,
        'unexisted' => <<<HTML
<div class="adm-fileinput-item-wrapper" id="#id#Block">
\t<div class="adm-fileinput-item adm-fileinput-item-saved">
\t\t<div class="adm-fileinput-item-preview">
\t\t\t<span class="adm-fileinput-item-loading">
\t\t\t\t<span class="container-loading-title">#MESS_LOADING#</span>
\t\t\t\t<span class="container-loading-bg"><span class="container-loading-bg-progress" style="width: 60%;"></span></span>
\t\t\t</span>
\t\t\t<div class="adm-fileinput-item-preview-icon">
\t\t\t\t<div class="bx-file-icon-container-medium icon-#ext#">
\t\t\t\t\t<div class="bx-file-icon-cover">
\t\t\t\t\t\t<div class="bx-file-icon-corner">
\t\t\t\t\t\t\t<div class="bx-file-icon-corner-fix"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class="bx-file-icon-images"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class="bx-file-icon-label"></div>
\t\t\t\t</div>
\t\t\t\t<span class="container-doc-title" id="#id#Name">#name#</span>
\t\t\t</div>
\t\t\t<div class="adm-fileinput-item-preview-img" id="#id#Canvas"></div>
\t\t\t<input style="display: none;" data-fileinput="Y" type="file" id="#id#Value" readonly="readonly" name="#input_name#" value="" />
\t\t</div>
\t\t#description#
\t\t<div class="adm-fileinput-item-panel">
\t\t\t<span class="adm-fileinput-item-panel-btn adm-btn-del" id="#id#Del">&nbsp;</span>
\t\t</div>
\t\t<div id="#id#Properties" class="adm-fileinput-item-properties">#properties#</div>
\t</div>
</div>
HTML
,
    );
    /**
     * @param array $params
     */
    public function __construct($params = array())
    {
    }
    /**
     * @param array $params
     * @param bool $hashIsID
     * @return FileInput
     */
    public static function createInstance($params = array(), $hashIsID = true)
    {
    }
    /**
     * @param array $values
     * @return string
     */
    public function show($values = array(), $getDataFromRequest = false)
    {
    }
    private function getExtDialogs()
    {
    }
    private function formFile($fileId = "", $inputName = "file")
    {
    }
    private function getFile($fileId = "", $inputName = "file", $getDataFromRequest = false)
    {
    }
    private static function getInputName($inputName, $type = "")
    {
    }
    /**
     * Prepares file array for saving. It is important to use if BX_TEMPORARY_FILES_DIRECTORY is defined.
     * @param $file
     * @return array|null
     */
    public static function prepareFile($file)
    {
    }
}