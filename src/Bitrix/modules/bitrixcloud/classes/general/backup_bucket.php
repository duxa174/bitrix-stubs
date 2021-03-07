<?php

class CBitrixCloudBackupBucket extends \CCloudStorageBucket
{
    private $file_name = "";
    private $check_word = "";
    /**
     *
     * @param string $bucket_name
     * @param string $prefix
     * @param string $access_key
     * @param string $secret_key
     * @param string $session_token
     * @param string $check_word
     * @param string $file_name
     * @param string $location
     */
    function __construct($bucket_name, $prefix, $access_key, $secret_key, $session_token, $check_word, $file_name, $location = "")
    {
    }
    /**
     *
     * @return string
     *
     */
    function getFileName()
    {
    }
    /**
     *
     * @return array[string]string
     *
     */
    function getHeaders()
    {
    }
    function setPublic($isPublic)
    {
    }
    function unsetCheckWordHeader()
    {
    }
    function setCheckWordHeader()
    {
    }
}