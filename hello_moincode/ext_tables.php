<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'HelloMoincode.Greeting',
        'Greeting',
        'Greeting Message'
    );
});
