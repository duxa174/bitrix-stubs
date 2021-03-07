<?php

class SocialnetworkGroupCopy extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    public function configureActions()
    {
    }
    protected function listKeysSignedParameters()
    {
    }
    public function onIncludeComponentLang()
    {
    }
    public function onPrepareComponentParams($params)
    {
    }
    public function executeComponent()
    {
    }
    public function copyGroupAction()
    {
    }
    private function setFeatures(\Bitrix\Socialnetwork\Copy\GroupManager $copyManager, $executiveUserId, array $features, array $post)
    {
    }
    /**
     * @throws SystemException
     */
    private function checkModules()
    {
    }
    /**
     * @param int $userId
     * @param int $groupId
     * @throws AccessDeniedException
     */
    private function checkAccess(int $userId, int $groupId)
    {
    }
    private function setTitle()
    {
    }
    private function setResult()
    {
    }
    private function checkRequiredCreationParams($post)
    {
    }
    private function isProject($groupId)
    {
    }
    private function getListToGroupSelector()
    {
    }
    private function getUser()
    {
    }
    private function getFeatures($groupId)
    {
    }
    private function getFeatureTitle($featureId)
    {
    }
    private function getFeaturesFromRequest(array $features)
    {
    }
    private function getExceptionErrorMessage(\Exception $exception)
    {
    }
    private function getUrlToCopiedGroup(\Bitrix\Socialnetwork\Copy\GroupManager $copyManager, int $groupId) : string
    {
    }
    private function getUfIgnoreList(array $features)
    {
    }
    private function setErrors(\Exception $exception)
    {
    }
    private function getGroupData()
    {
    }
    private function getSubjects()
    {
    }
    private function getInitiatePerms()
    {
    }
    private function getSpamPerms()
    {
    }
    private function isExtranet()
    {
    }
    private function isExtranetInstalled()
    {
    }
    private function getChangedFields(array $post)
    {
    }
    /**
     * @param array $post
     * @return array|mixed
     * @throws ArgumentException
     */
    private function getProjectTerm(array $post)
    {
    }
    private function checkDateFormat($date)
    {
    }
}