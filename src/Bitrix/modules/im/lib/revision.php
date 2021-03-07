<?php

namespace Bitrix\Im;

class Revision
{
    /**
     * Web Api revision
     *
     * @filesource synchronize im/install/js/im/im.js:17
     */
    const WEB = 130;
    /**
     * Mobile Api revision
     *
     * @filesource synchronize mobile/install/components/bitrix/mobile.jscomponent/jscomponents/im.recent/component.js:6
     * @filesource synchronize mobile/install/components/bitrix/mobile.webcomponent/webcomponents/im.dialog/bundle/component/js/component.js:3
     * @filesource synchronize mobile/install/components/bitrix/mobile.webcomponent/webcomponents/im.dialog/bundle/component/js/mobile_dialog.js:22
     */
    const MOBILE = 19;
    /**
     * Desktop Api revision
     */
    const DESKTOP = 3;
    /**
     * Rest Api revision
     */
    const REST = 28;
    public static function getWeb()
    {
    }
    public static function getMobile()
    {
    }
    public static function getDesktop()
    {
    }
    public static function getRest()
    {
    }
    public static function get()
    {
    }
}