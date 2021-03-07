<?php

namespace Bitrix\Sale\Controller;

class PersonType extends \Bitrix\Sale\Controller\Controller
{
    //region Actions
    public function getFieldsAction()
    {
    }
    /*
    	public function modifyAction(array $fields)
    	{
    		$fields = self::prepareFields($fields);
    
    		$personTypeId = 0;
    		if(isset($fields['ID']))
    			$personTypeId = $fields['ID'];
    
    		$r = (int)$personTypeId>0 ? $this->updateAction($personTypeId, $fields):$this->addAction($fields);
    
    		if(is_array($r))
    			$this->modifyBusinessValuePersonDomain(array_merge($r, ['BUSVAL_DOMAIN'=>$fields['BUSVAL_DOMAIN']['DOMAIN_TYPE']]));
    
    		return ['PERSON_TYPE'=>$r];
    	}*/
    public function addAction(array $fields)
    {
    }
    public function updateAction($id, array $fields)
    {
    }
    public function getAction($id)
    {
    }
    public function deleteAction($id)
    {
    }
    public function listAction($select = [], $filter = [], $order = [], \Bitrix\Main\UI\PageNavigation $pageNavigation)
    {
    }
    //end region
    protected function get($id)
    {
    }
    protected function isCodeUniq($code, $id = null)
    {
    }
    protected function exists($id)
    {
    }
    protected function modifyBusinessValuePersonDomain(array $fields)
    {
    }
    public static function prepareFields(array $fields)
    {
    }
}