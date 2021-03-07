<?php

namespace Bitrix\Main\UI;

/**
 * Class PageNavigation
 *
 * This class helps to calculate limits for DB queries and other data sources
 * to organize page navigation through results.
 *
 * Examples of supported URLs:
 * /page.php?nav-cars=page-5&nav-books=page-2&other=params
 * /page.php?nav-cars=page-5-size-20&nav-books=page-2
 * /page.php?nav-cars=page-all&nav-books=page-2
 * /page/nav-cars/page-2/size-20/something/
 * /page/nav-cars/page-all/something/?other=params
 * /page/nav-cars/page-5/nav-books/page-2/size-10
 */
class PageNavigation
{
    protected $id;
    protected $pageSizes = array();
    protected $pageSize = 20;
    protected $recordCount;
    protected $currentPage;
    protected $allowAll = false;
    protected $allRecords = false;
    /**
     * @param string $id Navigation identity like "nav-cars".
     */
    public function __construct($id)
    {
    }
    /**
     * Initializes the navigation from URI.
     */
    public function initFromUri()
    {
    }
    /**
     * Returns number of pages or 0 if recordCount is not set.
     * @return int
     */
    public function getPageCount()
    {
    }
    /**
     * @param int $n Page size.
     * @return $this
     */
    public function setPageSize($n)
    {
    }
    /**
     * @param int $n The current page number.
     * @return $this
     */
    public function setCurrentPage($n)
    {
    }
    /**
     * Returns the current page number.
     * @return int
     */
    public function getCurrentPage()
    {
    }
    /**
     * @param bool $mode Allows to show all records, yes or no.
     * @return $this
     */
    public function allowAllRecords($mode)
    {
    }
    /**
     * @param int $n Number of records (to calculate number of pages).
     * @return $this
     */
    public function setRecordCount($n)
    {
    }
    /**
     * Returns number of records.
     * @return int|null
     */
    public function getRecordCount()
    {
    }
    /**
     * This controls which sizes are available via user interface.
     * @param array $sizes Array of integers.
     * @return $this
     */
    public function setPageSizes(array $sizes)
    {
    }
    /**
     * Returns allowed page sizes.
     * @return array
     */
    public function getPageSizes()
    {
    }
    /**
     * Returns "formal" page size.
     * @return int
     */
    public function getPageSize()
    {
    }
    /**
     * Returns navigation ID.
     * @return string
     */
    public function getId()
    {
    }
    /**
     * Returns offset of the first record of the current page.
     * @return int
     */
    public function getOffset()
    {
    }
    /**
     * Returns the number of records in the current page.
     * @return int
     */
    public function getLimit()
    {
    }
    /**
     * Returns true if all the records are shown in one page.
     * @return bool
     */
    public function allRecordsShown()
    {
    }
    /**
     * Returns true if showing all records is allowed.
     * @return bool
     */
    public function allRecordsAllowed()
    {
    }
    /**
     * Returns an URI with navigation parameters compatible with initFromUri().
     * @param Web\Uri $uri
     * @param bool $sef SEF mode.
     * @param string $page Page number.
     * @param string $size Page size.
     * @return Web\Uri
     */
    public function addParams(\Bitrix\Main\Web\Uri $uri, $sef, $page, $size = null)
    {
    }
    /**
     * Clears an URI from navigation parameters and returns it.
     * @param Web\Uri $uri
     * @param bool $sef SEF mode.
     * @return Web\Uri
     */
    public function clearParams(\Bitrix\Main\Web\Uri $uri, $sef)
    {
    }
}