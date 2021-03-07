<?php

namespace Bitrix\Main\UI\Viewer;

final class PreviewManager
{
    const GET_KEY_TO_SEND_PREVIEW_CONTENT = 'ibxPreview';
    const GET_KEY_TO_SHOW_IMAGE = 'ibxShowImage';
    const HEADER_TO_SEND_PREVIEW = 'BX-Viewer';
    const HEADER_TO_RESIZE_IMAGE = 'BX-Viewer-image';
    const HEADER_TO_GET_SOURCE = 'BX-Viewer-src';
    const HEADER_TO_RUN_FORCE_TRANSFORMATION = 'BX-Viewer-force-transformation';
    const HEADER_TO_CHECK_TRANSFORMATION = 'BX-Viewer-check-transformation';
    /** @var TransformerManager  */
    private $transformer;
    private $rendererList = [];
    private static $disableCatchingViewByUser = false;
    /**
     * @var HttpRequest
     */
    private $httpRequest;
    public function __construct(\Bitrix\Main\HttpRequest $httpRequest = null)
    {
    }
    private function buildTransformer()
    {
    }
    private function buildViewRendererList()
    {
    }
    public static function disableCatchingViewByUser()
    {
    }
    public static function enableCatchingViewByUser()
    {
    }
    public static function isDisabledCatchingViewByUser()
    {
    }
    public function isInternalRequest($file, $options)
    {
    }
    public function processViewByUserRequest($file, $options)
    {
    }
    protected function sendPreviewContent($file, $options)
    {
    }
    protected function showImage($file, $options)
    {
    }
    protected function sendResizedImage($file)
    {
    }
    protected function prepareRenderParameters($file)
    {
    }
    protected function checkTransformation($file)
    {
    }
    protected function sendPreview($file, $forceTransformation = false)
    {
    }
    public function setPreviewImageId($fileId, $previewImageId)
    {
    }
    public function generatePreview($fileId)
    {
    }
    protected function getSourceUri()
    {
    }
    protected function signFileId($fileId)
    {
    }
    protected function unsignFileId($signedString)
    {
    }
    public function getByImage($fileId, \Bitrix\Main\Web\Uri $sourceUri)
    {
    }
    protected function getViewFileData(array $fileData)
    {
    }
    protected function getFilePreviewEntryByFileId($fileId)
    {
    }
    protected function buildRenderByFile($originalName, $contentType, \Bitrix\Main\Web\Uri $sourceUri, array $options = [])
    {
    }
    public function getRenderClassByFile(array $file)
    {
    }
    private function shouldRestrictBySize(array $file, $rendererClass)
    {
    }
    private function findRenderClassByContentType($contentType)
    {
    }
    /**
     * Temporary dirty hack. It is here while we do not solve the problem of race conditions in b_file managed cache.
     * Get file data from b_file on $fileId.
     *
     * @param int $fileId
     * @param bool $cacheCleaned
     * @return array|false
     */
    protected function getFileData($fileId, $cacheCleaned = false)
    {
    }
}