<?php

class MainAuthFormComponent extends \CBitrixComponent
{
    /**
     * Current errors.
     * @var array
     */
    protected $errors = array();
    /**
     * Fields code for form html.
     * @var array
     */
    protected $formFields = ['email' => 'USER_EMAIL', 'login' => 'USER_LOGIN', 'password' => 'USER_PASSWORD', 'confirm_password' => 'USER_CONFIRM_PASSWORD', 'remember' => 'USER_REMEMBER', 'checkword' => 'USER_CHECKWORD', 'otp' => 'USER_OTP', 'otp_remember' => 'OTP_REMEMBER', 'action' => 'AUTH_ACTION'];
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * Get global Application.
     * @return \CMain
     */
    protected function getApplication()
    {
    }
    /**
     * Get global User.
     * @return \CUser
     */
    protected function getUser()
    {
    }
    /**
     * Return true if current user is authorized.
     * @return boolean
     */
    protected function isAuthorized()
    {
    }
    /**
     * Gets some option of main module by code.
     * @param string $code Option code.
     * @param mixed $default Default value.
     * @return mixed
     */
    protected function getOption($code, $default = \null)
    {
    }
    /**
     * Check var in arParams. If no exists, create with default val.
     * @param string|int $var Variable.
     * @param mixed $default Default value.
     * @return mixed
     */
    protected function checkParam($var, $default)
    {
    }
    /**
     * Get URI without.
     * @return string
     */
    protected function getUri()
    {
    }
    /**
     * Get some var from request.
     * @param string $fieldCode Code of $this->formFields.
     * @return mixed
     */
    protected function requestField($fieldCode)
    {
    }
    /**
     * Get some var from request.
     * @param string $var Code of var.
     * @return mixed
     */
    protected function request($var)
    {
    }
    /**
     * Add one more error.
     * @param string $code Code of error.
     * @param string $message Error message.
     * @return void
     */
    protected function addError($code, $message)
    {
    }
    /**
     * Get current errors.
     * @param bool $string Convert Errors to string.
     * @return array
     */
    protected function getErrors($string = \true)
    {
    }
    /**
     * Get error from action.
     * @param mixed $res Some resource.
     * @return boolean
     */
    protected function processingErrors($res)
    {
    }
    /**
     * Gets captcha code if need.
     * @param string $login Login.
     * @return string
     */
    protected function getCaptchaCodeForUser($login)
    {
    }
    /**
     * Processing social services authorization, and return array of its.
     * @return array
     */
    protected function processingAuthServices()
    {
    }
    /**
     * Is secure auth connection?
     * @return boolean
     */
    protected function isSecureAuth()
    {
    }
    /**
     * Processing login.
     * @return void
     */
    protected function actionLogin()
    {
    }
    /**
     * Processing OTP login.
     * @return void
     */
    protected function actionOtp()
    {
    }
    /**
     * Redirect to the success page.
     * @return void
     */
    protected function successRedirect()
    {
    }
    /**
     * Refresh current page.
     * @param array $params Delete or add params.
     * @return void
     */
    protected function refresh(array $params = array())
    {
    }
    /**
     * OTP required?
     * @param boolean $ignoreReset Ignore reset otp by param.
     * @return bool
     */
    protected function isOtpRequired($ignoreReset = \false)
    {
    }
    /**
     * Base executable method.
     * @return void
     */
    public function executeComponent()
    {
    }
}