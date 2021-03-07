<?php

namespace Bitrix\Catalog\Product;

/**
 * Class SubscribeManager manages subscriptions.
 *
 **/
class SubscribeManager
{
    const ERROR_REQUIRED_PARAMATERS = 'ERROR_REQUIRED_PARAMATERS_12001';
    const ERROR_ADD_SUBSCRIBE = 'ERROR_ADD_SUBSCRIBE_12002';
    const ERROR_VALIDATE_FIELDS = 'ERROR_VALIDATE_FIELDS_12003';
    const ERROR_SUBSCRIBER_IDENTIFICATION = 'ERROR_SUBSCRIBER_IDENTIFICATION_12004';
    const ERROR_AUTHORIZATION = 'ERROR_AUTHORIZATION_12005';
    const ERROR_DELETE_SUBSCRIBE = 'ERROR_ADD_SUBSCRIBE_12006';
    const ERROR_ADD_SUBSCRIBE_ALREADY_EXISTS = 'ERROR_ADD_SUBSCRIBE_ALREADY_EXISTS_12007';
    const ERROR_ACTIVITY_CHANGE = 'ERROR_ACTIVITY_CHANGE_12008';
    const ERROR_UNSUBSCRIBE = 'ERROR_UNSUBSCRIBE_12009';
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var integer */
    protected $userId = 0;
    /** @var bool|null  */
    protected $isAdmin = false;
    public $contactTypes = array();
    protected $fields = array();
    protected $listAvailableFields = array('DATE_TO', 'USER_CONTACT', 'CONTACT_TYPE', 'USER_ID', 'ITEM_ID', 'NEED_SENDING', 'SITE_ID', 'LANDING_SITE_ID');
    public function __construct()
    {
    }
    /**
     * @return array An array containing Error objects.
     */
    public function getErrors()
    {
    }
    /**
     * The method creates a new subscription.
     *
     * @param array $subscribeData An array containing the data of a new subscription.
     * @return bool|int
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Exception
     */
    public function addSubscribe(array $subscribeData)
    {
    }
    /**
     * The method removes a lot of subscriptions received subscribeId list with the account permissions.
     *
     * @param array $listSubscribeId List subscribe id.
     * @param integer $itemId If this parameter is passed, cleaned write to the session.
     * @return bool
     * @throws \Exception
     */
    public function deleteManySubscriptions(array $listSubscribeId, $itemId = 0)
    {
    }
    /**
     * The method checks the access to subscription by using the userId or token.
     * Administrators subscription is always available.
     *
     * @param integer $subscribeId Subscribe id.
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     */
    public function checkAccessToSubscription($subscribeId)
    {
    }
    /**
     * The method begins the process of identification of the anonymous subscriber.
     *
     * @param array $subscriberData An array containing the data necessary for identification.
     * @param bool $sendLetter Marker, checks whether to send a letter.
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function runSubscriberIdentification(array $subscriberData, $sendLetter = true)
    {
    }
    /**
     * The method authenticates an anonymous subscriber.
     *
     * @param array $authorizationData The authentication information.
     * @return bool
     */
    public function authorizeSubscriber(array $authorizationData)
    {
    }
    /**
     * Method unsubscribe subscribers with fixed input data.
     * 
     * @param array $data Input data.
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public function unSubscribe(array $data)
    {
    }
    /**
     * The method activates the subscription clearing a field DATE_TO or writing the subscription term.
     *
     * @param array $listSubscribeId List subscribe id.
     * @param int $timePeriod Subscription period in seconds.
     * @return bool
     * @throws \Exception
     */
    public function activateSubscription(array $listSubscribeId, $timePeriod = 0)
    {
    }
    /**
     * The method deactivates the subscription by writing the current date.
     *
     * @param array $listSubscribeId List subscribe id.
     * @return bool
     * @throws \Exception
     */
    public function deactivateSubscription(array $listSubscribeId)
    {
    }
    /**
     * The method checks the subscription activity field value DATE_TO.
     *
     * @param mixed $dateTo An empty value or an instance DateTime.
     * @return bool
     */
    public function checkSubscriptionActivity($dateTo)
    {
    }
    /**
     * Write product id to the session to check that the user has subscribed.
     *
     * @param integer $itemId Product id.
     * @return void
     */
    public function setSessionOfSibscribedProducts($itemId)
    {
    }
    private function deleteSessionOfSibscribedProducts($itemId = 0)
    {
    }
    private function checkDataBeforeSave($productSubscribeData, array $subscribeData)
    {
    }
    private function validateFields()
    {
    }
    private function checkRequiredInputParams(array $inputParams, array $requiredParams)
    {
    }
}