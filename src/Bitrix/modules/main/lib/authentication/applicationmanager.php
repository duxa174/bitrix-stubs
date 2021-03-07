<?php

namespace Bitrix\Main\Authentication;

class ApplicationManager
{
    /** @var ApplicationManager */
    protected static $instance;
    protected $applications = array();
    protected function __construct()
    {
    }
    public static function getInstance()
    {
    }
    /**
     * Returns sorted array which describes available applications.
     *
     * @return array Array of arrays:
     * 		array("ID" => array(
     *	 		"ID" => application id,
     * 			"NAME" => application name,
     * 			"SORT" => application sort index,
     * 			"CLASS" => application class name
     * 		))
     */
    public function getApplications()
    {
    }
    /**
     * Checks the valid scope for the applicaton.
     *
     * @param string $applicationId
     * @return bool
     */
    public function checkScope($applicationId)
    {
    }
}