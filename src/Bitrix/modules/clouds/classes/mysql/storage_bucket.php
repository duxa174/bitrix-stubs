<?php

class CAllCloudStorageBucket
{
    protected $_ID = 0;
    /**
     * @param double $file_size
     * @param int $file_count
     * @return CDBResult
     */
    public function SetFileCounter($file_size, $file_count)
    {
    }
    /**
     * @param double $file_size
     * @return CDBResult
     */
    function IncFileCounter($file_size = 0.0)
    {
    }
    /**
     * @param double $file_size
     * @return CDBResult
     */
    function DecFileCounter($file_size = 0.0)
    {
    }
    protected function GetActualBucketId()
    {
    }
}