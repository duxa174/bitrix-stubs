<?php

namespace Bitrix\Landing\Hook\Page;

class Fonts extends \Bitrix\Landing\Hook\Page
{
    /**
     * Default font for backward compatibility.
     */
    public const DEFAULT_FONTS = ['g-font-open-sans' => ['name' => 'Open Sans', 'family' => '"Open Sans", Helvetica, Arial, sans-serif', 'url' => 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=cyrillic'], 'g-font-roboto' => ['name' => 'Roboto', 'family' => '"Roboto", Arial, sans-serif', 'url' => 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&subset=cyrillic,cyrillic-ext,latin-ext'], 'g-font-roboto-slab' => ['name' => 'Roboto Slab', 'family' => '"Roboto Slab", Helvetica, Arial, sans-serif', 'url' => 'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&subset=cyrillic,cyrillic-ext,latin-ext'], 'g-font-montserrat' => ['name' => 'Montserrat', 'family' => '"Montserrat", Helvetica, Arial, sans-serif', 'url' => 'https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,900&subset=cyrillic'], 'g-font-alegreya-sans' => ['name' => 'Alegreya Sans', 'family' => '"Alegreya Sans", sans-serif', 'url' => 'https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,900&subset=cyrillic-ext,latin-ext'], 'g-font-cormorant-infant' => ['name' => 'Cormorant Infant', 'family' => '"Cormorant Infant", serif', 'url' => 'https://fonts.googleapis.com/css?family=Cormorant+Infant:400,400i,600,600i,700,700i&subset=cyrillic-ext,latin-ext'], 'g-font-pt-sans-caption' => ['name' => 'PT Sans Caption', 'family' => '"PT Sans Caption", sans-serif', 'url' => 'https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=cyrillic-ext,latin-ext'], 'g-font-pt-sans-narrow' => ['name' => 'PT Sans Narrow', 'family' => '"PT Sans Narrow", sans-serif', 'url' => 'https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Sans:400,700&subset=cyrillic-ext,latin-ext'], 'g-font-pt-sans' => ['name' => 'PT Sans', 'family' => '"PT Sans", sans-serif', 'url' => 'https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic-ext,latin-ext'], 'g-font-lobster' => ['name' => 'Lobster', 'family' => '"Lobster", cursive', 'url' => 'https://fonts.googleapis.com/css?family=Lobster&subset=cyrillic-ext,latin-ext']];
    /**
     * Set fonts on the page.
     * @var array
     */
    protected static $setFonts = [];
    /**
     * Map of the field.
     * @return array
     */
    protected function getMap()
    {
    }
    /**
     * Enable or not the hook.
     * @return boolean
     */
    public function enabled()
    {
    }
    /**
     * Sets font code as using on the page.
     * @param string $fontCode Font code.
     * @return void
     */
    public static function setFontCode(string $fontCode) : void
    {
    }
    /**
     * Outputs default font.
     * @param string $code Font code.
     * @return string
     */
    public static function outputDefaultFont(string $code) : string
    {
    }
    /**
     * Sets fonts data to the page.
     * @param array $fonts Fonts data ([fontCode => fontStyle]).
     * @return void
     */
    protected function outputFonts(array $fonts) : void
    {
    }
    /**
     * Exec hook.
     * @return void
     */
    public function exec()
    {
    }
}