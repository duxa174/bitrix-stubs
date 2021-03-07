<?php

namespace Bitrix\Perfmon\Sql;

//Sample usage:
/*
\Bitrix\Main\Loader::includeModule('perfmon');
$dir = new \Bitrix\Main\IO\Directory("/opt/php03.cp1251.www/mercurial/bitrix/modules");
foreach ($dir->getChildren()  as $child)
{
	if ($child->isDirectory() && $child->getName()!=='xxx')
	{
		echo $child->getName(),": ";

		foreach (array("mysql"=>";", "mssql"=>"GO", "oracle"=>"/") as $db=>$delimiter)
		{
			$path = $child->getPath()."/install/db/$db/install.sql";
			if (!\Bitrix\Main\IO\File::isFileExists($path))
				$path = $child->getPath()."/install/$db/install.sql";
			if (!\Bitrix\Main\IO\File::isFileExists($path))
				continue;
			//echo "<br>$path<br>";
			$sql = \Bitrix\Main\IO\File::getFileContents($path);
			$s = new \Bitrix\Perfmon\Sql\Schema;
			$s->createFromString($sql, $delimiter);
			// p r i n t _ r ($s->tables);
			echo count($s->tables->getList())," ";
		}
		echo "\n";
	}
}
*/
class Schema
{
    /** @var Collection */
    public $tables = null;
    /** @var Collection */
    public $procedures = null;
    /** @var Collection */
    public $sequences = null;
    function __construct()
    {
    }
    /**
     * Fills database schema from DDL text.
     *
     * @param string $str DDL text.
     * @param string $delimiter How to split DDL into statements.
     *
     * @return void
     * @throws NotSupportedException
     */
    public function createFromString($str, $delimiter)
    {
    }
    /**
     * Splits tokens array into bunch of individual DDL statements.
     *
     * @param Tokenizer $tokenizer Tokens container.
     * @param string $delimiter How to split DDL into statements.
     *
     * @return array[Tokenizer]
     */
    protected function splitStatements(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer, $delimiter = ';')
    {
    }
    /**
     * Fills some schema part with information from one DDL statement.
     *
     * @param Tokenizer $tokenizer Statement tokens.
     *
     * @return void
     * @throws NotSupportedException
     */
    protected function executeStatement(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * @param Tokenizer $tokenizer Statement tokens.
     *
     * @return void
     * @throws NotSupportedException
     */
    protected function executeCreate(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * @param Tokenizer $tokenizer Statement tokens.
     *
     * @return void
     * @throws NotSupportedException
     */
    protected function executeAlter(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * @param Tokenizer $tokenizer Statement tokens.
     *
     * @return void
     * @throws NotSupportedException
     */
    protected function executeCreateTable(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * @param Tokenizer $tokenizer Statement tokens.
     * @param boolean $unique Index uniqueness flag.
     *
     * @return void
     * @throws NotSupportedException
     */
    protected function executeCreateIndex(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer, $unique)
    {
    }
    /**
     * @param Tokenizer $tokenizer Statement tokens.
     *
     * @return void
     * @throws NotSupportedException
     */
    protected function executeCreateTrigger(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * @param Tokenizer $tokenizer Statement tokens.
     *
     * @return void
     * @throws NotSupportedException
     */
    protected function executeCreateProcedure(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * @param Tokenizer $tokenizer Statement tokens.
     *
     * @return void
     * @throws NotSupportedException
     */
    protected function executeCreateSequence(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
}