<?php

namespace Bitrix\Main\Diag;

class SqlTracker implements \Iterator
{
    /** @var SqlTrackerQuery[] */
    protected $queries = array();
    /** @var float */
    protected $time = 0.0;
    /** @var int */
    protected $depthBackTrace = 8;
    /** @var integer */
    protected $counter = 0;
    /** @var string */
    protected $logFilePath = "";
    /**
     * Clears all queries collected and resets execution time.
     *
     * @return void
     */
    public function reset()
    {
    }
    /**
     * Creates new instance of SqlTrackerQuery object.
     *
     * @return \Bitrix\Main\Diag\SqlTrackerQuery
     */
    public function getNewTrackerQuery()
    {
    }
    /**
     * Used by SqlTrackerQuery to track overall execution time.
     *
     * @param float $time Time in seconds.
     *
     * @return void
     */
    public function addTime($time)
    {
    }
    /**
     * Returns number of queries executed.
     *
     * @return integer
     */
    public function getCounter()
    {
    }
    /**
     * Returns overall queries time execution.
     *
     * @return float
     */
    public function getTime()
    {
    }
    /**
     * Returns array of SqlTrackerQuery objects so far collected.
     *
     * @return SqlTrackerQuery[]
     */
    public function getQueries()
    {
    }
    /**
     * Returns backtrace depth for writing into log.
     *
     * @return int
     */
    public function getDepthBackTrace()
    {
    }
    /**
     * Sets backtrace depth for writing into log.
     *
     * @param int $depthBackTrace Desired backtrace depth.
     *
     * @return void
     */
    public function setDepthBackTrace($depthBackTrace)
    {
    }
    /**
     * Starts writing queries into log file.
     *
     * @param string $filePath Absolute file path.
     *
     * @return void
     * @see \Bitrix\Main\Diag\SqlTracker->stopFileLog
     * @see \Bitrix\Main\Diag\SqlTracker->writeFileLog
     */
    public function startFileLog($filePath)
    {
    }
    /**
     * Writes query text and part of backtrace into log file.
     *
     * @param string $sql Query to be dumped.
     * @param float $executionTime Query time.
     * @param string $additional Additional info string to be added to header.
     * @param integer $traceSkip How many backtrace frames to skip in output.
     *
     * @return void
     * @see \Bitrix\Main\Diag\SqlTracker->startFileLog
     * @see \Bitrix\Main\Diag\SqlTracker->stopFileLog
     */
    public function writeFileLog($sql, $executionTime = 0.0, $additional = "", $traceSkip = 2)
    {
    }
    /**
     * Stops writing queries into log file.
     *
     * @return void
     * @see \Bitrix\Main\Diag\SqlTracker->startFileLog
     * @see \Bitrix\Main\Diag\SqlTracker->writeFileLog
     */
    public function stopFileLog()
    {
    }
    /**
     * Skips leading whitespace lines.
     * And cuts leftmost repeated tabs.
     *
     * @param string $sql Sql text.
     *
     * @return string
     */
    protected function formatSql($sql)
    {
    }
    /**
     * Returns formatted backtrace for log writing.
     * Format is multi line. Line separator is "\n".
     *
     * @param array $trace Backtrace.
     *
     * @return string
     */
    protected function formatTrace(array $trace = null)
    {
    }
    /**
     * Part of Iterator implementation made for backward compatibility.
     *
     * @return void
     */
    public function rewind()
    {
    }
    /**
     * Part of Iterator implementation made for backward compatibility.
     *
     * @return mixed
     */
    public function current()
    {
    }
    /**
     * Part of Iterator implementation made for backward compatibility.
     *
     * @return mixed
     */
    public function key()
    {
    }
    /**
     * Part of Iterator implementation made for backward compatibility.
     *
     * @return void
     */
    public function next()
    {
    }
    /**
     * Part of Iterator implementation made for backward compatibility.
     *
     * @return boolean
     */
    public function valid()
    {
    }
}