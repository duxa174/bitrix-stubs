<?php

namespace Bitrix\Main\UI\Viewer\Transformation;

final class TransformerManager
{
    const QUEUE_NAME = 'main_preview';
    const PULL_TAG = 'mainTransform';
    protected static $transformationList = [];
    public function __construct()
    {
    }
    public static function getPullTag($fileId)
    {
    }
    private function buildTransformationList()
    {
    }
    public function isAvailable()
    {
    }
    public function transform($fileId)
    {
    }
    protected function shouldSendToTransformation($information, array $fileData)
    {
    }
    protected function getTransformationInformation($fileId)
    {
    }
    public function subscribeCurrentUserForTransformation($fileId)
    {
    }
    /**
     * @param array $fileData
     *
     * @return null|Transformation
     * @throws \ReflectionException
     */
    public function buildTransformationByFile(array $fileData)
    {
    }
    /**
     * @param $contentType
     *
     * @return Transformation|null
     * @throws \ReflectionException
     */
    private function buildTransformationByContentType($contentType)
    {
    }
}