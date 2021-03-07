<?php

class MFIController
{
    const STATUS_SUCCESS = "success";
    const STATUS_ERRORED = "error";
    /** @var string  */
    protected $cid = "";
    /** @var string  */
    protected $moduleId = "main";
    /** @var boolean  */
    protected $forceMd5 = \false;
    /** @var  \Bitrix\Main\HttpRequest */
    protected $request;
    /** @var Uploader  */
    protected $uploader = \null;
    /**
     * MFIController constructor.
     * @param Uploader $uploader
     */
    public function __construct()
    {
    }
    /**
     * @param string $moduleId
     * @return $this
     */
    public function setModuleId($moduleId)
    {
    }
    /**
     * @return string
     */
    public function getModuleId()
    {
    }
    /**
     * @param boolean|string $md5
     * @return $this
     */
    public function setForceMd5($md5)
    {
    }
    /**
     * @return boolean
     */
    public function getForceMd5()
    {
    }
    /**
     * @param string $cid Id of Controls.
     * @return null|string
     */
    public function getControlByCid($cid)
    {
    }
    /**
     * @param string $cid Id of Controls.
     * @return $this
     */
    public function setCid($cid)
    {
    }
    /**
     * @param string $controlId Control ID.
     * @return $this
     */
    public function generateCid($controlId)
    {
    }
    /**
     * @return string
     */
    public function getCid()
    {
    }
    /**
     * @param string $cid Id of control instance.
     * @return string
     */
    public function isCidRegistered($cid)
    {
    }
    /**
     * @param array $params
     * @return MFIController
     */
    public function initUploader($params)
    {
    }
    /**
     * @param array $params
     * @return MFIController
     */
    public function setUploader($uploader)
    {
    }
    public function getUploader()
    {
    }
    /**
     * @return Application|CAllMain|CMain
     */
    protected function getApplication()
    {
    }
    protected function sendJSResponse($response)
    {
    }
    protected function sendJsonResponse($response)
    {
    }
    public function sendErrorResponse($errorCollection)
    {
    }
    public function sendSuccessResponse(array $response = array())
    {
    }
    protected function end($terminate = \true)
    {
    }
    /**
     * @throws \Bitrix\Main\AccessDeniedException
     * @return void
     */
    public function checkRequest($controlId = \null)
    {
    }
    protected function executeActionUpload()
    {
    }
    public function handleFile($hash, &$file, $packData, $logData, &$error)
    {
    }
    protected function saveFile($file)
    {
    }
    protected function executeActionDelete($fid)
    {
    }
    protected function executeActionDownload($fid)
    {
    }
    public function registerFile($id)
    {
    }
    /**
     * @param integer $id
     * @return string
     */
    public function getUrlDownload($id)
    {
    }
    /**
     * @param integer $id
     * @return string
     */
    public function getUrlDelete($id)
    {
    }
    /**
     * @return string
     */
    public function getUrlUpload()
    {
    }
    /**
     * Returns message signature.
     * @param string $value Message.
     * @return string
     */
    public function getSignature($value)
    {
    }
    /**
     * Simply validation of message signature.
     * @param string $value Message.
     * @param string $signature Signature.
     * @return bool True if OK, otherwise - false.
     */
    public function validate($value, $signature)
    {
    }
    private static function prepareValueForSigner($value)
    {
    }
}