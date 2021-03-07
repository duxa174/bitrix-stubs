<?php

class CPullStack extends \CAllPullStack
{
    // check messages that are older than 24hours, remove them.
    // only works in PULL mode
    public static function CheckExpireAgent()
    {
    }
}