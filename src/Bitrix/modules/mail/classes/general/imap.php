<?php

class CMailImap
{
    protected $imap_stream;
    protected $counter;
    public function __construct()
    {
    }
    public function connect($host, $port, $timeout = 1, $skip_cert = \false)
    {
    }
    public function authenticate($login, $password)
    {
    }
    public function getUnseen()
    {
    }
    protected function sendCommand($command)
    {
    }
    protected function readLine()
    {
    }
    protected function readResponse($tag)
    {
    }
}