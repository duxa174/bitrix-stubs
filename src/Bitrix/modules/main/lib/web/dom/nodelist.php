<?php

namespace Bitrix\Main\Web\DOM;

/*
class NodeList extends \Bitrix\Main\Type\Dictionary implements \Traversable
{
	public function item($index)
	{
		return $this->offsetGet($index);
	}

	public function haveItem(Node $item)
	{
		for($i = 0; $i < $this->count(); $i++)
		{
			if($item->isEqual($this->item($i)))
			{
				return true;
			}
		}

		return false;
	}

	public function removeItem(Node $item)
	{
		for($i = 0; $i < $this->count(); $i++)
		{
			if($item === $this->item($i))
			{
				$this->offsetUnset($i);
				break;
			}
		}
	}
}
*/
class NodeList implements \Iterator
{
    protected $length = 0;
    protected $position = 0;
    protected $values = array();
    public function __construct(array $values = null)
    {
    }
    public function getLength()
    {
    }
    /*
     * @return Node|null
     */
    public function item($index)
    {
    }
    public function set(array $values)
    {
    }
    public function get()
    {
    }
    public function rewind()
    {
    }
    public function current()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function valid($index = null)
    {
    }
}