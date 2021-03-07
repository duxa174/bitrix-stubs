<?php

namespace Bitrix\Bizproc\Controller;

class File extends \Bitrix\Bizproc\Controller\Base
{
    private const TOKEN_SALT = 'bizproc.file.show';
    public function configureActions() : array
    {
    }
    public function showAction($token)
    {
    }
    public static function getPublicLink(int $fileId) : string
    {
    }
    private static function generateToken(int $fileId)
    {
    }
    private static function extractToken(string $token) : array
    {
    }
}