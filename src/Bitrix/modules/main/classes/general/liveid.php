<?php

/* TODO: Comments are out of date and incomplete. */
/**
 * FILE:        windowslivelogin.php
 *
 * DESCRIPTION: Sample implementation of Web Authentication and Delegated
 *              Authentication protocol in PHP. Also includes trusted
 *              sign-in and application verification sample
 *              implementations.
 *
 * VERSION:     1.1
 *
 * Copyright (c) 2008 Microsoft Corporation.  All Rights Reserved.
 */
/**
 * Holds the user information after a successful sign-in.
 */
class WLL_User
{
    /**
     * Initialize the User with time stamp, userid, flags, context and token.
     */
    public function __construct($timestamp, $id, $flags, $context, $token)
    {
    }
    /*private*/
    var $_timestamp;
    /**
     * Returns the Unix timestamp as obtained from the SSO token.
     */
    /*public*/
    function getTimestamp()
    {
    }
    /**
     * Sets the Unix timestamp.
     */
    /*private*/
    function setTimestamp($timestamp)
    {
    }
    /*private*/
    var $_id;
    /**
     * Returns the pairwise unique ID for the user.
     */
    /*public*/
    function getId()
    {
    }
    /**
     * Sets the pairwise unique ID for the user.
     */
    /*private*/
    function setId($id)
    {
    }
    /*private*/
    var $_usePersistentCookie;
    /**
     * Indicates whether the application is expected to store the
     * user token in a session or persistent cookie.
     */
    /*public*/
    function usePersistentCookie()
    {
    }
    /**
     * Sets the usePersistentCookie flag for the user.
     */
    /*private*/
    function setFlags($flags)
    {
    }
    /*private*/
    var $_context;
    /**
     * Returns the application context that was originally passed
     * to the sign-in request, if any.
     */
    /*public*/
    function getContext()
    {
    }
    /**
     * Sets the the Application context.
     */
    /*private*/
    function setContext($context)
    {
    }
    /*private*/
    var $_token;
    /**
     * Returns the encrypted Web Authentication token containing
     * the UID. This can be cached in a cookie and the UID can be
     * retrieved by calling the ProcessToken method.
     */
    /*public*/
    function getToken()
    {
    }
    /**
     * Sets the the User token.
     */
    /*private*/
    function setToken($token)
    {
    }
    var $_error = \false;
    function setError($str)
    {
    }
    function getError()
    {
    }
}
/**
 * Holds the Consent Token object corresponding to consent granted.
 */
class WLL_ConsentToken
{
    /**
     * Indicates whether the delegation token is set and has not expired.
     */
    /*public*/
    function isValid()
    {
    }
    /**
     * Refreshes the current token and replace it. If operation succeeds
     * true is returned to signify success.
     */
    /*public*/
    function refresh()
    {
    }
    /*private*/
    var $_wll;
    /**
     * Initialize the ConsentToken module with the WindowsLiveLogin,
     * delegation token, refresh token, session key, expiry, offers,
     * location ID, context, decoded token, and raw token.
     */
    public function __construct($wll, $delegationtoken, $refreshtoken, $sessionkey, $expiry, $offers, $locationID, $context, $decodedtoken, $token)
    {
    }
    /*private*/
    var $_delegationtoken;
    /**
     * Gets the Delegation token.
     */
    /*public*/
    function getDelegationToken()
    {
    }
    /**
     * Sets the Delegation token.
     */
    /*private*/
    function setDelegationToken($delegationtoken)
    {
    }
    /*private*/
    var $_refreshtoken;
    /**
     * Gets the refresh token.
     */
    /*public*/
    function getRefreshToken()
    {
    }
    /**
     * Sets the refresh token.
     */
    /*private*/
    function setRefreshToken($refreshtoken)
    {
    }
    /*private*/
    var $_sessionkey;
    /**
     * Gets the session key.
     */
    /*public*/
    function getSessionKey()
    {
    }
    /**
     * Sets the session key.
     */
    /*private*/
    function setSessionKey($sessionkey)
    {
    }
    /*private*/
    var $_expiry;
    /**
     * Gets the expiry time of delegation token.
     */
    /*public*/
    function getExpiry()
    {
    }
    /**
     * Sets the expiry time of delegation token.
     */
    /*private*/
    function setExpiry($expiry)
    {
    }
    /*private*/
    var $_offers;
    /**
     * Gets the list of offers/actions for which the user granted consent.
     */
    /*public*/
    function getOffers()
    {
    }
    /*private*/
    var $_offers_string;
    /**
     * Gets the string representation of all the offers/actions for which
     * the user granted consent.
     */
    /*public*/
    function getOffersString()
    {
    }
    /**
     * Sets the offers/actions for which user granted consent.
     */
    /*private*/
    function setOffers($offers)
    {
    }
    /*private*/
    var $_locationID;
    /**
     * Gets the location ID.
     */
    /*public*/
    function getLocationID()
    {
    }
    /**
     * Sets the location ID.
     */
    /*private*/
    function setLocationID($locationID)
    {
    }
    /*private*/
    var $_context;
    /**
     * Returns the application context that was originally passed
     * to the sign-in request, if any.
     */
    /*public*/
    function getContext()
    {
    }
    /**
     * Sets the application context.
     */
    /*private*/
    function setContext($context)
    {
    }
    /*private*/
    var $_decodedtoken;
    /**
     * Gets the decoded token.
     */
    /*public*/
    function getDecodedToken()
    {
    }
    /**
     * Sets the decoded token.
     */
    /*private*/
    function setDecodedToken($decodedtoken)
    {
    }
    /*private*/
    var $_token;
    /**
     * Gets the raw token.
     */
    /*public*/
    function getToken()
    {
    }
    /**
     * Sets the raw token.
     */
    /*private*/
    function setToken($token)
    {
    }
    /**
     * Makes a copy of the ConsentToken object.
     */
    /*private*/
    function copy($ct)
    {
    }
    var $_error = \false;
    function setError($str)
    {
    }
    function getError()
    {
    }
}
class WindowsLiveLogin
{
    /* Implementation of basic methods for Web Authentication support. */
    /*private*/
    var $_debug = \false;
    /**
     * Stub implementation for logging errors. If you want to enable
     * debugging output, set this to true. In this implementation
     * errors will be logged using the PHP error_log function.
     */
    /*public*/
    function setDebug($debug)
    {
    }
    /**
     * Stub implementation for logging errors. By default, this
     * function does nothing if the debug flag has not been set with
     * setDebug. Otherwise, errors are logged using the PHP error_log
     * function.
     */
    /*private*/
    function debug($string)
    {
    }
    /**
     * Stub implementation for handling a fatal error.
     */
    /*private*/
    function fatal($string)
    {
    }
    /**
     * Initialize the WindowsLiveLogin module with the application ID,
     *   secret key, and security algorithm.
     *
     *  We recommend that you employ strong measures to protect the
     *  secret key. The secret key should never be exposed to the Web
     *  or other users.
     *
     *  Be aware that if you do not supply these settings at
     *  initialization time, you may need to set the corresponding
     *  properties manually.
     *
     *  For Delegated Authentication, you may optionally specify the
     *  privacy policy URL and return URL. If you do not specify these
     *  values here, the default values that you specified when you
     *  registered your application will be used.
     *
     *  The 'force_delauth_nonprovisioned' flag also indicates whether
     *  your application is registered for Delegated Authentication
     *  (that is, whether it uses an application ID and secret key). We
     *  recommend that your Delegated Authentication application always
     *  be registered for enhanced security and functionality.
     */
    public function __construct($appid = \null, $secret = \null, $securityalgorithm = \null, $force_delauth_nonprovisioned = \null, $policyurl = \null, $returnurl = \null)
    {
    }
    /**
     * Initialize the WindowsLiveLogin module from a settings file.
     *
     *  'settingsFile' specifies the location of the XML settings file
     *  that contains the application ID, secret key, and security
     *  algorithm. The file is of the following format:
     *
     *  <windowslivelogin>
     *    <appid>APPID</appid>
     *    <secret>SECRET</secret>
     *    <securityalgorithm>wsignin1.0</securityalgorithm>
     *  </windowslivelogin>
     *
     *  In a Delegated Authentication scenario, you may also specify
     *  'returnurl' and 'policyurl' in the settings file, as shown in the
     *  Delegated Authentication samples.
     *
     *  We recommend that you store the WindowsLiveLogin settings file
     *  in an area on your server that cannot be accessed through the
     *  Internet. This file contains important confidential information.
     */
    /*public static*/
    function initFromXml($settingsFile)
    {
    }
    /*private*/
    var $_appid;
    /**
     * Sets the application ID. Use this method if you did not specify
     * an application ID at initialization.
     **/
    /*public*/
    function setAppId($appid)
    {
    }
    /**
     * Returns the application ID.
     */
    /*public*/
    function getAppId()
    {
    }
    /*private*/
    var $_signkey;
    /*private*/
    var $_cryptkey;
    /**
     * Sets your secret key. Use this method if you did not specify
     * a secret key at initialization.
     */
    /*public*/
    function setSecret($secret)
    {
    }
    /*private*/
    var $_oldsignkey;
    /*private*/
    var $_oldcryptkey;
    /**
     * Sets your old secret key.
     *
     * Use this property to set your old secret key if you are in the
     * process of transitioning to a new secret key. You may need this
     * property because the Windows Live ID servers can take up to
     * 24 hours to propagate a new secret key after you have updated
     * your application settings.
     *
     * If an old secret key is specified here and has not expired
     * (as determined by the oldsecretexpiry setting), it will be used
     * as a fallback if token decryption fails with the new secret
     * key.
     */
    /*public*/
    function setOldSecret($secret)
    {
    }
    /*private*/
    var $_oldsecretexpiry;
    /**
     * Sets the expiry time for your old secret key.
     *
     * After this time has passed, the old secret key will no longer be
     * used even if token decryption fails with the new secret key.
     *
     * The old secret expiry time is represented as the number of seconds
     * elapsed since January 1, 1970.
     */
    /*public*/
    function setOldSecretExpiry($timestamp)
    {
    }
    /**
     * Gets the old secret key expiry time.
     */
    /*public*/
    function getOldSecretExpiry()
    {
    }
    /*private*/
    var $_securityalgorithm;
    /**
     * Sets the version of the security algorithm being used.
     */
    /*public*/
    function setSecurityAlgorithm($securityalgorithm)
    {
    }
    /**
     * Gets the version of the security algorithm being used.
     */
    /*public*/
    function getSecurityAlgorithm()
    {
    }
    /*private*/
    var $_force_delauth_nonprovisioned;
    /**
     * Sets a flag that indicates whether Delegated Authentication
     * is non-provisioned (i.e. does not use an application ID or secret
     * key).
     */
    /*public*/
    function setForceDelAuthNonProvisioned($force_delauth_nonprovisioned)
    {
    }
    /*private*/
    var $_policyurl;
    /**
     * Sets the privacy policy URL if you did not provide one at initialization time.
     */
    /*public*/
    function setPolicyUrl($policyurl)
    {
    }
    /**
     * Gets the privacy policy URL for your site.
     */
    /*public*/
    function getPolicyUrl()
    {
    }
    /*private*/
    var $_returnurl;
    /**
     * Sets the return URL--the URL on your site to which the consent
     *  service redirects users (along with the action, consent token,
     *  and application context) after they have successfully provided
     *  consent information for Delegated Authentication. This value will
     *  override the return URL specified during registration.
     */
    /*public*/
    function setReturnUrl($returnurl)
    {
    }
    /**
     * Returns the return URL of your site.
     */
    /*public*/
    function getReturnUrl()
    {
    }
    /*private*/
    var $_baseurl;
    /**
     * Sets the base URL to use for the Windows Live Login server.
     *  You should not have to change this property. Furthermore, we recommend
     *  that you use the Sign In control instead of the URL methods
     *  provided here.
     */
    /*public*/
    function setBaseUrl($baseurl)
    {
    }
    /**
     * Gets the base URL to use for the Windows Live Login server.
     * You should not have to use this property. Furthermore, we recommend
     * that you use the Sign In control instead of the URL methods
     * provided here.
     */
    /*public*/
    function getBaseUrl()
    {
    }
    /*private*/
    var $_secureurl;
    /**
     * Sets the secure (HTTPS) URL to use for the Windows Live Login
     * server. You should not have to change this property.
     */
    /*public*/
    function setSecureUrl($secureurl)
    {
    }
    /**
     * Gets the secure (HTTPS) URL to use for the Windows Live Login
     * server. You should not have to use this functon directly.
     */
    /*public*/
    function getSecureUrl()
    {
    }
    /*private*/
    var $_consenturl;
    /**
     * Sets the Consent Base URL to use for the Windows Live Consent
     * server. You should not have to use or change this property directly.
     */
    /*public*/
    function setConsentBaseUrl($consenturl)
    {
    }
    /**
     * Gets the URL to use for the Windows Live Consent server. You
     * should not have to use or change this directly.
     */
    /*public*/
    function getConsentBaseUrl()
    {
    }
    /* Methods for Web Authentication support. */
    /**
     * Returns the sign-in URL to use for the Windows Live Login server.
     * We recommend that you use the Sign In control instead.
     *
     * If you specify it, 'context' will be returned as-is in the sign-in
     * response for site-specific use.
     */
    /*public*/
    function getLoginUrl($context = \null, $market = \null)
    {
    }
    /**
     * Returns the sign-out URL to use for the Windows Live Login server.
     * We recommend that you use the Sign In control instead.
     */
    /*public*/
    function getLogoutUrl($market = \null)
    {
    }
    /**
     * Processes the sign-in response from Windows Live Login server.
     *
     * @param query contains the preprocessed POST query, a map of
     *              Strings to an an array of Strings, such as that
     *              returned by ServletRequest.getParameterMap().
     * @return      a User object on successful sign-in; otherwise null.
     */
    /*public*/
    function processLogin($query)
    {
    }
    /**
     * Decodes and validates a Web Authentication token. Returns a User
     * object on success. If a context is passed in, it will be returned
     * as the context field in the User object.
     */
    /*public*/
    function processToken($token, $context = \null)
    {
    }
    /**
     * Returns an appropriate content type and body response that the
     * application handler can return to signify a successful sign-out
     * from the application.
     *
     * When a user signs out of Windows Live or a Windows Live
     * application, a best-effort attempt is made at signing the user out
     * from all other Windows Live applications the user might be signed
     * in to. This is done by calling the handler page for each
     * application with 'action' set to 'clearcookie' in the query
     * string. The application handler is then responsible for clearing
     * any cookies or data associated with the sign-in. After successfully
     * signing the user out, the handler should return a GIF (any GIF)
     * image as response to the 'action=clearcookie' query.
     */
    /*public*/
    function getClearCookieResponse()
    {
    }
    /* Methods for Delegated Authentication. */
    /*
     * Returns the consent URL to use for Delegated Authentication for
     * the given comma-delimited list of offers.
     *
     * If you specify it, 'context' will be returned as-is in the consent
     * response for site-specific use.
     *
     * The registered/configured return URL can also be overridden by
     * specifying 'ru' here.
     *
     * You can change the language in which the consent page is displayed
     * by specifying a culture ID (For example, 'fr-fr' or 'en-us') in the
     * 'market' parameter.
     */
    /*public*/
    function getConsentUrl($offers, $context = \null, $ru = \null, $market = \null)
    {
    }
    /*
     * Returns the URL to use to download a new consent token, given the
     * offers and refresh token.
     *
     * The registered/configured return URL can also be overridden by
     * specifying 'ru' here.
     */
    /*public*/
    function getRefreshConsentTokenUrl($offers, $refreshtoken, $ru = \null)
    {
    }
    /*
     * Returns the URL for the consent-management user interface.
     *
     * You can change the language in which the consent page is displayed
     * by specifying a culture ID (For example, 'fr-fr' or 'en-us') in the
     * 'market' parameter.
     */
    /*public*/
    function getManageConsentUrl($market = \null)
    {
    }
    /*
     * Processes the POST response from the Delegated Authentication
     * service after a user has granted consent. The processConsent
     * function extracts the consent token string and returns the result
     * of invoking the processConsentToken method.
     */
    /*public*/
    function processConsent($query)
    {
    }
    /*
     * Processes the consent token string that is returned in the POST
     * response by the Delegated Authentication service after a
     * user has granted consent.
     */
    /*public*/
    function processConsentToken($token, $context = \null)
    {
    }
    /*
     * Attempts to obtain a new, refreshed token and return it. The
     * original token is not modified.
     */
    /*public*/
    function refreshConsentToken($token, $ru = \null)
    {
    }
    /*
     * Helper function to obtain a new, refreshed token and return it.
     * The original token is not modified.
     */
    /*public*/
    function refreshConsentToken2($offers_string, $refreshtoken, $ru = \null)
    {
    }
    /* Common methods. */
    /*
     * Decodes and validates the token.
     */
    /*public*/
    function decodeAndValidateToken($token, $cryptkey = \null, $signkey = \null, $internal_allow_recursion = \true)
    {
    }
    /**
     * Decodes the given token string; returns undef on failure.
     *
     * First, the string is URL-unescaped and base64 decoded.
     * Second, the IV is extracted from the first 16 bytes of the string.
     * Finally, the string is decrypted using the encryption key.
     */
    /*public*/
    function decodeToken($token, $cryptkey = \null)
    {
    }
    /**
     * Creates a signature for the given string by using the signature
     * key.
     */
    /*public*/
    function signToken($token, $signkey = \null)
    {
    }
    /**
     * Extracts the signature from the token and validates it.
     */
    /*public*/
    function validateToken($token, $signkey = \null)
    {
    }
    /* Implementation of the methods needed to perform Windows Live
    	application verification as well as trusted sign-in. */
    /**
     * Generates an application verifier token. An IP address can
     * optionally be included in the token.
     */
    /*public*/
    function getAppVerifier($ip = \null)
    {
    }
    /**
     * Returns the URL that is required to retrieve the application
     * security token.
     *
     * By default, the application security token is generated for
     * the Windows Live site; a specific Site ID can optionally be
     * specified in 'siteid'. The IP address can also optionally be
     * included in 'ip'.
     *
     * If 'js' is nil, a JavaScript Output Notation (JSON) response is
     * returned in the following format:
     *
     *  {"token":"<value>"}
     *
     * Otherwise, a JavaScript response is returned. It is assumed that
     * WLIDResultCallback is a custom function implemented to handle the
     * token value:
     *
     * WLIDResultCallback("<tokenvalue>");
     */
    /*public*/
    function getAppLoginUrl($siteid = \null, $ip = \null, $js = \null)
    {
    }
    /**
     * Retrieves the application security token for application
     * verification from the application sign-in URL.
     *
     * By default, the application security token will be generated for
     * the Windows Live site; a specific Site ID can optionally be
     * specified in 'siteid'. The IP address can also optionally be
     * included in 'ip'.
     *
     * Implementation note: The application security token is downloaded
     * from the application sign-in URL in JSON format:
     *
     * {"token":"<value>"}
     *
     * Therefore we must extract <value> from the string and return it as
     *  seen here.
     */
    /*public*/
    function getAppSecurityToken($siteid = \null, $ip = \null)
    {
    }
    /**
     * Returns a string that can be passed to the getTrustedParams
     * function as the 'retcode' parameter. If this is specified as the
     * 'retcode', the application will be used as return URL after it
     * finishes trusted sign-in.
     */
    /*public*/
    function getAppRetCode()
    {
    }
    /**
     * Returns a table of key-value pairs that must be posted to the
     * sign-in URL for trusted sign-in. Use HTTP POST to do this. Be aware
     * that the values in the table are neither URL nor HTML escaped and
     * may have to be escaped if you are inserting them in code such as
     * an HTML form.
     *
     * The user to be trusted on the local site is passed in as string
     * 'user'.
     *
     *  Optionally, 'retcode' specifies the resource to which successful
     *  sign-in is redirected, such as Windows Live Mail, and is typically
     *  a string in the format 'id=2000'. If you pass in the value from
     *  getAppRetCode instead, sign-in will be redirected to the
     *  application. Otherwise, an HTTP 200 response is returned.
     */
    /*public*/
    function getTrustedParams($user, $retcode = \null)
    {
    }
    /**
     * Returns the trusted sign-in token in the format that is needed by a
     * control doing trusted sign-in.
     *
     * The user to be trusted on the local site is passed in as string
     * 'user'.
     */
    /*public*/
    function getTrustedToken($user)
    {
    }
    /**
     * Returns the trusted sign-in URL to use for Windows Live Login server.
     */
    /*public*/
    function getTrustedLoginUrl()
    {
    }
    /**
     * Returns the trusted sign-in URL to use for Windows Live
     *  Login server.
     */
    /*public*/
    function getTrustedLogoutUrl()
    {
    }
    /* Helper methods */
    /**
     * Function to parse the settings file.
     */
    /*private*/
    function parseSettings($settingsFile)
    {
    }
    /**
     * Derives the key, given the secret key and prefix as described in the
     * Web Authentication SDK documentation.
     */
    /*private*/
    function derive($secret, $prefix)
    {
    }
    /**
     * Parses query string and returns a hash.
     *
     * If a hash ref is passed in from CGI->Var, it is dereferenced and
     * returned.
     */
    /*private*/
    function parse($input)
    {
    }
    /**
     * Generates a time stamp suitable for the application verifier
     * token.
     */
    /*private*/
    function getTimestamp()
    {
    }
    /**
     * Base64-encodes and URL-escapes a string.
     */
    /*private*/
    function e64($input)
    {
    }
    /**
     * URL-unescapes and Base64-decodes a string.
     */
    /*private*/
    function u64($input)
    {
    }
    /**
     * Fetches the contents given a URL.
     */
    /*private*/
    function fetch($url)
    {
    }
    var $_error = \false;
    function setError($str)
    {
    }
    function getError()
    {
    }
    function OnExternalAuthList()
    {
    }
    function IsAvailable()
    {
    }
}