<?php

/**
 * Class LandingRestPendingComponent
 * This component for situation when during the import some application
 * blocks are not installed yet. After block will appear, this component
 * will rewrite the block content.
 */
class LandingRestPendingComponent extends \CBitrixComponent
{
    /**
     * Returns application info by its code.
     * @param string $appCode Application code.
     * @return array|null
     */
    protected function getAppInfo(string $appCode) : ?array
    {
    }
    /**
     * Finds repository block and return it id.
     * @param string $appCode Application code.
     * @param string $xmlId External id application.
     * @return array|null
     */
    protected function getRepoId(string $appCode, string $xmlId) : ?array
    {
    }
    /**
     * Updates site in Bitrix24 env for clearing cache.
     * @param int $id Site id.
     * @return void
     */
    protected function updateSite(int $id) : void
    {
    }
    /**
     * Save new data in the block.
     * @param int $blockId Block id.
     * @param int $repoId Repo id.
     * @param array $data New data for block.
     * @param bool $view Output new block content after save.
     * @return bool
     */
    protected function updateBlock(int $blockId, int $repoId, array $data, bool $view = \true) : bool
    {
    }
    /**
     * Base executable method.
     * @return void
     */
    public function executeComponent() : void
    {
    }
}