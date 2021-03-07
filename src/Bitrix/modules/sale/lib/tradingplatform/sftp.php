<?php

namespace Bitrix\Sale\TradingPlatform;

/**
 * Class Sftp
 * Transfer files via sftp
 * @package Bitrix\Sale\TradingPlatform
 */
class Sftp
{
    protected $login;
    protected $pass;
    protected $host;
    protected $port;
    protected $fingerprint;
    protected $connection;
    protected $sftp;
    /**
     * Constructor.
     * @param string $login Sftp login.
     * @param string $pass Sftp password.
     * @param string $host Sftp host.
     * @param int $port Sftp port.
     * @param string $fingerprint Hostkey hash.
     */
    public function __construct($login, $pass, $host, $port, $fingerprint = "")
    {
    }
    /**
     * Makes connection via SFTP
     * @return bool.
     * @throws \Bitrix\Main\SystemException
     */
    public function connect()
    {
    }
    /**
     * @param string $localFile Path to local file.
     * @param string $remoteFile Path to remote file.
     * @return bool.
     * @throws \Bitrix\Main\SystemException
     */
    public function uploadFile($localFile, $remoteFile)
    {
    }
    /**
     * @param string $remoteFile Path to remote file.
     * @param string $localFile Path to local file.
     * @return bool.
     * @throws \Bitrix\Main\SystemException
     */
    public function downloadFile($remoteFile, $localFile)
    {
    }
    /**
     * @param string $remotePath Remote path.
     * @return array List of files from remote path.
     * @throws \Bitrix\Main\SystemException
     */
    public function getFilesList($remotePath)
    {
    }
    /**
     * @param string $remoteFile Remote file.
     * @return int Filesize.
     */
    public function getFileSize($remoteFile)
    {
    }
}