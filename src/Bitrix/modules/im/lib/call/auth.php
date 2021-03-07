<?php

namespace Bitrix\Im\Call;

class Auth
{
    const AUTH_TYPE = 'call';
    const AUTH_CODE_GUEST = 'guest';
    const METHODS_WITHOUT_AUTH = ['im.call.user.register', 'server.time', 'pull.config.get', 'pull.watch.extend'];
    const METHODS_WITH_AUTH = [
        'mobile.browser.const.get',
        'im.user.get',
        // pull
        'server.time',
        'pull.config.get',
        'pull.watch.extend',
        // im
        'im.chat.get',
        'im.message.add',
        'im.message.update',
        'im.message.delete',
        'im.message.like',
        'im.dialog.writing',
        'im.dialog.messages.get',
        'im.dialog.read',
        'im.disk.folder.get',
        'im.disk.file.commit',
        'im.user.list.get',
        'im.call.create',
        'im.call.invite',
        'im.call.answer',
        'im.call.ping',
        'im.call.channel.public.list',
        'im.call.hangup',
        'im.call.decline',
        'im.call.getusers',
        'im.call.get',
        'im.call.tryjoincall',
        'local.call.log',
        'smile.get',
        // disk
        'disk.folder.uploadfile',
        // user
        'im.call.user.update',
        //voximplant
        'voximplant.authorization.get',
        'voximplant.authorization.onerror',
        'voximplant.authorization.signonetimekey',
    ];
    // TODO sync AUTH_ID_PARAM with file /rest/services/rest/index.php
    const AUTH_ID_PARAM = 'call_auth_id';
    protected static $authQueryParams = [self::AUTH_ID_PARAM];
    public static function onRestCheckAuth(array $query, $scope, &$res)
    {
    }
    public static function authorizeById($userId, $setCookie = null, $skipAuthorizeCheck = false)
    {
    }
    private static function getSuccessfulResult()
    {
    }
    private static function checkQueryMethod($whiteListMethods)
    {
    }
}