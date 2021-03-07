<?php

class LandingEditComponent extends \LandingBaseFormComponent
{
    /**
     * Detect or not og image from landing content.
     */
    const DETECT_OG_IMAGE = \false;
    /**
     * Min width/height for og:image.
     */
    const OG_IMAGE_MIN_SIZE = 200;
    /**
     * Max width/height for og:image.
     */
    const OG_IMAGE_MAX_SIZE = 1500;
    /**
     * Class of current element.
     * @var string
     */
    protected $class = 'Landing';
    /**
     * Local version of table map with available fields for change.
     * @return array
     */
    protected function getMap()
    {
    }
    /**
     * Allowed or not additional fields for this form.
     * @return boolean
     */
    protected function additionalFieldsAllowed()
    {
    }
    /**
     * Detect image in landing content.
     * @param int $lid Landing id.
     * @param int $limit Limit for pictures.
     * @return array
     */
    protected function detectLandingImage($lid, $limit = 0)
    {
    }
    /**
     * Get meta tags for current landing.
     * @return array
     */
    protected function getMeta()
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
     * Base executable method.
     * @return void
     */
    public function executeComponent()
    {
    }
}