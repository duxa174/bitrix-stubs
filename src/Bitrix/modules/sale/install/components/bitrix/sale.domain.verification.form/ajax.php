<?php

/**
 * Class SaleDomainVerificationFormAjaxController
 */
class SaleDomainVerificationFormAjaxController extends \Bitrix\Main\Engine\Controller
{
    /** @var Domain\Verification\BaseManager $domainVerificationManager */
    private $domainVerificationManager;
    /**
     * @param \Bitrix\Main\Engine\Action $action
     * @return bool
     * @throws \Bitrix\Main\LoaderException
     */
    protected function processBeforeAction(\Bitrix\Main\Engine\Action $action)
    {
    }
    /**
     * @param $id
     * @return array
     * @throws Exception
     */
    public function deleteDomainAction($id)
    {
    }
}