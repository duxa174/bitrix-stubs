<?php

namespace Bitrix\Seo;

class RobotsFile extends \Bitrix\Main\IO\File
{
    const ROBOTS_FILE_NAME = 'robots.txt';
    const SECTION_RULE = 'User-Agent';
    const SITEMAP_RULE = 'Sitemap';
    /**
     * Standard robots.txt rules tell us that at least one Disallow instruction should be put in robots.txt for its correct interpretation. But Yandex interprets empty Disallow rule as total allowance and skips all further Disallow rules.
     *
     * @deprecated
     */
    const EMPTY_DISALLOW_RULE = 'Disallow: # empty Disallow instruction SHOULD be there';
    protected $siteId = '';
    protected $documentRoot;
    protected $robotsFile = null;
    protected $contents = array();
    protected $bLoaded = false;
    public function __construct($siteId)
    {
    }
    public function addRule($rule, $section = '*', $bCheckUnique = true)
    {
    }
    public function getRuleText($rule)
    {
    }
    public function parseRule($strRule)
    {
    }
    public function getRules($rule, $section = '*')
    {
    }
    protected function getSection($section)
    {
    }
    protected function addSectionRule($section, $rule)
    {
    }
    protected function load()
    {
    }
    protected function save()
    {
    }
}