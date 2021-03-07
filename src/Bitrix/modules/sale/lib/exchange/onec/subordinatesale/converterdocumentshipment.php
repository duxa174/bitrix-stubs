<?php

namespace Bitrix\Sale\Exchange\OneC\SubordinateSale;

class ConverterDocumentShipment extends \Bitrix\Sale\Exchange\OneC\ConverterDocumentShipment
{
    protected function getFieldsInfo()
    {
    }
    public function externalizeItems(array $items, array $info)
    {
    }
    protected function getBasePriceDelivery($list = [])
    {
    }
    /*
    	public function externalizeStories(array $stories, array $info)
    	{
    		$orderDocumentConverter = new ConverterDocumentOrder();
    		return $orderDocumentConverter->externalizeStories($stories, $info);
    	}
    
    	public function externalizeTaxes(array $items, array $info)
    	{
    		$orderDocumentConverter = new ConverterDocumentOrder();
    		return $orderDocumentConverter->externalizeTaxes($items, $info);
    	}
    */
}