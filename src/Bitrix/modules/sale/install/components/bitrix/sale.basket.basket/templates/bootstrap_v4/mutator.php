<?php

/**
 *
 * This file modifies result for every request (including AJAX).
 * Use it to edit output result for "{{ mustache }}" templates.
 *
 * @var array $result
 */
$mobileColumns = isset($this->arParams['COLUMNS_LIST_MOBILE']) ? $this->arParams['COLUMNS_LIST_MOBILE'] : $this->arParams['COLUMNS_LIST'];