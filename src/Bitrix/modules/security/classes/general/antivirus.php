<?php

/*
Here is testing code:
$s=<<<EOT

Place tested html here

EOT;
CModule::IncludeModule('security');
$Antivirus = new CSecurityAntiVirus("pre");
$Antivirus->replace=1;
$Antivirus->Analyze($s);
echo htmlspecialcharsbx($s),'<hr><pre>',htmlspecialcharsbx(print_r($Antivirus,1));
*/
class CSecurityAntiVirus
{
    var $place = "";
    var $stylewithiframe = \false;
    // this properties may be changed after object creation
    var $maxrating = 20;
    //рейтинг принятия решений
    var $useglobalrules = 1;
    //использовать глобальные правила
    var $replace = 1;
    //
    var $replacement = "<!-- deleted by bitrix Antivirus -->";
    //на что заменяем, если заменяем..
    //результаты
    var $resultrules;
    //массив сработавших правил
    var $whitelist_id;
    //вспомогательные свойства
    var $data = '';
    //полный код блока, включая ограничивающие теги
    var $type = '';
    //тип блока
    var $body = '';
    // тело блока.
    var $bodylines = \false;
    // массив строк из body
    var $bodyWOquotes = '';
    var $atributes = '';
    // дополнительные атрибуты (вместе с src)
    var $cnt = 0;
    //счетчик обработанных блоков
    var $prev = '';
    var $next = '';
    private $quotes = array();
    function __construct($place = "body")
    {
    }
    public static function IsActive()
    {
    }
    public static function SetActive($bActive = \false)
    {
    }
    public static function GetAuditTypes()
    {
    }
    public static function OnPageStart()
    {
    }
    public static function OnEndBufferContent(&$content)
    {
    }
    public static function OnAfterEpilog()
    {
    }
    public static function PHPShutdown()
    {
    }
    public static function GetWhiteList()
    {
    }
    public static function UpdateWhiteList($arWhiteList)
    {
    }
    // function returns 1, if current block is in white list and needs not processing.
    function isInWhiteList()
    {
    }
    //заглушка. Возщвращает рейтинг опасности текущего блока из кеша, или FALSE
    // кешируются только составляющся рейтинга, вложденная внутренними правилами.
    function returnfromcache()
    {
    }
    //заглушка. Добавляет рейтинг опасности для текущего блока в кеш.
    function addtocache()
    {
    }
    //механизм для вывода сообщения об обнаруженном подозрительном текущем блоке
    function dolog()
    {
    }
    // вызывается каждый раз, когда обработка блока закончена и блок признан нормальным.
    // функция должна возвратить содержимое блока.
    function end_okblock()
    {
    }
    function end_whiteblock()
    {
    }
    // вызывается каждый раз, когда обработка блока закончена и блок признан опасным.
    // функция должна возвратить содержимое блока.
    function end_blkblock()
    {
    }
    function CreateTrace()
    {
    }
    function Analyze(&$content)
    {
    }
    /*
    Возвращает рейтинг опасности блока (ифрейм или скрипт)
    входные параметры класса должны быть заполнеы.
    */
    function returnblockrating()
    {
    }
    // ПРАВИЛА
    // надбавки и скидки действующие для каждого скрипта (возможно с некоторыми условиями)
    function rulescriptglobals()
    {
    }
    //правила, учитывающие окружение скрипта
    function rulescriptblocks()
    {
    }
    //правила, отлавливающие "невидимость" блока
    function ruleframevisiblity()
    {
    }
    //правила, отлавливающие потенциально опасныеключевые слова в скрипте
    function rulescriptbasics()
    {
    }
    //правила, отлавливающие vbscript
    function rulescriptvbscript()
    {
    }
    //правила, отлавливающие опасные места загрузки блоков
    function ruleallsources()
    {
    }
    //правила, учитываюбщие подозрительные длины строк и объектов
    function rulescriptlenghts()
    {
    }
    // Анализ частотных вхождений символов...
    function rulescriptfrequensy()
    {
    }
    // признаки, уменьшающие рейтинг опасности скрипта
    function rulescriptwhiterules()
    {
    }
    //анализ признаков в именах функций и переменных
    function rulescriptnamerules()
    {
    }
    // вспомогательные функции..
    // возвращает частотные содержания символов в строке
    function getstatchars(&$str)
    {
    }
    function getnames_cb($m)
    {
    }
    function getnames($str)
    {
    }
    function isnormalname($nm, &$l)
    {
    }
    function returnscriptbody($str)
    {
    }
    public static function isSafetyRequest()
    {
    }
}