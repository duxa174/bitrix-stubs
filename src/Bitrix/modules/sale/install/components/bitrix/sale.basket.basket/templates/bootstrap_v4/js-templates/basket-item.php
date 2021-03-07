<?php

/**
 * @var array $mobileColumns
 * @var array $arParams
 * @var string $templateFolder
 */
$usePriceInAdditionalColumn = \in_array('PRICE', $arParams['COLUMNS_LIST']) && $arParams['PRICE_DISPLAY_MODE'] === 'Y';