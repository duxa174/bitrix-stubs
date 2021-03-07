<?php

namespace Bitrix\Main\Session;

final class CompositeSessionManager
{
    /**	@var SessionInterface */
    private $kernelSession;
    /**	@var SessionInterface */
    private $session;
    /**
     * CompositeSessionManager constructor.
     * @param SessionInterface $kernelSession
     * @param SessionInterface $session
     */
    public function __construct(\Bitrix\Main\Session\SessionInterface $kernelSession, \Bitrix\Main\Session\SessionInterface $session)
    {
    }
    public function start() : void
    {
    }
    public function destroy() : void
    {
    }
    public function clear() : void
    {
    }
    public function regenerateId() : void
    {
    }
}