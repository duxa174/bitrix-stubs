<?php

namespace Bitrix\Sender\Integration\Sender;

class Holiday
{
    /** @var  string $code */
    private $code;
    /** @var  Date $date */
    private $date;
    /** @var  Date $dateFrom */
    private $dateFrom;
    /** @var  Date $dateTo */
    private $dateTo;
    /** @var array $list */
    private static $list = [
        'feb14' => [14, 2],
        // code => [day, month]
        'feb23' => [23, 2],
        'mar8' => [8, 3],
        'halloween' => [31, 10],
        'thanks' => [22, 11],
        'christmas' => [25, 12],
        'new_year' => [[1, 12], [10, 1]],
    ];
    /** @var int $defaultYear */
    private static $defaultYear = 2049;
    /**
     * Get list by language.
     *
     * @param string|mixed $languageId Language ID.
     * @return self[]
     */
    public static function getList($languageId = LANGUAGE_ID)
    {
    }
    /**
     * Holiday constructor.
     *
     * @param string $code Code.
     * @param Date|null $date Date.
     * @param Date $dateFrom Date from.
     * @param Date $dateTo Date to.
     */
    public function __construct($code, \Bitrix\Main\Type\Date $date = null, \Bitrix\Main\Type\Date $dateFrom, \Bitrix\Main\Type\Date $dateTo)
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Get upper code.
     *
     * @return string
     */
    public function getCodeUpper()
    {
    }
    /**
     * Get name.
     *
     * @param string $template Template of name.
     * @param string $placeholder Placeholder of name in template.
     * @return string
     */
    public function getName($template = null, $placeholder = '%name%')
    {
    }
    /**
     * Get formatted date.
     *
     * @return string
     */
    public function formatDate()
    {
    }
    /**
     * Get date.
     *
     * @return Date
     */
    public function getDate()
    {
    }
    /**
     * Get day.
     *
     * @return int
     */
    public function getDay()
    {
    }
    /**
     * Get day.
     *
     * @return int
     */
    public function getMonth()
    {
    }
    /**
     * Get date from.
     *
     * @return Date
     */
    public function getDateFrom()
    {
    }
    /**
     * Get date to.
     *
     * @return Date
     */
    public function getDateTo()
    {
    }
    private static function createDate($day, $month, $year = null)
    {
    }
}