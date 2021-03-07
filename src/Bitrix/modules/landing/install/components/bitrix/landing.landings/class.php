<?php

class LandingLandingsComponent extends \LandingBaseComponent
{
    /**
     * Count items per page.
     */
    const COUNT_PER_PAGE = 23;
    /**
     * Copy some landing.
     * @param int $id Landing id.
     * @param array $additional Additional params.
     * @return boolean
     */
    protected function actionCopy($id, $additional = array())
    {
    }
    /**
     * Move some landing.
     * @param int $id Landing id.
     * @param array $additional Additional params.
     * @return boolean
     */
    protected function actionMove($id, $additional = array())
    {
    }
    /**
     * Get previews from folder.
     * @param int $folderId Folder id.
     * @return array
     */
    protected function getFolderPreviews($folderId)
    {
    }
    /**
     * Returns true, if this site without external domain.
     * @return bool
     */
    protected function isIntranet()
    {
    }
    /**
     * Detect areas and requests some additional info.
     * @return void
     */
    protected function prepareAreas()
    {
    }
    /**
     * Returns sites and folders array.
     * @param array $sites Sites array.
     * @return array
     */
    protected function getTreeForCopy(array $sites) : array
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