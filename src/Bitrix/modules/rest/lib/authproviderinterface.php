<?php

namespace Bitrix\Rest;

interface AuthProviderInterface
{
    public function authorizeClient($clientId, $userId, $state = '');
    public function get($clientId, $scope, $additionalParams, $userId);
}