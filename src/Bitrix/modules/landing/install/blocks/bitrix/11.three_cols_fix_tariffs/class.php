<?php

class ThreeColsFixTariffsBlock extends \Bitrix\Landing\LandingBlock
{
    /**
     * Url to get Bitrix24 prices.
     */
    const B24_PRICE_URL = 'https://www.1c-bitrix.ru/buy_tmp/b24_catalog.php?currency=RUR&area=ru';
    /**
     * Available Bitrix24 tariffs.
     */
    const B24_TARIFF_CODES = ['START_20191', 'CRM_20191', 'CRM_20191', 'TEAM_20191', 'COMPANY1'];
    /**
     * Returns actual Bitrix24 prices.
     * @return array
     */
    protected function getPrices() : array
    {
    }
    /**
     * Method, which executes just before block to view.
     * @param Block $block Block instance.
     * @return void
     */
    public function beforeView(\Bitrix\Landing\Block $block)
    {
    }
}